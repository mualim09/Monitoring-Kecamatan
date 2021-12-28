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

                <!-- support-section end -->
                <!-- customer-section start -->
                <div class="col-md-12">

                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Data Berita</h5>
                        </div>
                        <div class="pro-scroll">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>

                                            <tr>
                                                <th>Judul</th>
                                                <th>Picture</th>
                                                <th>Tanggal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($berita as $item)
                                                <tr>
                                                    <td>{{ $item->judul }}</td>
                                                    <td><img width="80" height="80"
                                                            src="{{ Storage::url($item->picture) }}" alt=""></td>
                                                    <td>
                                                        {{ $item->created_at }}
                                                    </td>

                                                    <td>
                                                        <form method="POST"
                                                            action="{{ route('admin.berita.destroy', $item->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <a href="{{ route('admin.berita.edit', $item->id) }}"><i
                                                                    class="icon feather icon-edit f-16  text-success"></i></a>

                                                            <button class="btn-transparent" type="submit"><i
                                                                    class="feather icon-trash-2 ml-3 f-16 text-danger"></i></button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @empty

                                            @endforelse


                                        </tbody>
                                    </table>
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
