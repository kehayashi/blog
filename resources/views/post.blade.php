@extends('welcome')

@section('conteudo')

<div class="row">
  <div class="col-md-10 mx-auto">
    <div class="post-preview">
        <h3 class="post-title text-center">
          {{ $post[0] }}
          {{ $post->titulo }}
        </h3>
            {{ $post->descricao }}
      <p class="post-meta text-center">Posted by
        <a href="#">#modo_beta</a>
        {{ $post->data_hora }} </p> <a href="/">Voltar</a>
    </div>
    <hr>
  </div>
</div>

@stop
