@extends('layouts.master')
@section('content')

<br><br>
<section class="contact" id="contact">

    <form action="">
    <h1 class="heading"> <span>Catering Service</span></h1>
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


@endsection