@extends('layouts.app')

@section('content')

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

@endsection