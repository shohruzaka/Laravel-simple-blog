@extends('layouts.app')

@section('title','Post page')

@section('banner') 

<section class="wrapper bg-navy">
  <div class="container py-4 py-md-6 text-center">
    <div class="row">
      <div class="col-md-10 col-xl-8 mx-auto">
        <div class="post-header">
          <div class="post-category text-line text-white">
            <a href="#" class="text-reset" rel="category">{{$post->category->title}}</a>
          </div>
          <!-- /.post-category -->
          <h1 class="display-4 mb-4 text-white">{{$post->title}}</h1>
          <ul class="post-meta text-white">
            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</span></li>
            <li class="post-author"><i class="uil uil-user"></i><a href="#" class="text-reset"><span>By Sandbox</span></a></li>
            <li class="post-likes"><i class="uil uil-eye"></i><a href="#" class="text-reset">{{$post->views}}<span> Views</span></a></li>
          </ul>
          <!-- /.post-meta -->
        </div>
        <!-- /.post-header -->
      </div>
    </div>
  </div>
</section>
@endsection
@section('content')
<section class="wrapper bg-light">
  <div class="container py-6 py-md-8">
    <div class="row gx-lg-8 gx-xl-12">
      <div class="col-lg-8">
        <div class="blog single">
          <div class="card">
            <figure class="card-img-top"><img src="{{asset('storage/public/'.$post->thumbnail)}}" alt="" /></figure>
            <div class="card-body">
              <div class="classic-view">
                <article class="post">
                  <div class="post-content mb-5">
                    <h4 class="h4 mb-4" style="text-align:justify;">{{$post->descript}}</h4>
                    {!! $post->content !!}
                      
                    <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-4">
                      <div>
                        <ul class="list-unstyled tag-list mb-0">
                          @foreach ($post->tags as $tag)
                            <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill mb-0">{{$tag->title}}</a></li>
                          @endforeach
                        </ul>
                      </div>
                      <div class="mb-0 mb-md-2">
                        <div class="dropdown share-dropdown btn-group">
                          <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="uil uil-share-alt"></i> Ulashish </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="uil uil-twitter"></i>Twitter</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-facebook-f"></i>Facebook</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-linkedin"></i>Linkedin</a>
                          </div>
                          <!--/.dropdown-menu -->
                        </div>
                        <!--/.share-dropdown -->
                      </div>
                    </div>
                    <!-- /.post-footer -->
                </article>
                <!-- /.post -->
              </div>
              <div class="author-info d-md-flex align-items-center mb-2">
                <div class="d-flex align-items-center">
                  <figure class="user-avatar"><img class="rounded-circle" alt="" src="./assets/img/avatars/u5.jpg" /></figure>
                  <div>
                    <h6><a href="#" class="link-dark">Nikolas Brooten</a></h6>
                    <span class="post-meta fs-14">Sales Manager</span>
                  </div>
                </div>
                <div class="mt-2 mt-md-0 ms-auto">
                  <a href="#" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><i class="uil uil-file-alt"></i> All Posts</a>
                </div>
              </div>
              <!-- /.author-info -->
              <p><small> Dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac. Maecenas faucibus mollis interdum.</small></p>
              <nav class="nav social my-4">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
              </nav>
              <!-- /.social -->
              <h3 class="mb-4">You Might Also Like</h3>
              <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b4.jpg" alt="" /></a>
                          <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                          </figcaption>
                        </figure>
                        <div class="post-header">
                          <div class="post-category text-line">
                            <a href="#" class="hover" rel="category">Coding</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula tristique quis risus</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                          <ul class="post-meta mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></li>
                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                      </article>
                      <!-- /article -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                      <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b5.jpg" alt="" /></a>
                          <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                          </figcaption>
                        </figure>
                        <div class="post-header">
                          <div class="post-category text-line">
                            <a href="#" class="hover" rel="category">Workspace</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                          <ul class="post-meta mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2021</span></li>
                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                      </article>
                      <!-- /article -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                      <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b6.jpg" alt="" /></a>
                          <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                          </figcaption>
                        </figure>
                        <div class="post-header">
                          <div class="post-category text-line">
                            <a href="#" class="hover" rel="category">Meeting</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                          <ul class="post-meta mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2021</span></li>
                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                      </article>
                      <!-- /article -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                      <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b7.jpg" alt="" /></a>
                          <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                          </figcaption>
                        </figure>
                        <div class="post-header">
                          <div class="post-category text-line">
                            <a href="#" class="hover" rel="category">Business Tips</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                        </div>
                        <div class="post-footer">
                          <ul class="post-meta mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2021</span></li>
                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                      </article>
                      <!-- /article -->
                    </div>
                    <!--/.swiper-slide -->
                  </div>
                  <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
              </div>
              <!-- /.swiper-container -->
              <!-- /.comment-form -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.blog -->
      </div>
      <!-- /column -->
      <aside class="col-lg-4 sidebar mt-0">
        @include('layouts.sidebar')
        <!-- /.widget -->
      </aside>
      <!-- /column .sidebar -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
@endsection