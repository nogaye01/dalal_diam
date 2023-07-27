<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dalal Diam</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('../../css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
<body class="bg-gradient">

    <div class="container " >

        <!-- Outer Row -->
        <div class="row justify-content-center ">

            <div class="col-xl-7 col-lg-10" >

                <div class="card o-hidden border-0 shadow-lg my-5 d-flex">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row ">
                            
                            <div class="col-lg-9 " >
                                <div class="p-5 ">
                                    <div class="text-center text-secondary">
                                        <h1 class=" text-secondary mb-4">Géné</h1>
                                    </div>
                                    <form class="user" action="/addPatient" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                        <label for="nom" class="form-label">Nom</label>
                                            <input type="text" class="form-control form-control-user  text-secondary"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Entrer le nom..." name="name" value="{{old('name')}}">
                                        </div>
                                        @error('name')
                                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                         @enderror
                                         <div class="form-group ">
                                            <label for="prenom" class="form-label">Prénom</label>
                                            <input type="text" class="form-control form-control-user text-secondary" name="prenom" value="{{old('prenom')}}" placeholder="Entrer le prénom..." >
                                        </div>
                                        @error('type')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group ">
                                            <label for="birthDate" class="form-label">Date de naissance</label>
                                            <input type="text" class="form-control form-control-user text-secondary" name="birthDate" value="{{old('birthDate')}}" placeholder="Entrer la date de naissance" >
                                        </div>
                                        @error('delegate')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                       
                                        <div class="form-group ">
                                            <label for="tel" class="form-label">Numéro de téléphone</label>
                                            <input type="text" class="form-control form-control-user text-secondary" pattern="{+}{1}[0-9]{11,14}" name="phone" value="{{old('phone')}}" placeholder="Entrer le numéro de téléphone..." >
                                        </div>
                                        @error('phone')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                       

                                        <button type="submit"  class="btn btn-info btn-user btn-block">
                                           Ajouter                              
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="javascript:history.back()">RETOUR</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>