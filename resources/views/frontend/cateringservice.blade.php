@extends('layouts.master')
@section('content')

<br><br>
<section class="contact" id="contact">

    <form action="">
    <h1 class="heading"> <span>Catering Service</span></h1>
        <div class="inputBox">
            <input type="text" placeholder="Address">
            <input type="text" placeholder="Mobile Number">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="Number Of Person">
            <input type="text" placeholder="Food Item">
        </div>
        <textarea name="" placeholder="Description" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Confirm Order" class="btn">
    </form>

</section>


@endsection