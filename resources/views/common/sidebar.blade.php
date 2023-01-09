<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
       
        <div class="sidebar-brand-text  ">
            <img class="rounded-circle" src="{{asset('admin/img/photo.jpeg')}}" alt="" srcset="" height="70" width="50">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Management
    </div>
     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#taTpDropDown"
            aria-expanded="true" aria-controls="taTpDropDown">
            <i class="fas fa-user-alt"></i>
            <span>User Management</span>
        </a>
        <div id="taTpDropDown" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Management:</h6>
                <a class="collapse-item" href="{{ route('users.index') }}">List</a>
                <a class="collapse-item" href="{{ route('users.create') }}">Add New</a>
                <a class="collapse-item" href="{{ route('users.import') }}">Import Data</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseT"
            aria-expanded="true" aria-controls="collapseT">
            <i class="fas fa-fw fa-cog"></i>
            <span>Chargement</span>
        </a>
        <div id="collapseT" class="collapse" aria-labelledby="headingT" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion des mouvements:</h6>
                <a class="collapse-item" href="/mouvement">Lister</a>
                <a class="collapse-item" href="/mouvement/create">Ajout</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Camions</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion Camions:</h6>
                <a class="collapse-item" href="/camion">Lister</a>
                <a class="collapse-item" href="/camion/create">Ajout</a>
              

            </div>
        </div>
        
       
       
    </li>
   
   
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoss" aria-expanded="true" aria-controls="collapseTwoss">
            <i class="fas fa-fw fa-wa"></i>
            <span>mouvements</span>
        </a>
        <div id="collapseTwoss" class="collapse" aria-labelledby="headingTwoss" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion chargement:</h6>
                <a class="collapse-item" href="/camion">Lister</a>
                <a class="collapse-item" href="{{('register')}}">Ajout</a>
              

            </div>
        </div>

    </li>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilit" aria-expanded="true" aria-controls="collapseUtilit">
            <i class="fas fa-fw fa-user"></i>
            <span>Categorie</span>
        </a>
        <div id="collapseUtilit" class="collapse" aria-labelledby="headingUtilit" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion Categories:</h6>
                <a href="/categorie" class="collapse-item">Lister</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Lieux</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion Lieux:</h6>
                <a href="/lieu" class="collapse-item" >Lister</a>
                <a href="/lieu/create" class="collapse-item" >Ajout</a>
            </div>
        </div>
    </li>



     <!-- Divider -->
     <hr class="sidebar-divider">

     @hasrole('Admin')
         <!-- Heading -->
         <div class="sidebar-heading">
             Admin Section
         </div>
 
         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                 aria-expanded="true" aria-controls="collapsePages">
                 <i class="fas fa-fw fa-folder"></i>
                 <span>Masters</span>
             </a>
             <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Role & Permissions</h6>
                     <a class="collapse-item" href="{{ route('roles.index') }}">Roles</a>
                     <a class="collapse-item" href="{{ route('permissions.index') }}">Permissions</a>
                 </div>
             </div>
         </li>

          <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        @endhasrole
    
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>