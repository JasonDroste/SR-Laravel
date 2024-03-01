@props(['tagsCsv'])

@php
   $tags = explode(',', $tagsCsv) 
@endphp

<ul class="flex">
  <li
      class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
  >
      <a href="#">{{$metaType['BOD']}}</a>
  </li>
  <li
      class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
  >
      <a href="#">API</a>
  </li>
  <li
      class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
  >
      <a href="#">Backend</a>
  </li>
  <li
      class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
  >
      <a href="#">Vue</a>
  </li>
</ul>