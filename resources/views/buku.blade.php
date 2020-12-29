@extends('layouts.lay')

@section('content')

<div class="container">
   
        
       
    @foreach($buku  as $b)
    <img class="img-fluid rounded" src="img/{{$b->img}}" alt="amn">
<hr>
<p class="lead">{{$b->nama}} </p>
<hr>
<!-- Post Content -->
<p class="lead">{{$b->isi}} </p>
<hr>
  @endforeach
  
       
</div>
@endsection
