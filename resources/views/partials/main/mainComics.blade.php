<div class="container-fluid p-0 comicsContainer">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="container">
                <div class="row pt-5">
                    @foreach ($comics as $comic)
                    <div class="col-2 singleCard">
                        <figure>
                            <img src="{{$comic['thumb']}}" class="img-fluid" alt="Logo">
                        </figure>
                        <span>{{strtoupper($comic['series'])}}</span>
                    </div>
                    @endforeach
                    <div class="col-12 d-flex justify-content-center">
                        <div class="btn btn-primary customButton m-4">
                            load more
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
