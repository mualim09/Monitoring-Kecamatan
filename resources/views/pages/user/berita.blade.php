@extends('layouts.user')
@section('title', 'Sistem Informasi | Berita')
@section('content')
    <div class="container">
        <div class="row d-flex">
            @foreach ($berita as $item)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end w-100">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ Storage::url($item->picture) }});">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">{{ date('d', strtotime($item->created_at)) }}</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">{{ date('Y', strtotime($item->created_at)) }}</span>
                                    <span class="mos">{{ date('F', strtotime($item->created_at)) }}</span>
                                </div>
                            </div>
                            <h3 class="heading mb-3"><a href="#">{{ $item->judul }}</a></h3>
                            {!! Str::limit($item->content, 80, ' ...') !!}
                            <p><a href="{{ route('user.single_berita', $item->slug) }}" class="btn-custom"><span
                                        class="ion-ios-arrow-round-forward mr-3"></span>Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $berita->links('parts/user/pagination') }}

    </div>

@endsection
