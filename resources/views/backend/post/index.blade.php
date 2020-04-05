@extends('layouts.app')

@section('title')
    Post Index
@endsection

@section('content')

    <div class="flex justify-between">
        <span class="text-3xl">Published Posts</span>
        <a href="{{ route('posts.create') }}" class="px-4 py-2 mb-1 bg-green-500 text-green-100 rounded">
            New Post
        </a>
    </div>
    <hr class="border border-gray-700 mb-4" />
    <ul class="">
        @foreach($posts as $p)
            <li class="mb-2">
                <a href="{{ route('posts.edit', $p->id) }}" class="text-xl">{{ $p->title }}</a>
                <p class="text-xs">
                    Written by {{ $p->author->username }}, on {{ $p->created_at->toDayDateTimeString() }} ({{ $p->created_at->diffForHumans() }}).
                    @if($p->created_at != $p->updated_at)
                        Updated {{ $p->updated_at->toDayDateTimeString() }} ({{ $p->updated_at->diffForHumans() }}).
                    @endif
                </p>
            </li>
        @endforeach
    </ul>

@endsection