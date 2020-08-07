<ul class="breadcrumb">
  @foreach($gallerys as $one)
  @if($one->id==$my_id)
  {{__('menu.gallerys.'.$one->name)}}
  @else
  <li>
      <a href="{{asset('gallery/'.$one->id)}}">{{__('menu.gallerys.'.$one->name)}}</a>
  </li>

  @endif
  @endforeach
</ul>
