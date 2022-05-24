@extends('layouts.master')
@section('content')


<br><br>
<section class="contact" id="contact">

    <form action="">
    <h1 class="heading"> <span>Photography</span></h1>
        <div class="inputBox">
            <input type="text" placeholder="Address">
            <input type="text" placeholder="Decorated Area">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="Events Type">
        </div>
        <textarea name="" placeholder="Description" id="" cols="30" rows="5"></textarea>
        <input type="submit" value="Confirm Order" class="btn">
    </form>

</section>




@endsection