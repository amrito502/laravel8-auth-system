<!DOCTYPE html>
<html lang="en">
<head>
<style>
.guest_post_rules{}
.guest_post_section{
    background: #ffeeee;
    margin-bottom: 100px;
    padding-top: 1px;
    margin-top: 100px;
    padding-bottom: 100px;
}

.main_guest_post{}
.main_guest_post_title{
    font-size: 38px;
    font-family: cursive;
    margin: 100px 0 60px;
    border-bottom: 2px solid;
    padding-bottom: 15px;
}
.guest_post_rules{}
.guest_rules_title{}
.guest_rules_email{}
.guest_rules_desc{}
.guest_post_item{}
.guest_post_img{
    width: 100%;
    height: 200px;
}
.guest_post_new_single_item{
    background: #fff;
    margin: 0 11px 10px;
    border-bottom: 2px solid #47fff0;
}
.guest_post_title{}
</style>
</head>
<body>
    <section class="guest_post_section">
        <div class="main_guest_post">
            <div class="container">
                <h3 class="text-center text-warning main_guest_post_title">Guest Post Rules And Share Post</h3>
                @foreach ($guest_post as $guest_post_item)
                <div class="row">
                    <div class="col-md-5 shadow">
                        <div class="guest_post_rules">
                           <h3 class="guest_rules_title"> {{ $guest_post_item->title	 }}</h3>
                           <p class="guest_rules_email">{{ $guest_post_item->email }}</p>
                           <div class="guest_rules_desc">{!! $guest_post_item->post_rules !!}</div>
                        </div>
                    </div>
                    <div class="col-md-7 ml-2" style="padding: 0 0 0 35px;">
                        <div class="guest_post_item">
                            <div class="row">
                                <div class="col-md-5 guest_post_new_single_item shadow">
                                    <img class="guest_post_img" src="{{ asset('images/guestpost/' . $guest_post_item->image) }}" alt="">
                                    <span class="guestpost_date"><i
                                        class="fa-solid fa-calendar-days"></i> {{
                                    \Carbon\Carbon::parse($guest_post_item->created_at)->isoFormat('MMM Do
                                    YYYY') }}</span>
                                    <h5 class="guest_post_title">{{ $guest_post_item->guest_post_title }}</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</body>
</html>



















