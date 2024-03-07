@extends('layouts.layout')
@section('content')

<x-card class="max-w-lg mx-auto mt-24">
  <header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
      Create a Character
    </h2>
      <p class="mb-4">Select Qualities</p>
  </header>
  <form method="POST" action="/characters/create-page2" class="w-full max-w-lg">
    @csrf
  
    <div class="flex flex-wrap -mx-3 mb-2">
      <div class="w-full  px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
          5 BP Qualities
        </label>
          @foreach ($posCBData as $quality) 
                  @if ($quality->BP <= 5 )   
                      <fieldset>
                          <div>
                              <label>
                                  <input type="checkbox" id="{{$quality->quality}}" name="positve" value="{{$quality->quality}}" />
                                  {{$quality->quality}} {{$quality->BP}}
                                </label>
                          </div>
                      </fieldset> 
                  @endif
          @endforeach
      </div>
    
      <div class="w-full  px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
          10 BP Qualities
        </label>
        @foreach ($posCBData as $quality) 
          @if (($quality->BP <= 10 ) && ($quality->BP > 5))   
              <fieldset>
                  <div>
                      <label>
                          <input type="checkbox" id="{{$quality->quality}}" name="positve" value="{{$quality->quality}}" />
                          {{$quality->quality}} {{$quality->BP}}
                        </label>
                  </div>
              </fieldset> 
          @endif
        @endforeach
      </div>
      <div class="w-full  px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
          15 BP+ Qualities
        </label>
        @foreach ($posCBData as $quality) 
          @if (($quality->BP > 10 ))   
              <fieldset>
                  <div>
                      <label>
                          <input type="checkbox" id="{{$quality->quality}}" name="positve" value="{{$quality->quality}}" />
                          {{$quality->quality}} {{$quality->BP}}
                        </label>
                  </div>
              </fieldset> 
          @endif
        @endforeach
      </div>
    </div>
  </form>
</x-card>

@endsection