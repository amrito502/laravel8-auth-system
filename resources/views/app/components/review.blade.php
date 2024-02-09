<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    .review_item{
    /* box-shadow: 0px 0 30px rgba(1, 41, 112, 0.08); */
    margin: 0 0 5px 0;
    border-radius: 4px;
    }
    .review_img{
        height: 150px;
    }
    .review_title{
        font-size: 17px;
        margin: 5px 0 2px 0;
        text-align: center;
    }
    .review_rating{
    font-size: 18px;
    color: rgb(122 122 122);
    font-weight: 500;
    }
    .rating_cus{
        color: #94DD00;
        font-size: 15px;
    }

   </style>
</head>
<body>
    <section class="section-padding" style="background-color: #fff;">
        <div class="container" data-aos="fade-up">
            <div class="row">
            <h5 class="text-center client_review_title" data-aos="fade-up">Client Review Screenshot</h5>

                <div class="col-lg-12 col-12 text-center mx-auto">
                    <div class="logo_wrapper">
                        <div class="owl-carousel logo_active">
                            @forelse ($review as $Review_item)
                            <div class="review_item shadow">
                                <img src="{{ asset('images/review/'.$Review_item->image) }}" alt="review" class="review_img img-fluid" >
                                <div class="review_title">{{ $Review_item->title }}</div>
                                <div class="review_rating">{{ $Review_item->rating }} <span class="rating_cus"><i class="fa-solid fa-star"></i><span></div>
                            </div>
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
