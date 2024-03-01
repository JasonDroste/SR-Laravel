@extends('layouts.layout')

@section('content')
@include('partials._hero')
@include('partials._search')
    <!-- Grid container -->
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">    

        @unless (count($metaTypes) == 0)

            @foreach ($metaTypes as $metaType)
           
            <x-metaType-card :metaType="$metaType" />

            @endforeach
        
        @endunless
    <!--  End Grid container -->        
    </div>

@endsection