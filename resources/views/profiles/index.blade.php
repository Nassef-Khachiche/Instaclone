@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <picture>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" class="rounded-circle w-75 h-100" alt="">
                </picture>
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                </div>
                <div class="d-flex">
                    <div class="pe-5"><strong>152</strong> posts</div>
                    <div class="pe-5"><strong>23k</strong> followers</div>
                    <div class="pe-5"><strong>266</strong> following</div>
                </div>
                <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
                <div><p class="mb-0">{{ $user->profile->description }}</p></div>
                <div><a href="/profile/">{{ $user->profile->url }}</a></div>
            </div>

            <div class="row p-5">
                @foreach($user->posts as $post)
                    <div class="col-4 pb-4">
                        <img src='/storage/{{ $post->image  }}' class="w-100 h-100">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
