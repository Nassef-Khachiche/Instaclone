@extends('layouts.app')

@section('content')
    <div class="container w-75">
        <div class="row">
            <div class="col-3 p-5" style="display: flex; align-items: center; justify-content: center;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" class="rounded-circle" alt=""
                     style="width: clamp(150px, 10vw, 80px); height: clamp(150px, 10vw, 80px); flex: 0 1 50px;">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                </div>
                <div class="d-flex">
                    <div class="pe-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div class="pe-5"><strong>23k</strong> followers</div>
                    <div class="pe-5"><strong>266</strong> following</div>
                </div>
                <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
                <div><p class="mb-0">{{ $user->profile->description }}</p></div>
                <div><a href="/profile/">{{ $user->profile->url }}</a></div>

            </div>
            <div class="row p-5 d-flex justify-content-center">
                @foreach($user->posts as $post)
                    <div class="col-4 pb-4">
                        <a href="/p/{{$post->id}}"><img src='/storage/{{ $post->image }}' class="w-100"></a>
                    </div>
                @endforeach
                @if($user->posts->count() < 1)
                    <div class="col-6 pb-4"> <h2>{{$user->username}} did not post anything yet</h2> </div>
                @endif
            </div>
        </div>
    </div>
@endsection
