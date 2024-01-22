<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-lg-8 sm-padding">

                <div class="row">
                    @forelse ($blogs as $blog)
                        <div class="col-md-12 col-sm-6 my-3">
                            <div class="shadow">
                                <div class="main">
                                    <div class="row p-4">
                                        <div class="col-md-4">
                                            <img src="{{ asset('images/blogs/' . $blog->image) }}" style="width: 100%!important; height: 200px;" alt="img" />
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="blog_title_post">{{ $blog->title }}</h3>
                                            <span class="blog_date">{{ $blog->created_at }}</span>
                                            <p class="blog_desc">{{ $blog->desc }}</p>
                                            <a href="{{ route('app.blogs.details', $blog->id) }}" class="blog_btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                    {!! $blogs->links() !!}
                </div>

            </div>
            <div class="col-lg-4 padding-15 my-4">
                <div class="sidebar-wrap">

                    <div class="widget-content">
                        <h4>Recent Posts</h4>
                        <ul class="thumb-post">

                            @foreach ($recent_post as $recentPost)
                            <li>
                                <div class="row">
                                    <div class="col-md-5">
                                        <img style="width:100%!important" class="" src="{{ asset('images/blogs/' . $recentPost->image) }}" alt="img" />
                                    </div>
                                    <div class="col-md-7">
                                        <a href="{{ route('app.blogs.details', $recentPost->id) }}" class="recent_title_post">{{ $recentPost->title }}</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="widget-content">
                        <h4>Tag Clouds</h4>
                        <ul class="tags">
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Linkbuilding</a></li>
                            <li><a href="#">App development</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Domine & Hosting</a></li>
                            <li><a href="#">IT Course</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
