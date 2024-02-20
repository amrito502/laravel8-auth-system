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
            background: rgb(255, 255, 255);
        }
        .resource__item{
            margin-bottom: 30px;
            margin-left: 10px;
            padding: 0 0 10px 0px!important;
        }
        .resource__item__details{
            margin: 0 0 30px 10px;
            padding: 0 0 0 20px!important;
            border-left: 4px solid #FFB6C1;
        }

        .resources_img_dtls{
            width: 100%;
            height: ;
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
        .resources_date_icon_dtls{
            margin-right: 361px;
        }
        .resources_short_long{
            font-family: 'Roboto';
            font-size: 15px;
            padding-right: 20px;
            text-align: left;
            line-height: 25px;
            word-spacing: 2.5px;
            letter-spacing: 0.2px;
            color: #000;
            margin-top: 18px;
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
        .ad_show_dts{
            width: 95%;
            height: 360px;
            background: #dfdfdf;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: -38px;
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
        .adv_title_dts{
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



    </style>
</head>

<body>
    <section class="resources__section">
        <div class="main__resources">
            <div class="container">
                <div class="resources__header">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="resources_title_main text-center text-success">Resources Post Details!</h4>
                        </div>
                    </div>
                    <div class="resources_content">
                        <div class="row">
                            <div class="col-md-4 py-5 left_resources_sidebar">
                                <h5 class="resources_sidebar_title"><i class="fa-solid fa-fire"></i> Most Popular Resources :</h5>
                                <div class="popular_res_item_sidebar">
                                   @forelse ($popular_resources as $popular_item)
                                    <a class="popular_post_item" href="{{ url('resources-details/'. $popular_item->slug) }}"><i class="fa-solid fa-right-to-bracket"></i> {{ $popular_item->title }}</a>
                                   @empty
                                    <p class="text-center text-danger">Popular Post is Not Available!</p>
                                   @endforelse
                                   <div class="adverting_sidebar">
                                    <h6 class="adv_title_dts">Advertising</h6>
                                        <div class="ad_show_dts shadow">
                                            <h5 style="color: #ff0cdf!important;" class="text-center">Show Advertising</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 pb-5 right_resources_body">
                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="resource__item__details shadow">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img class="resources_img_dtls" src="{{ asset('images/resources/' . $resources_dtls->image) }}" alt="resources">
                                                    <h4 class="resources_name">{{ $resources_dtls->name }}</h4>
                                                    <h6 class="resources_title">{{ $resources_dtls->title }}</h6>
                                                    <div class="resources_datetime">
                                                        <span class="resources_admin"><i class="fa-solid fa-user"></i> Admin</span>
                                                        <span class="resources_date_icon_dtls"><i class="fa-solid fa-calendar-days"></i> {{ \Carbon\Carbon::parse($resources_dtls->created_at)->isoFormat('MMM Do YYYY') }}</span>
                                                    </div>
                                                    <div class="resources_short_long">{!! $resources_dtls->long_description !!}</div>
                                                </div>
                                            </div>
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
