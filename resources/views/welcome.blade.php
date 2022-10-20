@extends('layouts.app', ['title' => 'Welcome Page'])

@section('content')
    <div class="bg-violet-400 text-white">
        <h2 class="font-bold">Hi, My Name is Marsha</h2>
        <p class="text-md">How Are You Today?</p>
        <x-button class="success" type="button" title="Click Me"></x-button>
    </div>
@endsection