@extends('welcome')

@section('conteudo')

    <div class="col-md-2 mx-auto">
    </div>
    <div class="col-md-8 mx-auto">
        <div class="bd-example" data-example-id="">
          <div class="alert alert-default" role="alert" style="background-color: #DCDCDC;">
            <h4 class="alert-heading text-center"><i class="fa fa-edit"></i> Gostaria de ter acesso ao nosso e-book?<br><br>
            <form action="/StoreLeadEbook" method="post">
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
                <button type="submit" class="btn btn-success form-control">Sim, gostaria! <i class="fa fa-thumbs-o-up"></i></button>
              </form>
  </div>
</div>
    </div>
    <div class="col-md-2 mx-auto">
    </div>

@stop
