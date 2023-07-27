<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Patient;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function patientManager(Request $request){
    
        $patients = Patient::where([
            ['name', '!=', Null], 
            [function ($query) use ($request) {
                if (($name = $request->name)) {
                    $details = 'Patient : '.$request->name;
                    PatientController::actionStore('Recherche', $details);
                    $query->orWhere('name', 'LIKE', '%' . $name . '%')
                        ->get();
                }
            }]
        ])->paginate(10);

       
            if(sizeof($patients)==0){
                $patients = DB::table('patients')
                                ->select('id', 'name')
                                ->whereNull('deleted_at')
                                ->get();
                                return view('patients.allPatients')->with('patients', $patients)->with('message', 'Aucun résultat');
            }
            else{
        return view('patients.allPatients', compact('patients'));}

    }

    public function deletePatient($patientId){
        $patient = DB::table('patients')
        ->where('is_admin', 0)
        ->select('name')
        ->first();

        $deletedPatient = patient::where('id', $patientId)
                            ->where('is_admin', 0)
                            ->delete();

        
        // dd($patient);

        if($deletedPatient){
            return back()->with('message', 'Utilisateur '.$patient->name.' supprimé');
        }
        else{
            return back()->with('message', 'Erreur..., Nous n\'avons pas pu supprimer cet utilisateur !');
        }
    }
}
