@extends('layouts.app')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card prod-p-card background-pattern">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-0">
                                        <div class="col">
                                            <h6 class="m-b-5">Total Profit</h6>
                                            <h3 class="m-b-0">$1,783</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="material-icons-two-tone text-primary">card_giftcard</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card prod-p-card bg-primary background-pattern-white">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-0">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Total Orders</h6>
                                            <h3 class="m-b-0 text-white">15,830</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="material-icons-two-tone text-white">local_mall</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card prod-p-card bg-primary background-pattern-white">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-0">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Average Price</h6>
                                            <h3 class="m-b-0 text-white">$6,780</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="material-icons-two-tone text-white">monetization_on</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card prod-p-card background-pattern">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-0">
                                        <div class="col">
                                            <h6 class="m-b-5">Product Sold</h6>
                                            <h3 class="m-b-0">6,784</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="material-icons-two-tone text-primary">local_offer</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- customer-section end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>

@endsection
