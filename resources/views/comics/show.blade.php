@extends('layouts.app')

@section('singlePage')

@include('partials.header.topHeader')
@include('partials.header.navbar')
<div class="container">
    <div class="row">
        <div class="col-12 card">
            <div>{{$comic->id}}</div>
            <div class="card-title">{{$comic->title}}</div>
            <div class="card-image">
                <img src="{{$comic->thumb}}" class="img-fluid" alt="comic Image">
            </div>

            <div>{{$comic->description}}</div>
            <div>{{$comic->price}}</div>
            <div>{{$comic->series}}</div>
            <div>{{$comic->sale_date}}</div>
            <div>{{$comic->type}}</div>
        </div>
    </div>
</div>


@endsection