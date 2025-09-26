{{-- <h1>hello is:{{$name}}</h1> --}}
{{--<h1>is array:{{$name[1]}}</h1>--}}
<h1>{{rand()}}<h1>

@if($name=='Ali')
<h2>thise nameis ali</h2>
@elseif($name=='Ahmed')
<h2>thise name is ahemd</h2>
@else
<h1>othre name<h1>
    @endif
<div>
@for($i=0;$i<=10;$i++)
<h1>{{$i}}<h1>
  @endfor    
</div>

<div>
    @foreach($users as $user)
    <h1>{{$user}}<h1>
        @endforeach
</div>