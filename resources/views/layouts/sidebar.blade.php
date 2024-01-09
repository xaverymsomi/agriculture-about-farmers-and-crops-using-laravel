        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Content Wrapper -->
            <!-- Sidebar -->
        @php
            $id = Auth::user()->id;
            $data = App\Models\User::find($id);
            $user = $data->role;
        @endphp


        @if ($user === 'admin')
        <ul class="navbar-nav kvm-bg sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-icon">
                    <img class="" src="{{ asset('logo/logo.png') }}" alt="" style="width: 60px;">
                </div>
                <div class="sidebar-brand-text mx-1">Farm</div>
            </a>
        
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
        
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
        
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Component"
                    aria-expanded="true" aria-controls="Component">
                    <i class="fas fa-fw fa-users"></i>
                    <span> Farmers Management</span>
                </a>
                <div id="Component" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Farmers Management:</h6>
                        <a class="collapse-item" href="{{ route('farmer') }}"> 
                            <i class="fa fa-user text-danger"></i> Farmers
                        </a>
                    </div>
                </div>
            </li>
        
            
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#carcomponent"
                    aria-expanded="true" aria-controls="carcomponent">
                    <i class="fas fa-fw fa-bus"></i>
                    <span>  Farm Management  </span>
                </a>
                <div id="carcomponent" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Farm Management:</h6>
                        <a class="collapse-item" href="">
                            <i class="fas fa-fw fa-car text-danger"></i> Farm
                        </a>
                        <h6 class="collapse-header">Crops Management:</h6>
                        <a class="collapse-item" href="{{ route('crop.index') }}">
                            <i class="fa fa-database text-danger"></i> Crop
                        </a>
                    </div>
                </div>
            </li>
        
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#market"
                    aria-expanded="true" aria-controls="Component">
                    <i class="fas fa-fw fa-user"></i>
                    <span> Market Management</span>
                </a>
                <div id="market" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Market Management:</h6>
                        <a class="collapse-item" href="{{ route('farmer') }}"> 
                            <i class="fa fa-user text-danger"></i> Market
                        </a>
                    </div>
                </div>
            </li>
        
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#report"
                    aria-expanded="true" aria-controls="report">
                    <i class="fas fa-fw fa-file"></i>
                    <span> Reports Management</span>
                </a>
                <div id="report" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Reports Management:</h6>
                        <a class="collapse-item" href=""> 
                            <i class="fa fa-file text-danger"></i> Reports
                        </a>
                        <a class="collapse-item" href=""> 
                            <i class="fa fa-user text-danger"></i> Order By User
                        </a>
                    </div>
                </div>
            </li>
        
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sitesetting"
                    aria-expanded="true" aria-controls="sitesetting">
                    <i class="fas fa-fw fa-users"></i>
                    <span> Setting Management</span>
                </a>
                <div id="sitesetting" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">My Setting:</h6>
                        <a class="collapse-item" href=""> 
                            <i class="fa fa-user text-danger"></i> Setting
                        </a>
                        <a class="collapse-item" href=""> 
                            <i class="fa fa-house text-danger"></i> Shop Comssion
                        </a> 
                        <a class="collapse-item" href=""> 
                            <i class="fa fa-house text-danger"></i> Today Comssion
                        </a>
                    </div>
                </div>
            </li> 
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        
        </ul>
        @else
        <ul class="navbar-nav kvm-bg sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-icon">
                    <img class="" src="{{ asset('logo/logo.png') }}" alt="" style="width: 60px;">
                </div>
                <div class="sidebar-brand-text mx-1">Farm</div>
            </a>
        
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
        
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>    
            
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#carcomponent"
                    aria-expanded="true" aria-controls="carcomponent">
                    <i class="fas fa-fw fa-bus"></i>
                    <span>  Farm Management  </span>
                </a>
                <div id="carcomponent" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Farm Management:</h6>
                        <a class="collapse-item" href="">
                            <i class="fas fa-fw fa-car text-danger"></i> My Farm
                        </a>
                        <h6 class="collapse-header">Crops Management:</h6>
                        <a class="collapse-item" href="{{ route('crop.index') }}">
                            <i class="fa fa-database text-danger"></i> Crop
                        </a>
                    </div>
                </div>
            </li>
        
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#market"
                    aria-expanded="true" aria-controls="Component">
                    <i class="fas fa-fw fa-user"></i>
                    <span> Market Management</span>
                </a>
                <div id="market" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Market Management:</h6>
                        <a class="collapse-item" href="{{ route('farmer') }}"> 
                            <i class="fa fa-user text-danger"></i> Market
                        </a>
                    </div>
                </div>
            </li>
        
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#report"
                    aria-expanded="true" aria-controls="report">
                    <i class="fas fa-fw fa-file"></i>
                    <span> Reports Management</span>
                </a>
                <div id="report" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Reports Management:</h6>
                        <a class="collapse-item" href=""> 
                            <i class="fa fa-file text-danger"></i> Reports
                        </a>
                        <a class="collapse-item" href=""> 
                            <i class="fa fa-user text-danger"></i> Order By User
                        </a>
                    </div>
                </div>
            </li>
        
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        
        </ul>
        @endif
<!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.navigation')
                <!-- End of Topbar -->
