@extends('layouts.app')

@section('title')
    Create Post
@endsection

@section('content')

    <p class="text-2xl">Create a Post</p>
    <hr class="border-b border-gray-600" />
    <form method="POST" action="{{ route('posts.store') }}" id="{{ Route::currentRouteName() }}" class="m-4">
        @csrf
        <div class="flex flex-row">
            <div class="w-1/4 py-2 pr-4">Title</div>
            <input class="px-4 py-2 rounded border border-gray-500 w-full" placeholder="Title" type="text" name="title" id="title" value="{{ old('title') }}" required autofocus>
        </div>
        <div class="flex flex-row mt-4">
            <div class="w-1/4 py-2 pr-4">Body</div>
            <textarea class="px-4 py-2 rounded border border-gray-500 w-full" placeholder="Body" name="body" id="body" value="{{ old('body') }}" required ></textarea>
        </div>
        <div class="flex mt-8">
            <button type="submit" class="px-4 py-2 bg-green-500 text-green-200 rounded">Submit</button>
        </div>
    </form>

@endsection