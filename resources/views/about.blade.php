@extends('layouts.main')
@section('container')
    <h1>Halaman About</h1> 
    <h4>{{ $name }}</h3>
    <h5>{{  $email }}</h3>
    <img src="{{ $image }}" alt="{{ $image }}" width="200px" class="img-thumbnail rounded-circle">
@endsection