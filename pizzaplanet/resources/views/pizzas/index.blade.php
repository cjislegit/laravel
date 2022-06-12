@extends('layouts.layout')

@section('content')
{{-- {{$type}} {{$base}} {{$price}} --}}

{{-- Blad if statment --}}
<?php /* @if($price > 15)
<p>This pizza needs to chill</p>
@elseif($price < 5) <p>Thats for me</p>
@else
<p>Some, not a lot</p>
@endif */?>

{{-- Blade unless statement --}}
<?php /*@unless($base == 'chssey crust')
<p>Not cheesy bro</p>
@endunless */?>

{{-- Use normal php --}}
<?php /* @php
$name = 'Carlos';
echo($name);
@endphp */?>

{{-- Blade loop --}}
<?php /*@for($i = 0; $i < 5; $i++) <p>the value of i is {{$i}}</p>
@endfor */?>
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="pizza icon">
            <h4><a href="/pizzas/{{$pizza->id}}">{{ $pizza->name}}</a></h4>
        </div>
    @endforeach
</div>


        

@endsection