@extends('layouts.app')

@section('content')

    @if(Auth::check())
        <ul>
            <a href="#"><li>Backend</li></a>
        </ul>
    @endif

    @if(count($posts) >= 1)
        @foreach($posts as $p)
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <div class="border border-gray-400 bg-white rounded p-4 leading-normal shadow">
                    <div class="text-gray-900 font-bold text-xl mb-2">
                        {{ $p->title }}
                    </div>
                    <div class="text-gray-700 text-base mb-4">
                        {!! $p->body !!}
                    </div>
                    <div class="text-sm">
                        <p class="text-gray-900 leading-none">{{ $p->author->username }}</p>
                        <p class="text-gray-600">{{ $p->created_at->toDateTimeString() }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="w-full border border-gray-400 bg-white rounded p-4 leading-normal shadow">
            <p class="text-gray-700 text-base mb-4">
                There's nothing here. Yet. Come back Soon™
            </p>
        </div>
    @endif

@endsection