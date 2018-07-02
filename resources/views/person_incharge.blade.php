@extends('layouts.app')

@section('message')
<script type="text/javascript">alert('You have a new message.')</script>

@section('title')
<title>Person In Charge</title>

@stop

@section('content')
<h1>Inventory PIC</h1>

@if(count($pic))
  Number of PIC: {{count($pic)}}
  @foreach($pic as $person)
    <li>{{$person}}</li>
  @endforeach
@endif


@stop
