@extends('layouts.app')

@section('content')
    <div class="container w-75">
        <div class="row">
            <div class="col-3 p-5" style="display: flex; align-items: center; justify-content: center;">
                <img src="/storage/{{ $user->profile->image }}" class="rounded-circle" alt=""
                     style="width: clamp(160px, 10vw, 80px); height: clamp(160px, 10vw, 80px); flex: 0 1 50px;">
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
                <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>

            </div>

            <div class="row p-5 d-flex justify-content-center">
                @foreach($user->posts as $post)
                    <div class="col-4 pb-4">
                        <a href="/p/{{$post->id}}">
                            <img src='/storage/{{ $post->image }}' class="w-100">
                        </a>
                    </div>
                @endforeach
                @if($user->posts->count() < 1)
                    <div class="col-6 p-4 border-top border-3 d-flex justify-content-center">
                        <h2>{{$user->username}} did not post anything yet</h2>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
