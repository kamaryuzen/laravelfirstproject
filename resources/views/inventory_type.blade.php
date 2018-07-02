@extends('layouts.app')

@section('message')
<script type="text/javascript">alert('You have a new message.')</script>

@section('title')
<title>Inventory Type</title>

@stop

@section('content')
<h1>Inventory Type</h1>
<table border="1">
  <tr>
    <td>Category</td>
    <td>Brand</td>
    <td>Model</td>
  </tr>
  <tr>
    <td>{{$type}}</td>
    <td>{{$brand}}</td>
    <td>{{$model}}</td>
  </tr>
</table>


@stop
