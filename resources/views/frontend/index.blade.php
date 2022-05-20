@extends('layouts.master')
@section('content')
<!-- home section starts  -->
<section class="home" id="home">

    <div class="content">
        <h3>its time to celebrate! the best <span> event organizers </span></h3>
        <a href="#" class="btn">contact us</a>
    </div>

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide"><img src="{{asset('assets/images/slide-3.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/images/slide-4.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/images/slide-5.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/images/slide-6.jpg') }}" alt=""></div>
        </div>
    </div>

</section>

<!-- home section ends -->

<!-- service section starts  -->

<section class="service" id="service">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Catering Service</h3>
            <p>We provide catering services.</p>
            <button><a href="{{ route('frontend.cateringservice') }}">Get More </a> </button>
        </div>

        <div class="box">
            <i class="fas fa-photo-video"></i>
            <h3>PhotoGraphy</h3>
            <p>We provide PhotoGraphy & VideoGraphy services.</p>
            <button><a href="{{ route('frontend.decoration') }}">Get More </a> </button>
        </div>

        <div class="box">
            <i class="fas fa-birthday-cake"></i>
            <h3>Decoration</h3>
            <p>We provide Decoration services.</p>
            <button><a href="{{ route('frontend.photography') }}">Get More </a> </button>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"><span>about</span> us </h1>

<div class="row">

    <div class="image">
        <img src="{{asset('assets/images/about1.') }}jpg" alt="">
    </div>

    <div class="content">
        <h3>we will give a very special celebration for you</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam labore fugiat ut esse perferendis perspiciatis provident dolores fuga in facilis culpa possimus, quia praesentium itaque, sapiente quasi harum rem asperiores.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero expedita incidunt provident quibusdam aut odit, numquam nesciunt similique nisi.</p>
        <a href="#" class="btn">contact us</a>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">our <span>gallery</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="{{asset('assets/images/g-1.jpg') }}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('assets/images/g-2.jpg') }}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('assets/images/g-3.jpg') }}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('assets/images/g-4.jpg') }}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        
        <div class="box">
            <img src="{{asset('assets/images/g-6.jpg') }}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        

      

        <div class="box">
            <img src="{{asset('assets/images/g-9.jpg') }}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->



<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<!-- contact section ends -->

@endsection