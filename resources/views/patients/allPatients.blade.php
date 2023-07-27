@extends('shared.master')
@section('content')
<body>
<div class="container-fluid">
        <div class="card-body d-flex justify-content-start">
          <h4 class="text-secondary">Liste des patients</h4>
        </div>
        @error('key')
          <div class="card alert alert-sm alert-danger h-15 w-25 ">{{ $message }}</div>
        @enderror
      
        </div>
       
              

               
  <div class="card shadow mb-4">
      <div class = "card-body">    
            <a href="/addPatient"><button class="btn btn-primary my-2 my-sm-0 "><i class="fa solid fa-plus "></i> Nouveau patient</button></a>
        </div>
  @if(session()->has('message'))
            <div class="alert alert-success alert-sm  h-15 w-50">
                {{ session()->get('message') }}
            </div>
        @endif
      <div class="card-body">
      <div class="table-responsive">
          <table id="dataTable" class="table table-bordered"  width="100%" cellspacing="0">
            <thead class="table-info">
              <tr>
              <th scope="col">Nom </th>
              <th scope="col">Age</th>
              <th scope="col">Actions</th> 
              </tr>
            </thead>
        
                <tbody>
                <!-- foreach($patients as $patient) -->
                  <tr>              
                      <td class="text-secondary">
                        <!-- $patient->name}} -->
                    </td> 
                        <td>
                            <!-- $patient->age}} -->
                        </td>                     
                        <td >
                        <div class="d-flex justify-content-start">
                          <div class="mr-3">
                                <form action="/deletepatient/" method="post">
                                    @csrf
                                    <button type = "submit" title="Voir le dossier médicale" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fa solid fa-folder "></i>
                                    </button>
                                </form>
                            </div>
                           
                                <div class="mr-3">
                                <form action="/showImages/" method="post" >
                                    @csrf
                                    <button type = "submit" title="Voir les radios" class="btn btn-secondary btn-circle btn-sm">
                                        <i class="fa solid fa-image "></i>
                                    </button>
                                </form>
                              </div>

                              <div class="mr-3">
                                <form action="/deletePatient/" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer cet utilisateur ?');">
                                    @csrf
                                    <button type = "submit" title="Supprimer" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fa solid fa-trash "></i>
                                    </button>
                                </form>
                                </div>
                          </div>
                        </td>                      
                  </tr>
                  <!-- endforeach -->
                </tbody>
            <!-- if(sizeof($patients)>10) -->
            <tfoot class="table-info">
                <tr>
                  <th scope="col">Nom </th>
                  <th scope="col">Age</th>
                  <th scope="col">Actions</th>
                </tr>
              </tfoot>
            <!-- endif -->
          </table>
         
        </div>
        </div>
</div>
@endsection
</body>
</html>





