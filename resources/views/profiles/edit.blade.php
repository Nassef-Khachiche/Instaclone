@extends('layouts.app')

@section('content')
    <div class="container form-control p-5 w-50">
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>
                    <div class="row">

                        <label for="title" class="col-md-4 col-form-label w-100">Title</label>

                        <input id="title"
                               type="text"
                               class="form-control
                                @error('title') is-invalid @enderror"
                               name="title" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">

                        <label for="description" class="col-md-4 col-form-label w-100">Description</label>

                        <input id="description"
                               type="text"
                               class="form-control
                                @error('description') is-invalid @enderror"
                               name="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">

                        <label for="url" class="col-md-4 col-form-label w-100">URL</label>

                        <input id="url"
                               type="text"
                               class="form-control
                                @error('url') is-invalid @enderror"
                               name="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label w-100 form-label">Profile Picture</label>

                        <input type="file" class="form-control-file form-control" id="image" name="image">


                        @error('image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row p-5 d-flex justify-content-center">
                        <button class="btn btn-primary w-75">Save Profile</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
