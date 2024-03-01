 @props(['character'])



<x-card> 
  <div class="flex">
      <img
          class="hidden w-48 mr-6 md:block"
          src="{{asset('images/no-image.png')}}" alt="" 
      />
     
      <div>
          <h3 class="text-2xl">
              <a href="/characters/{{$character['id']}}">{{$character['meta_name']}}</a>
          </h3>
          <div class="text-xl font-bold mb-4">{{$character['meta_type']}}</div>
          <x-character-tags :pos_q="$character->pos_q" />
            <br>
          <x-character-tags :pos_q="$character->neg_q" /> 
          <div class="text-lg mt-4">
            <h4>Meta Feature:</h4>
             {{$character['meta_ability']}}
          </div>
      </div>
  </div>
</x-card>
