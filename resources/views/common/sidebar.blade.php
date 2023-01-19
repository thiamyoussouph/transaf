<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center  " href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img class="rounded-circle" src="{{asset('admin/img/photo.jpeg')}}" alt="" srcset="" height="50" width="50">
        </div>
        <div class="sidebar-brand-text mx-1 ">TransAfrica</div>
    </a> 
   
    <!-- Divider -->
    <hr class="sidebar-divider">

    @hasrole('Admin')
       

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
                    <a class="collapse-item" href="{{ route('users.index') }}">Liste Utilisateurs</a>
                    <a class="collapse-item" href="{{ route('users.create') }}">jouter Nouveau</a>
                    <a class="collapse-item" href="{{ route('users.import') }}">Importer Données</a>
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
                    <a href="{{ route('lieu.index') }}" class="collapse-item" >Liste Des Lieux</a>
                    {{-- <a href="{{ route('lieu.create') }}" class="collapse-item" >Ajout</a> --}}
                </div>
            </div>
        </li>
        <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilit" aria-expanded="true" aria-controls="collapseUtilit">
            <i class="fas fa-fw fa-user"></i>
            <span>Categories</span>
        </a>
        <div id="collapseUtilit" class="collapse" aria-labelledby="headingUtilit" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion Categories:</h6>
                <a href="{{ route('categorie.index') }}" class="collapse-item">Liste Catégories</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Camions</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion Camions:</h6>
                <a class="collapse-item" href="{{ route('camion.index') }}">Liste Des Camions</a>
                <a class="collapse-item" href="{{ route('camion.forme') }}">Ajouter Un Camion</a>
                <a class="collapse-item" href="{{ route('chauffeur_Camion.index') }}">Liste Des Camions Affectés</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span>chauffeurs</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion chauffeurs:</h6>
                <a class="collapse-item" href="{{ route('chauffeur.index') }}">Liste Des Chauffeurs</a>
                <a class="collapse-item" href="{{ route('chauffeur.forme') }}">Ajouter Un Chauffeur</a>
                <a class="collapse-item" href="{{ route('chauffeur_Camion.create') }}">Affecter Un Camion</a>
                


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
                <a class="collapse-item" href="{{ route('mouvement.index') }}">Liste</a>
                <a class="collapse-item" href="{{ route('mouvement.forme') }}">Ajouter Chargement</a>
                <a class="collapse-item" href="{{ route('mouvement.formeDecharger') }}">Ajouter Déchargement</a>


            </div>
        </div>
    </li>

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
    @endhasrole
    
    @hasrole('Dechargement')
 
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseT"
            aria-expanded="true" aria-controls="collapseT">
            <i class="fas fa-fw fa-cog"></i>
            <span>Chargement</span>
        </a>
        <div id="collapseT" class="collapse" aria-labelledby="headingT" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion des mouvements:</h6>
                <a class="collapse-item" href="{{ route('mouvement.store.decharge') }}">Ajouter Déchargement</a>


            </div>
        </div>
    </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    @endhasrole
    

    @hasrole('Chargement')

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseT"
            aria-expanded="true" aria-controls="collapseT">
            <i class="fas fa-fw fa-cog"></i>
            <span>Chargement</span>
        </a>
        <div id="collapseT" class="collapse" aria-labelledby="headingT" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion des mouvements:</h6>
                <a class="collapse-item" href="{{ route('mouvement.forme') }}">Ajouter Chargement</a>
                


            </div>
        </div>
    </li>
    @endhasrole
     <!-- Nav Item - Pages Collapse Menu -->


   
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