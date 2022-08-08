@extends('layout.app')

@section('title', 'Главная страница')

@section('content')
    @include('partials.header')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        @foreach($promocodes as $promocode)
            <div class="px-4 py-8 max-w-x1">
                <div class="px-4 py-2 mt-2 bg-white">
                    <h2 class="font-bold text-2x1 text-gray-800">Promocode for {{ $promocode->product }}</h2>
                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        for {{$promocode->value}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
