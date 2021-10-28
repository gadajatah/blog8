@extends('layouts.app')
@section('title', 'Admin | Dashboard')

@section('content')
    <header class="py-10 mb-4 bg-gradient-primary-to-secondary">
        <div class="container-xl px-4">
            <div class="text-center">
                <h1 class="text-white">Welcome Admin Pro</h1>
                <p class="lead mb-0 text-white-50">A professionally designed admin panel template built with Bootstrap 5</p>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4">
        <h2 class="mt-5 mb-0">Dashboards</h2>
        {{-- <p>Three dashboard examples to get you started!</p> --}}
        <hr class="mt-0 mb-4" />
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 1-->
                <div class="card border-start-lg border-start-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-primary mb-1">Earnings (monthly)</div>
                                <div class="h5">$4,390</div>
                            </div>
                            <div class="ms-2">
                                <i class="fas fa-dollar-sign fa-2x text-gray-200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 2-->
                <div class="card border-start-lg border-start-secondary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-secondary mb-1">Average sale price</div>
                                <div class="h5">$27.00</div>
                            </div>
                            <div class="ms-2">
                                <i class="fas fa-tag fa-2x text-gray-200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 3-->
                <div class="card border-start-lg border-start-success h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-success mb-1">Clicks</div>
                                <div class="h5">11,291</div>
                            </div>
                            <div class="ms-2">
                                <i class="fas fa-mouse-pointer fa-2x text-gray-200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 4-->
                <div class="card border-start-lg border-start-info h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-info mb-1">Conversion rate</div>
                                <div class="h5">1.23%</div>
                            </div>
                            <div class="ms-2">
                                <i class="fas fa-percentage fa-2x text-gray-200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection