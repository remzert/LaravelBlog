@extends('default')

@section('content')
<h1>Bravo !</h1>
<p>
    <a class="btn btn-primary" href="{{ action('LinksController@show', ['id' => $link->id]) }}">
         <!--/r/{{ $link->id }}-->
   {{ route('Link.show', $link) }}
    </a>
</p>
    
@stop
