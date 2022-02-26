@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.freecodecamp.org/news/content/images/2021/05/freecodecamp-org-gravatar.jpeg" class="rounded-circle w-75">
        </div>
        <div class="col-9 pt-5">
            <div><h1>Instaclone</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>152</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>266</strong> following</div>
            </div>
            <div><strong>Instaclone</strong></div>
            <div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Aspernatro optio perspiciatis temporibus ut? Nobis, quaerat?</p></div>
            <div><a href="http://127.0.0.1:8000/home">www.Instaclone.org</a></div>
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
