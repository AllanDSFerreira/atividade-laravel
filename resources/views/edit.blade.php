<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Editar Shop</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Laravel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Shops <span class="sr-only">(current)</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container-fluid"> 
  <div class="row"> 
    <div class="col-md-10">
    <h1>Shop - <small> Editar </small></h1>
    <hr>
	
	<form action="{{action('ShopController@update',$shop->id)}}" method="POST">
  {{ csrf_field() }}
  {{ method_field('PUT') }}
		<label for="razao">Razão Social</label>
		<input class ="form-control" type="text" name="razao" id="razao" value="{{ $shop->razao }}">
		<label for="nome">Nome (empresa)</label>
		<input class ="form-control" type="text" name="nome" id="nome" value="{{ $shop->nome }}">
		<label for="cnpj_cpf">CNPJ/CPF</label>
		<input class ="form-control" type="text" name="cnpj_cpf" id="cnpj_cpf" value="{{ $shop->cnpj_cpf }}">
		<label for="fundacao">Fundação/Aniversário</label>
		<input class ="form-control" type="text" name="fundacao" id="fundacao" value="{{ $shop->fundacao }}">
		<label for="endereco">Endereço</label>
		<input class ="form-control" type="text" name="endereco" id="endereco" value="{{ $shop->endereco }}">
		<label for="telefone">Telefone</label>
		<input class ="form-control" type="text" name="telefone" id="telefone" value="{{ $shop->telefone }}">
		<label for="total">Total de funcionarios</label>
		<input class ="form-control" type="text" name="total" id="total" value="{{ $shop->total }}">
		<hr>
		<input class="btn btn-success btn-lg" type="submit">
		<a href="{{action('ShopController@index')}}" class="btn btn-default btn-lg">Voltar</a>
	</form>

    
      </div>
    </div>
  </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  </body>
</html>