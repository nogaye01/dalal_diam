<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userManager(Request $request){
    
        $users = User::where([
            ['name', '!=', Null], 
            [function ($query) use ($request) {
                if (($name = $request->name)) {
                    $details = 'Utilisateur : '.$request->name;
                    UserController::actionStore('Recherche', $details);
                    $query->orWhere('name', 'LIKE', '%' . $name . '%')
                        ->orWhere('email', 'LIKE', '%' . $name . '%')
                        ->get();
                }
            }]
        ])->paginate(10);

       
            if(sizeof($users)==0){
                $users = DB::table('users')
                                ->select('id', 'name', 'email')
                                ->whereNull('deleted_at')
                                ->get();
                                return view('users.allUsers')->with('users', $users)->with('message', 'Aucun résultat');
            }
            else{
        return view('users.allUsers', compact('users'));}

    }

    public function deleteUser($userId){
        $user = DB::table('users')
        ->where('is_admin', 0)
        ->select('name')
        ->first();

        $deletedUser = User::where('id', $userId)
                            ->where('is_admin', 0)
                            ->delete();

        
        // dd($user);

        if($deletedUser){
            return back()->with('message', 'Utilisateur '.$user->name.' supprimé');
        }
        else{
            return back()->with('message', 'Erreur..., Nous n\'avons pas pu supprimer cet utilisateur !');
        }
    }
}
