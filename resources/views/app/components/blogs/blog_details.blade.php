<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-lg-8 padding-15">
                <div class="blog-single-wrap">
                    <div class="blog-thumb">
                        <img src="{{ asset('images/blogs/' . $blog->image) }}" style="width: 100%!important;" alt="img" />
                    </div>
                    <div class="blog-single-content">
                        <h2>
                            <a href="#">{{ $blog->title }}</a>
                        </h2>
                        <ul class="single-post-meta">
                            <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
                            <li>
                                <i class="fa fa-calendar"></i> <a href="#"><span class="">{{ $blog->created_at }}</span></a>
                            </li>
                        </ul>
                        <p>{{ $blog->desc }}</p>

                        <div class="comments-area">

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Write a Comment</h3>
                                <form id="commentform" class="comment-form">
                                    <div class="form-textarea">
                                        <textarea id="comment" name="desc" placeholder="Write Your Comments..."></textarea>
                                    </div>
                                    <div class="form-inputs">
                                        <input placeholder="Website" type="text"  name="website" />
                                        <input placeholder="Name" type="text"  name="name"/>
                                        <input placeholder="Email" type="text" name="email" />
                                    </div>
                                    <div class="form-submit">
                                        <input id="submit" value="Post Comment" type="submit" />
                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>
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



