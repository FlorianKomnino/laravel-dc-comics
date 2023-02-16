@extends('layouts.app')

@section('singlePage')

@include('partials.header.topHeader')
@include('partials.header.navbar')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex">
            <button class="btn btn-sm btn-primary ms-auto">Create new comic</button>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Crud(s)</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td class="d-flex">
                            <a class="btn btn-sm btn-primary d-inline-block" href="{{route('comics.show', $comic->id)}}">Show</a>
                            <a class="btn btn-sm btn-warning d-inline-block" href="{{ route("comics.edit", $comic->id) }}">Edit</a>
                            <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger d-inline-block">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection