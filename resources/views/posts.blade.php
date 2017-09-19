@extends('welcome')

@section('conteudo')

  <div class="col-md-7 mx-auto">
    @foreach ($posts as $p)
    <div class="post-preview">
      <a href="/getpostid/{{ $p->post_id }}">
        <h5 class="post-title">
          {{ $p->titulo }}
        </h5>
        <h5 class="post-subtitle">
          {{ substr($p->descricao, 0, 200) }} <font>[...]</font>
        </h5>
      </a>
      <p class="post-meta">Posted by
        <a href="#">#modo_beta</a>
        {{ $p->data_hora }} </p><a href="/getpostid/{{ $p->post_id }}">Ver mais</a>
    </div>
    <hr>
    @endforeach
  </div>
  <div class="col-md-5 mx-auto">
    <div class="row">
      <div class="col-md-12">
        <div class="bd-example" data-example-id="">
          <div class="alert alert-default" role="alert" style="background-color: #DCDCDC;">
            <h4 class="alert-heading text-center"><i class="fa fa-info-circle"></i> Sobre</h4>
            <p style="font-size: 18px;">Tecnologia, empreendedorismo e gestão para advogados. Os escritórios de advocacia e os
              departamentos jurídicos mais avançados estão buscando tecnologia baseada na nuvem para obter
              vantagens competitivas, aumentando rapidamente a sua capacidade de inovação e melhorando a sua
              eficiência e produtividade. Quer saber como? A Inova Direito reúne para você os melhores conteúdos
              em tecnologia, empreendedorismo e gestão para advogados.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="bd-example" data-example-id="">
          <div class="alert alert-default" role="alert" style="background-color: #DCDCDC;">
            <h4 class="alert-heading text-center"><i class="fa fa-edit"></i> Cadastro<br><br>
            <form action="/StoreLead" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                  <input type="text" class="form-control j" placeholder="Nome" name="nome" onkeyup = "campoTelefone(this, numero)">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="text" class="form-control j" placeholder="Sobrenome" name="sobrenome">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="email" class="form-control" placeholder="Email@email.com" name="email">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="text" class="form-control j" placeholder="Empresa" name="empresa">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <select class="form-control" name="cargo">
                  <option value="null">Selecione seu cargo</option>
                  <option value="Estudante">Estudante</option>
                  <option value="Secretario(a)">Secretário(a)</option>
                  <option value="Gerente">Gerente</option>
                  <option value="Diretor(a)">Diretor(a)</option>
                  <option value="Outro">Outro</option>
                </select><br>
                <button type="submit" class="btn btn-success form-control btn-responsive">Quero receber mais informações!</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
  jQuery('.j').keyup(function () {
    this.value = this.value.replace(/[^a-zA-Z ]/g,'');
  });
</script>


@stop
