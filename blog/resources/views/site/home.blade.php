@extends('site.master.layout')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Aprendendo Laravel</h1>
            <hr class="my-4">
            <p class="lead">Intuito deste projeto é conhecer mais sobre o Laravel.</p>
        </div>
    </div>

    <div class="container">

        @foreach ($artigos as $artigo)
            <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">{{ $artigo->nome }}</h2>
                  <p class="lead">{{ $artigo->descricao }}</p>
                </div>
            </div>

            <hr class="featurette-divider">
        @endforeach

     </div>

  </div><!-- /.container -->


@endsection
