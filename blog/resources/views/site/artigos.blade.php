@extends('site.master.layout')

@section('content')

<div class="container py-5">

    @foreach ($artigos as $artigo)
        <ul class="list-group">
            <li class="list-group-item">{{ $artigo->nome }}</li>
        </ul>
    @endforeach

</div>

@endsection
