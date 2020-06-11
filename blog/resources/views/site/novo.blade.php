@extends('site.master.layout')

@section('content')

<div class="container py-5">
<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Titulo</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>


@endsection
