@php
    $dcComicsMenu = [
        'characters',
        'comics',
        'movies',
        'TV',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ]
@endphp



<div class="container">
    <div class="row">
        <div class="col-12 m-3">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid d-flex justify-content-evenly">
                    <div class="row">
                        <div class="col-1">
                            <a class="navbar-brand" href="#">
                                <img src="{{Vite::asset('resources/assets/imgs/dc-logo.png')}}" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    @foreach ($dcComicsMenu as $menuItem)
                                        <a class="nav-link customNavbarItem" href="#">{{ $menuItem }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center">
                            <div class="input-group">
                                <div class="form-outline">
                                    <input type="search" id="form1" class="form-control" />
                                </div>
                                <button type="button" class="btn btn-primary">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>