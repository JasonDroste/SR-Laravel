@extends('layouts.layout')

@section('content')
@include('partials._hero')
@include('partials._search')
    <!-- Grid container -->
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">    

        @unless (count($characters) == 0)

            @foreach ($characters as $character)
           
            <x-character-card :character="$character" />

            @endforeach
        
        @endunless
    <!--  End Grid container -->        
    </div>

@endsection