<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"><span>event</span>Manager</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#service">service</a>
        <a href="#about">about</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>

         <!--Login and Registration -->
         @if (auth()->check())
         <a href="#">{{auth()->user()->name}}</a>
         <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
           <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none;">
                @csrf
                </form>
		  @else           
          <a href="{{route('login')}}">Login</a>
          <a href="{{route('register')}}">Register</a>
          @endif
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

@yield('content')



<!-- footer section starts  -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>Dhaka </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Chattagram </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Rajshahi </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Khulna </a>
            
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> service </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> gallery </a>
        
            <a href="#"> <i class="fas fa-arrow-right"></i> reivew </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801875318717 </a>
            <a href="#"> <i class="fas fa-envelope"></i> ashraful35-2364@diu.edu.bd</a>
            
            <a href="#"> <i class="fas fa-map-marker-alt"></i>Dhaka, Bangladesh </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> created by <span>@Ashraful</span> | all rights reserved </div>

</section>

<!-- footer section ends -->

<!-- theme toggler  -->

<div class="theme-toggler toggle-btn">

</div>





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>