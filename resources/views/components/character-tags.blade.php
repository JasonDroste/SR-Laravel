@props(['pos_q'])

@php
   $qualities = explode(',', $pos_q); 
@endphp

<ul class="flex">
    @foreach ($qualities as $quality)

  <li
      class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
  >
      <a href="/?quality={{$quality}}">{{$quality}}</a>
  </li>

    @endforeach
</ul>