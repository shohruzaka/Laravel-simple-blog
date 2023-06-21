<div class="widget">
    <h4 class="widget-title mb-3">Search from articles</h4>
    <form class="search-form mb-4">
        <div class="form-floating mb-0">
            <input id="search-form" type="text" class="form-control" placeholder="Search">
            <label for="search-form">Search</label>
        </div>
    </form>
</div>
<div class="widget">
    <h4 class="widget-title mb-3">Categories</h4>
    <ul class="unordered-list bullet-primary text-reset">
        @foreach ($category as $cat)
        <li><a href="#">{{$cat->title}} ({{$cat->posts_count}})</a></li>
        @endforeach

    </ul>
</div>
<div class="widget">
    <h4 class="widget-title mb-3">Popular Posts</h4>
    <ul class="image-list">
    
        @foreach ($posts as $post)
        <li>
            <div class="post-content">
                <h6 class="mb-2"> <a class="link-dark" href="route('posts',['id'=>$post->id]">{{$post->title}}</a></h6>
                <ul class="post-meta">
                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y')}}</span></li>
                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                </ul>
            </div>
        </li>
        @endforeach

    </ul>
</div>

<div class="widget">
    <h4 class="widget-title mb-3">Tags</h4>
    <ul class="list-unstyled tag-list">
        @foreach ($tags as $tag)
        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">{{$tag->title}}</a></li>
        @endforeach

    </ul>
</div>
<div class="widget">
    <h4 class="widget-title mb-3">Archive</h4>
    <ul class="unordered-list bullet-primary text-reset">
        <li><a href="#">February 2019</a></li>
        <li><a href="#">January 2019</a></li>
        <li><a href="#">December 2018</a></li>
        <li><a href="#">November 2018</a></li>
        <li><a href="#">October 2018</a></li>
    </ul>
</div>
<div class="widget">
    <h4 class="widget-title mb-3">About Us</h4>
    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
    <nav class="nav social">
        <a href="#"><i class="uil uil-twitter"></i></a>
        <a href="#"><i class="uil uil-facebook-f"></i></a>
        <a href="#"><i class="uil uil-dribbble"></i></a>
        <a href="#"><i class="uil uil-instagram"></i></a>
        <a href="#"><i class="uil uil-youtube"></i></a>
    </nav>
</div>