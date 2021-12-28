@extends('layouts.user')
@section('title', 'Sistem Informasi | ' . $berita->judul)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p class="mb-5">
                    <img src="{{ Storage::url($berita->picture) }}" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3">{{ $berita->judul }}</h2>
                {!! $berita->content !!}
                {{-- <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">Life</a>
                        <a href="#" class="tag-cloud-link">Sport</a>
                        <a href="#" class="tag-cloud-link">Tech</a>
                        <a href="#" class="tag-cloud-link">Travel</a>
                    </div>
                </div> --}}

                {{-- <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                        <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                        <h3>George Washington</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                            voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur
                            similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div> --}}


                <div class="pt-5 mt-5">
                    <h3 class="mb-5">{{ $komentar->count() }} Komentar </h3>
                    <ul class="comment-list">
                        @foreach ($komentar as $item)
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ asset('user/images/person_1.jpg') }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>{{ $item->nama }}</h3>
                                    <div class="meta mb-3">{{ $item->created_at }}</div>
                                    <p>{{ $item->pesan }}</p>
                                    {{-- <p><a href="#" class="reply">Reply</a></p> --}}
                                </div>
                            </li>
                        @endforeach

                    </ul>
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="{{ route('user.add_comment', $berita->id) }}" method="POST" class="p-5 bg-light">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama *</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>

                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                            </div>

                        </form>
                    </div>
                </div>

            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Berita Terbaru</h3>
                    @foreach ($berita_all as $item)
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url({{ Storage::url($item->picture) }});"></a>
                            <div class="text">
                                <h3 class="heading"><a
                                        href="{{ route('user.single_berita', $item->slug) }}">{{ $item->judul }}</a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">cat</a>
                        <a href="#" class="tag-cloud-link">abstract</a>
                        <a href="#" class="tag-cloud-link">people</a>
                        <a href="#" class="tag-cloud-link">person</a>
                        <a href="#" class="tag-cloud-link">model</a>
                        <a href="#" class="tag-cloud-link">delicious</a>
                        <a href="#" class="tag-cloud-link">desserts</a>
                        <a href="#" class="tag-cloud-link">drinks</a>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                        voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique,
                        inventore eos fugit cupiditate numquam!</p>
                </div> --}}
            </div>

        </div>
    </div>

@endsection
