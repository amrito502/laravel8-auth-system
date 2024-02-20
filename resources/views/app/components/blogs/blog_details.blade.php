<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .resources__section {
            margin-bottom: 100px;
        }

        .main__resources {}

        .resources__header {}

        .resources_title_main {
            color: #e3009b !important;
            font-size: 43px;
            font-family: cursive;
            font-weight: 600;
            margin: 100px 0 60px 0;
            border-bottom: 2px solid #f141ea;
            padding: 0 0 30px 0;
        }

        .resources_content {}

        .left_resources_sidebar {
            background: lightpink;
        }

        .resources_sidebar_title {
            background: #d9006c;
            padding: 10px;
            border-radius: 32px;
            text-align: center;
            font-size: 24px;
            color: #fff;
            font-family: cursive;
            font-weight: 500;
            margin-bottom: 30px;
        }

        .right_resources_body {
            background: rgb(244, 236, 236);
        }

        .resource__item {
            margin-bottom: 30px;
            margin-left: 10px;
            padding: 0 0 10px 0px !important;
        }

        .resource__item:first-child {
            margin: 0 0 30px 10px;
        }

        .blog_post_img {
            width: 100%;

        }

        .blog_title_cus {
            font-family: cursive;
            font-weight: 600;
            font-size: 27px;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .resources_title_blog_dts {
            font-family: cursive;
            font-weight: 500;
            font-size: 20px;
            margin-bottom: 8px;
            padding: 20px;
        }

        .resources_datetime_blog_date_time {
            display: flex;
            justify-content: space-between;
            font-family: fangsong;
            font-size: 16px;
            padding: 0px 0 10px 0;
            color: #fb0dbb;
            width: 100%;
            margin-top: 24px;
        }


        .resources_admin {}

        .blog_date_icon_dtls {
            margin-right: 574px;
        }

        .blog_short_desc {
            font-family: 'Roboto';
            font-size: 15px;
            padding-right: 20px;
            text-align: left;
            line-height: 25px;
            word-spacing: 2.5px;
            letter-spacing: 0.2px;
            color: #000;
        }

        .resources_cus_btn {
            background: #e7697c;
            color: #fff !important;
            transition: .4s;
            padding: 5px 11px;
            font-family: cursive;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .resources_cus_btn:hover {
            background: #FFB6C1 !important;
            color: #181616 !important;
        }

        . {}

        .ad_show {
            width: 100%;
            height: 400px;
            background: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .active>.page-link {
            background: #FFB6C1 !important;
            border: 1px solid #FFB6C1 !important
        }

        .page-link:hover {
            color: #f9425d !important;
        }

        .page-link {
            color: #f9425d !important;
        }

        .popular_res_item_sidebar {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding: 0 0 20px 19px;
        }

        .latest_post_title {
            margin-bottom: 10px;
            font-size: 19px;
            font-family: cursive;
            font-weight: 500;
            text-decoration: underline;
            color: #ed3939 !important;
            transition: .4s;
        }

        .latest_post_title:hover {
            color: #5f39ed !important;
        }

        .latest_post_img {
            width: 100%;
            height: 114px;
        }

        .recent_post_date {
            display: inline-block;
            margin-top: 8px;
            color: #000000;
            font-size: 14px;
        }

        .adv_title_dts {
            margin-top: 100px;
            margin-bottom: 13px;
            background: #d9006c;
            padding: 10px;
            border-radius: 32px;
            text-align: center;
            font-size: 24px;
            color: #fff;
            font-family: cursive;
            font-weight: 500;
            margin-bottom: 30px;
        }

        .ad_show_dts {
            width: 100%;
            height: 360px;
            background: #dfdfdf;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: -38px;
        }

    </style>
</head>

<body>
    <section class="resources__section">
        <div class="main__resources">
            <div class="container">
                <div class="resources__header">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="resources_title_main text-center text-success">Recently Posted My Blog!</h4>
                        </div>
                    </div>
                    <div class="resources_content">
                        <div class="row">

                            <div class="col-md-8 py-5 right_resources_body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="resources_title_blog_dts shadow">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img class="blog_post_img" src="{{ asset('images/blogs/' . $blog->image) }}" alt="resources">
                                                    <div class="resources_datetime_blog_date_time">
                                                        <span class="resources_admin"><i class="fa-solid fa-user"></i>
                                                            Admin</span>
                                                        <span class="blog_date_icon_dtls"><i class="fa-solid fa-calendar-days"></i> {{
                                                            \Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM Do
                                                            YYYY') }}</span>
                                                    </div>
                                                    <h4 class="blog_title_cus">{{ $blog->title }}</h4>

                                                    <p class="blog_short_desc">{!! $blog->long_description !!}</p>
                                                </div>
                                                <div class="comments_blog">
                                                    <h5 class="blog_commments mt-5" style="color: #ff0cdf;">Comments :</h5>
                                                    <form action="" class="mt-3">
                                                        <textarea name="comment" id="" cols="30" rows="5" class="form-control p-2" style="border: 1px solid #ff0cdf!important; outline: none;">

                                                        </textarea>
                                                        <button class="btn btn-sm my-2" style="background: #ff0cdf; color:#fff;">Comments</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-5 left_resources_sidebar">
                                <h5 class="resources_sidebar_title"><i class="fa-solid fa-fire"></i> Latest Blogs :</h5>
                                <div class="popular_res_item_sidebar">
                                    @forelse ($recent_post as $recentPost)
                                    <div class="row my-3">
                                        <div class="col-md-5">
                                            <img class="latest_post_img" src="{{ asset('images/blogs/' . $recentPost->image) }}" alt="img" />
                                        </div>
                                        <div class="col-md-7">
                                            <a class="latest_post_title" href="{{ url('blog-details/'. $recentPost->slug) }}"><i class="fa-solid fa-right-to-bracket"></i> {{
                                                $recentPost->title }}</a><br>
                                            <span class="recent_post_date"><i class="fa-solid fa-calendar-days"></i> {{
                                                \Carbon\Carbon::parse($recentPost->created_at)->isoFormat('MMM Do YYYY')
                                                }}</span>
                                        </div>
                                    </div>
                                    @empty
                                    <p class="text-center text-danger">Popular Post is Not Available!</p>
                                    @endforelse
                                </div>
                                <div class="adverting_sidebar">
                                    <h6 class="adv_title_dts">Advertising</h6>
                                    <div class="ad_show_dts shadow">
                                        <h5 style="color: #ff0cdf!important;" class="text-center">Show Advertising</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
