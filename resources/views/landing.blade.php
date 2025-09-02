@extends('layout.app')

@section('content') 
   
   <div class="bg-white shadow-lg rounded-2xl p-8 text-center max-w-md w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            Do you prefer dogs or cats?
        </h1>

        <div class="flex flex-col gap-4">
            <a href="{{ route('pet.show', 'dogs') }}"
               class="px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg shadow transition">
                I like Dogs 🐶
            </a>

            <a href="{{ route('pet.show', 'cats') }}"
               class="px-6 py-3 bg-pink-500 hover:bg-pink-600 text-white rounded-lg shadow transition">
                I like Cats 🐱
            </a>
        </div>
    </div>

@endsection
