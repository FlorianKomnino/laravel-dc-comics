@extends('layouts.app')

@section('singlePage')

@include('partials.header.topHeader')
@include('partials.header.navbar')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">
                        Title
                    </label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Description
                    </label>
                    <input type="text" class="form-control" name="description">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Thumb
                    </label>
                    <input type="text" class="form-control" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        price
                    </label>
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        series
                    </label>
                    <input type="text" class="form-control" name="series">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Sale date
                    </label>
                    <input type="text" class="form-control" name="sale_date">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Type
                    </label>
                    <input type="text" class="form-control" name="type">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
</div>


@endsection