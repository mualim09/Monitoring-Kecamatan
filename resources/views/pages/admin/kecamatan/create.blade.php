@extends('layouts.admin')
@section('title', 'Kecamatan | Tambah kecamatan')
@section('content')
    <!-- [ Main Content ] start -->
    <section class="pc-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Kecamatan</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Tambah data kecamatan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">

                <div class="col-md-12">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Failed!</strong> Periksa kembali input!
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h5>Form Input Kecamatan</h5>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.kecamatan.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nama
                                                Kecamatan</label>
                                            <input name="nama_kecamatan" value="{{ old('nama_kecamatan') }}" type="text"
                                                class="form-control @error('nama_kecamatan') is-invalid @enderror">
                                            @error('nama_kecamatan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Luas Wilayah</label>
                                            <input name="luas_wilayah" type="text"
                                                class="form-control @error('luas_wilayah') is-invalid @enderror">
                                            @error('luas_wilayah')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="">Gambar</label>
                                            <div class="input-group">
                                                <input name="gambar" type="file"
                                                    class="form-control @error('gambar') is-invalid @enderror"
                                                    id="inputGroupFile02">
                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                            </div>
                                            @error('gambar')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nama Camat</label>
                                            <input value="{{ old('nama_camat') }}" name="nama_camat" type="text"
                                                class="form-control @error('nama_camat') is-invalid @enderror">
                                            @error('nama_camat')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Jumlah Penduduk</label>
                                            <input name="jumlah_penduduk" type="text"
                                                class="form-control @error('jumlah_penduduk') is-invalid @enderror">
                                            @error('jumlah_penduduk')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mt-3">
                                            <label class="form-label">Deskripsi</label>
                                            <textarea name="deskripsi"
                                                class="form-control @error('deskripsi') is-invalid @enderror" id="editor"
                                                rows="3"></textarea>
                                            @error('deskripsi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="col-md-8">
                                        <div class="alert alert-secondary" role="alert">
                                            Silahkan drag marker pada map untuk mendapatkan koordinat!
                                        </div>
                                        <div class="form-group">
                                            <div id="mapid"></div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Latitude</label>
                                            <input name="lat" type="text"
                                                class="form-control  @error('lat') is-invalid @enderror" id="latitude">
                                            @error('lat')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Longitude</label>
                                            <input name="longi" type="text"
                                                class="form-control @error('longi') is-invalid @enderror" id="longitude">
                                            @error('longi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- [ form-element ] end -->
            </div>
            <!-- [ Main Content ] end -->

        </div>
    </section>
@endsection

@push('map-style')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <style>
        #mapid {
            height: 500px;
            width: 100%;
        }

    </style>
@endpush

@push('ckeditor-script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

@push('map-script')
    <script>
        var mymap = L.map('mapid').setView([1.2962761196418218, 101.85723788015753], 9);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 20,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1Ijoid2lsbHlrdXJuaWF3YW4iLCJhIjoiY2tpMWs4YXZkMDhudDJ3bXZveGl4c295OCJ9.TJxWPtBp6wEVF7BFhNEBxg'
        }).addTo(mymap);






        //option untuk marker
        let option = {
            draggable: true,
        }
        let marker = L.marker([1.2962761196418218, 101.85723788015753], option).addTo(mymap);

        //event ketika marker di gerakkan
        marker.on('move', function() {

            //ambil value dari object menggunakan destruction
            const {
                lat,
                lng
            } = marker.getLatLng()

            const latitude = document.querySelector("#latitude").value = lat;
            const longitude = document.querySelector("#longitude").value = lng;
        })
    </script>
@endpush
