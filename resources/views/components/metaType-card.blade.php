 @props(['metaType'])



<x-card> 
  <div class="flex">
      <img
          class="hidden w-48 mr-6 md:block"
          src="{{asset('images/no-image.png')}}" alt="" 
      />
     
      <div>
          <h3 class="text-2xl">
              <a href="/metaTypes/{{$metaType['id']}}">{{$metaType['meta_type']}}</a>
          </h3>
          <div class="text-xl font-bold mb-4">Acme Corp</div>
          
          <div class="text-lg mt-4">
              <i class="fa-solid fa-location-dot"></i>{{$metaType['meta_ability']}}
          </div>
      </div>
  </div>
</x-card>
