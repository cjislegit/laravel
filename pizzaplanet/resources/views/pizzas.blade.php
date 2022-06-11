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

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        <div>{{$name}}</div>
        @foreach($pizzas as $pizza)
        <div>
    {{ $pizza->name}} - {{$pizza->type}} - {{$pizza->base}}
        </div>
        @endforeach
    </div>
</div>
@endsection