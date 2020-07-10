<ul class="breadcrumb">
  @foreach($gallerys as $one)
  @if($one->id==$my_id)
  {{$one->name}}
  @else
  <li>
      <a href="{{asset('gallery/'.$one->id)}}">{{$one->name}}</a>
  </li>

  @endif
  @endforeach
</ul>
