@extends('site.master.layout')

@section('content')

<div class="container py-5">
<form method="post" action="criar">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Titulo</label>
        <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>


@endsection
