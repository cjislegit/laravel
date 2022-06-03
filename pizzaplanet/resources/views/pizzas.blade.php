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

@foreach($pizzas as $pizza)
<div>
    {{-- first is a var thast comes with foreach and has info about the loop --}}
    {{$loop->index}} {{$pizza['type']}} - {{$pizza['base']}}

    {{-- Returns true if item is first in the loop --}}
    @if($loop->first)
    <span>- First in the loop</span>
    @endif

    {{-- Returns true if item is last in the loop --}}
    @if($loop->last)
    <span>- Last in the loop</span>
    @endif
</div>
@endforeach
@endsection