
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-hospital"></i>
    </div>
    <div class="sidebar-brand-text mx-3">DALAL DIAM</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tableau de bord</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Gestion des patients
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="{{ Request::is('showPatients') ? 'nav-item collapsed active' : 'nav-item collapsed' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-user"></i>
        <span>Patients</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Informations :</h6>
            <a class="collapse-item" href="showPatients">Liste des patients</a>
            <!-- <a class="collapse-item" href="showPAtients">Radios</a> -->
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Images</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Radiologie :</h6>
            <a class="collapse-item" href="showPatients">Visualisation</a>
            <a class="collapse-item" href="/addImage">Enregistrement</a>
          
        </div>
    </div>
</li>

<!-- 
<hr class="sidebar-divider">


<div class="sidebar-heading">
    Partages
</div>


<li class="{{ Request::is('showReports') ? 'nav-item collapsed active' : 'nav-item collapsed' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Rapports</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Rapports :</h6>
            <a class="collapse-item" href="addReport">Génération</a>
            <a class="collapse-item" href="showUsers">Visualisation</a>
          
        </div>
    </div>
</li>

Nav Item - Charts
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Visualisation</span></a>
</li> -->

 

 
<!-- endif -->

@if(Auth::user()->is_admin) 

<hr class="sidebar-divider">
 <!-- if(Auth::user()->is_admin) -->
<!-- Heading -->
<div class="sidebar-heading">
    Gestion des utilisateurs
</div>

<li class="{{ Request::is('showUsers') ? 'nav-item collapsed active' : 'nav-item collapsed' }}">
    <a class="nav-link collapsed" href="showUsers" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-user"></i>
        <span>Utilisateurs</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Entités :</h6>
            <a class="collapse-item" href="showUsers">Liste des utilisateurs</a>
            <!-- <a class="collapse-item" href="register.html">Action</a> -->
          
        </div>
    </div>
</li>


@endif 


<!-- Nav Item - Tables -->
<!-- <li class="nav-item">
    <a class="nav-link" href="users.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li> -->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->


























