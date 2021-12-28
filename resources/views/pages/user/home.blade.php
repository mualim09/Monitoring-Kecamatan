@extends('layouts.user')
@section('title', 'Sistem Informasi | Beranda')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($berita as $item)
                    <div class="case">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <a href="blog-single.html" class="img w-100 mb-3 mb-md-0"
                                    style="background-image: url({{ Storage::url($item->picture) }});"></a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <h2><a href="{{ route('user.single_berita', $item->slug) }}">{{ $item->judul }}</a>
                                    </h2>
                                    <ul class="media-social list-unstyled">
                                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a>
                                        </li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                        </li>
                                    </ul>
                                    <div class="meta">
                                        <p class="mb-0"><a href="#">{{ $item->created_at }}</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{ $berita->links('parts/user/pagination') }}

    </div>

@endsection
