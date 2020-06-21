@extends('layouts.app')

@section('content')
 <h1>Contact</h1>

 <form action="{{ route('contact.submit') }}" method="POST">
     @csrf

    <div class="form-group">
      <label for="nome">Endereço de email</label>
      <input type="text" class="form-control" name="name" placeholder="Nome Completo">

      <label for="email">Endereço de email</label>
      <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com">
    </div>

    <div class="form-group">
      <label for="message">Exemplo de textarea</label>
      <textarea class="form-control" name="message" rows="10"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

  </form>

@endsection
