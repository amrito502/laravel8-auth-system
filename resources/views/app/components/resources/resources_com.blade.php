<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .resources__section{
            margin-bottom: 100px;
        }
        .main__resources{}
        .resources__header{}
        .resources_title_main{
            color: #e3009b!important;
            font-size: 43px;
            font-family: cursive;
            font-weight: 600;
            margin: 100px 0 60px 0;
            border-bottom: 2px solid #f141ea;
            padding: 0 0 30px 0;
        }

        .resources_content{}
        .left_resources_sidebar{
            background: lightpink;
        }
        .resources_sidebar_title{
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
        .right_resources_body{
            background: rgb(244, 236, 236);
        }
        .resource__item{
            margin-bottom: 30px;
            margin-left: 10px;
            padding: 0 0 10px 0px!important;
        }
        .resource__item:first-child{
            margin: 0 0 30px 10px;
        }
        .resources_img{
            width: 100%;
            height: 175px;
        }
        .resources_name{
            font-family: cursive;
            font-weight: 600;
            font-size: 27px;
            margin-top: 15px;
            margin-bottom: 10px;
        }
        .resources_title{
            font-family: cursive;
            font-weight: 500;
            font-size: 20px;
            margin-bottom: 8px;
        }
        .resources_datetime{
            display: flex;
            justify-content: space-between;
            margin-right: 216px;
            font-family: fangsong;
            font-size: 14px;
            padding: 0px 0 10px 0;
            color: #f9425d;
        }

        .resources_admin{}
        .resources_date_icon{}
        .resources_short_desc{
            font-family: 'Roboto';
            font-size: 15px;
            padding-right: 20px;
            text-align: left;
            line-height: 25px;
            word-spacing: 2.5px;
            letter-spacing: 0.2px;
            color: #000;
        }
        .resources_cus_btn{
            background: #e7697c;
            color: #fff!important;
            transition: .4s;
            padding: 5px 11px;
            font-family: cursive;
            font-weight: 500;
            margin-bottom: 15px;
        }
        .resources_cus_btn:hover{
            background: #FFB6C1!important;
            color: #181616!important;
        }
        .{}
        .ad_show{
            width: 100%;
            height: 400px;
            background: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .active>.page-link{
            background: #FFB6C1!important;
            border: 1px solid #FFB6C1!important
        }
        .page-link:hover {
            color: #f9425d!important;
        }
        .page-link{
            color: #f9425d!important;
        }
        .popular_res_item_sidebar{
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding: 0 0 20px 19px;
        }
        .popular_post_item{
            margin-bottom: 10px;
            font-size: 19px;
            font-family: cursive;
            font-weight: 500;
            text-decoration: underline;
            color: #ed3939!important;
            transition: .4s;
        }
        .popular_post_item:hover{
            color: #5f39ed!important;
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
                            <h4 class="resources_title_main text-center text-success">Recently Posted My Resources!</h4>
                        </div>
                    </div>
                    <div class="resources_content">
                        <div class="row">
                            <div class="col-md-4 py-5 left_resources_sidebar">
                                <h5 class="resources_sidebar_title"><i class="fa-solid fa-fire"></i> Most Popular Resources :</h5>
                                <div class="popular_res_item_sidebar">
                                   @forelse ($resources as $popular_item)
                                    <a class="popular_post_item" href="{{ url('resources-details/'. $popular_item->slug) }}"><i class="fa-solid fa-right-to-bracket"></i> {{ $popular_item->name }}</a>
                                   @empty
                                    <p class="text-center text-danger">Popular Post is Not Available!</p>
                                   @endforelse
                                </div>
                            </div>
                            <div class="col-md-8 py-5 right_resources_body">
                                <div class="row">

                                    <div class="col-md-9">
                                        @forelse ($resources as $resources_item)
                                        <div class="resource__item shadow">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img class="resources_img" src="{{ asset('images/resources/' . $resources_item->image) }}" alt="resources">
                                                </div>
                                                <div class="col-md-8">
                                                    <h4 class="resources_name">{{ $resources_item->name }}</h4>
                                                    <h6 class="resources_title">{{ $resources_item->title }}</h6>
                                                    <div class="resources_datetime">
                                                        <span class="resources_admin"><i class="fa-solid fa-user"></i> Admin</span>
                                                        <span class="resources_date_icon"><i class="fa-solid fa-calendar-days"></i> {{ \Carbon\Carbon::parse($resources_item->created_at)->isoFormat('MMM Do YYYY') }}</span>
                                                    </div>
                                                    <p class="resources_short_desc">{{ $resources_item->short_description }}</p>
                                                    <a href="{{ url('resources-details/'. $resources_item->slug) }}" class="btn btn-sm resources_cus_btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <p class="text-center text-danger">Resources is not available Right Now!</p>
                                        @endforelse
                                        {!! $resources->links() !!}
                                    </div>

                                    <div class="col-md-3">
                                        <div class="ad_show shadow">
                                            <h5 class="text-center text-warning">Show Advertising</h5>
                                        </div>
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
