

@extends('layout.app') 

@section('content')
    <div class="bg-white shadow-xl rounded-2xl p-8 text-center max-w-lg w-full">
        
        <h1 class="text-3xl font-bold text-gray-800 mb-4">
            {{$pet['heading']}}
        </h1>
        
        <p class="text-gray-600 mb-6">
            {{$pet['tagline']}}
        </p>
        
        <div class="overflow-hidden rounded-xl shadow-md mb-6">
    <img src="{{ $pet['image'] }}" 
         alt="{{ $pet['alt'] }}" 
         class="w-full h-auto object-cover hover:scale-105 transition-transform duration-300">
</div>
        
        <a href="{{ route('landing') }}"
           class="inline-block px-6 py-2 bg-pink-500 hover:bg-pink-600 text-white font-medium rounded-lg shadow transition">
            ← Back
        </a>
    </div>
@endsection