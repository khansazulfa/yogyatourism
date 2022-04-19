@extends('template')

@section('konten')
<main>
    <section class="section-details-header" id="header-profile"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <!-- breadcrumb pada bagiat "paket travel" -->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                Home
                            </li>
                            <li class="breadcrumb-item">
                                Member
                            </li>
                            <li class="breadcrumb-item active">
                                Dashboard
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                
                @include('member.menu_member')  
                
                <div class="col-9">
                    <div class="card card-details">
                        <div class="row">
                            
                        
                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                 Tiketku</div>
                                                    <div class="h6 mb-0 font-weight-bold text-gray-800"></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa-user-circle fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
 
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                      Berikan Ulasan</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fa-user-circle fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </section>
        </main>
        @endsection
        
        
