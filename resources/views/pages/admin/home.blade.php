@extends('layouts.admin')

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
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
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
                                            <h6 class="m-b-5">Total Kecamatan</h6>
                                            <h3 class="m-b-0">{{ $kecamatan->count() }}</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="material-icons-two-tone text-primary">home_work</i>
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
                                            <h6 class="m-b-5">Total Berita</h6>
                                            <h3 class="m-b-0">{{ $berita->count() }}</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="material-icons-two-tone text-primary">featured_play_list</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Grafik Penduduk</h5>
                                </div>
                                <div class="card-body">
                                    <div id="grafik-penduduk" style="width:100%"></div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-sm-4">
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
                        </div> --}}
                    </div>

                </div>
                <!-- customer-section end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>


@endsection

@push('script')
    <script src="{{ asset("admin/js/plugins/apexcharts.min.js") }}"></script>
    {{-- <script src="{{ asset("admin/js/pages/chart-apex.js") }}"></script> --}}

    <script>
        'use strict';
        $(document).ready(function() {
            setTimeout(function() {
                $(function() {
                    var options = {
                        chart: {
                            height: 320,
                            type: 'pie',
                        },
                        labels: [@foreach ($kecamatan as $eachData)'{{ $eachData->nama_kecamatan }}', @endforeach],
                        series: [@foreach ($kecamatan as $eachData){{ $eachData->jumlah_penduduk }}, @endforeach],
                        colors: [@foreach ($kecamatan as $eachData)'{{ '#' . random_color() }}', @endforeach],
                        legend: {
                            show: true,
                            position: 'bottom',
                        },
                        dataLabels: {
                            enabled: true,
                            dropShadow: {
                                enabled: false,
                            }
                        },
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                legend: {
                                    position: 'bottom'
                                }
                            }
                        }]
                    }
                    var chart = new ApexCharts(
                        document.querySelector("#grafik-penduduk"),
                        options
                    );
                    chart.render();
                });
            }, 700);
        });
    </script>
@endpush
