<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="main_container">
                @php
                    $farmers = App\Models\User::where('role','farmer')->latest()->get();
                
                    $id = Auth::user()->id;
                    $data = App\Models\User::find($id);
                    $user = $data->role;
                @endphp

                @if ($user == 'admin')
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Total Farm 
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-bus fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Earnings (Monthly) Card Example -->
            
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Total Commisions</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            
                                                Tsh.<span class="count"></span>/= 
                                            
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sellers
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
                                                   
                                                    <span class="count"></span>
                                                </div>
                                            </div>
                                            <div class="col">
                                               <!--  <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax=""></div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Registered Farmers</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <span class="count">{{ count($farmers) }}</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-blue-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 mb-4">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                Farm Summary
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Farmer</th>
                                                <th>Farm Size</th>
                                                <th>Location</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($farmers as $items)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $items->name }}</td>
                                                <td>{{ $items->FarmSize }}</td>
                                                <td>{{ $items->Location }}</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light-info text-info">{{ $items->status }}</div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>        
                </div>
                @else
                <div class="row">
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Total Farm 
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-bus fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Earnings (Monthly) Card Example -->
            
                    <!-- Earnings (Monthly) Card Example -->
                    {{-- <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Total Commisions</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            
                                                Tsh.<span class="count"></span>/= 
                                            
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
            
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sellers
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
                                                   
                                                    <span class="count"></span>
                                                </div>
                                            </div>
                                            <div class="col">
                                               <!--  <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax=""></div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Pending Requests Card Example -->
                    {{-- <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Registered Farmers</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <span class="count">{{ count($farmers) }}</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-blue-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div> 
                @endif
            
        </div>
    </div>
</x-app-layout>
