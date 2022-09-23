@extends('layouts.app')

@section('title','Home Page')
<!-- /title -->
@section('banner')
<section class="wrapper bg-soft-primary">
    <div class="container py-12 py-md-8 text-center">
        <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                <h1 class="display-1 mb-3">Technology News</h1>
                <p class="lead px-lg-5 px-xxl-8 mb-1">Welcome to our journal. Here you can find the latest company news and business articles.</p>
            </div>
        </div> 
    </div>
</section>
@endsection

@section('articles')
<section class="wrapper bg-light">
    <div class="container py-4 py-md-8">
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-8">
                <div class="blog classic-view">
                @foreach($posts as $post)
                    @once
                    <article class="post">
                        <div class="card">
                            <figure class="card-img-top overlay overlay-1 hover-scale">
                                <a href="{{ route('posts', ['id' => $post->id]) }}">
                                    <img src="{{asset('storage/'.$post->thumbnail)}}" alt="here" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Batafsil</h5>
                                </figcaption>
                            </figure>
                            <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category">{{$post->category->title}}</a>
                                    </div>
                                    <h2 class="post-title mt-1 mb-0">
                                        <a class="link-dark" href="{{route('posts',['id'=>$post->id])}}">{{$post->title}}</a>
                                    </h2>
                                </div>
                                <div class="post-content">
                                    <p>{{$post->descript}}</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y')}}</span>
                                    </li>
                                    <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By
                                                Sandbox</span></a></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span>
                                                Comments</span></a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-eye"></i>{{$post->views}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    @endonce
                   @endforeach 
                </div>
                <div class="blog grid grid-view">
                    <div class="row isotope gx-md-8 gy-8 mb-8">
                        @foreach ($posts as $post)
                        @if ($loop->first)
                            @continue
                        @endif
                        <article class="item post col-md-6">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="{{Storage::url($post->thumbnail)}}" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Batafsil</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="hover" rel="category">{{$post->category->title}}</a>
                                        </div>
                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('posts',$post->id)}}">{{$post->title}}</a></h2>
                                    </div>
                                    <div class="post-content">
                                        <p>{{$post->descript}}</p>
                                    </div> 
                                </div>
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y')}}</span></li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-eye"></i>
                                                </i>{{$post->views}}</a></li>

                                    </ul>
                                </div>
                            </div>
                        </article>
                        @endforeach


                    </div>
                </div>
                <nav class="d-flex" aria-label="pagination">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
                @include('layouts.sidebar')
            </aside>
        </div>
    </div>
</section>
@endsection