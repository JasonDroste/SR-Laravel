<h2>{{ $heading }}</h2>

@unless (count($metaTypes) == 0)

  @foreach ($metaTypes as $metaType)
    <h2>
      <a href="/metaTypes/{{$metaType['meta_type']}}">{{$metaType['meta_type']}}</a>
    </h2>
    <p>
      {{$metaType['BP']}}  
    </p> 
  @endforeach
    
@endunless