@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <picture>
                    <img src="https://www.freecodecamp.org/news/content/images/2021/05/freecodecamp-org-gravatar.jpeg" class="rounded-circle w-75 h-100">
                </picture>
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="#">Add New Post</a>
                </div>
                <div class="d-flex">
                    <div class="pe-5"><strong>152</strong> posts</div>
                    <div class="pe-5"><strong>23k</strong> followers</div>
                    <div class="pe-5"><strong>266</strong> following</div>
                </div>
                <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
                <div><p class="mb-0">{{ $user->profile->description }}</p></div>
                <div><a href="http://127.0.0.1:8000/profile/#">{{ $user->profile->url }}</a></div>
            </div>

            <div class="row pt-5">
                <div class="col-4">
                    <img src="https://ik.imagekit.io/ikmedia/backlit.jpg" class="w-100 h-100">
                </div>
                <div class="col-4">
                    <img src="https://cdn.vox-cdn.com/thumbor/lNurolXHxM1GVem-G3ohoD6mxZQ=/0x0:1200x800/1200x800/filters:focal(504x304:696x496)/cdn.vox-cdn.com/uploads/chorus_image/image/57866319/spacesuit.0.jpg" class="w-100 h-100">
                </div>
                <div class="col-4">
                    <img src="https://st4.depositphotos.com/15803258/20235/i/600/depositphotos_202355626-stock-photo-old-world-swallowtail-butterfly-papilio.jpg" class="w-100 h-100">
                </div>
            </div>
        </div>
    </div>
@endsection
