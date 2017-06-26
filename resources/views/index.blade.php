<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Loja - Laravel</title>

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
    <h1>Lista de Shops - <small> Index </small><a href="{{action('ShopController@create')}}" class="btn btn-success btn-lg">
<i class="glyphicon glyphicon-plus-sign"></i> New
</a></h1>
    <hr>


    <div class="table-responsive">
          <table class="table table-hover table-bordered table-striped">
            <thead>
            <tr>
              <th>Id</th>
              <th>Razão</th>
              <th>Nome</th>
              <th>Ações</th>
            </tr>
            </thead>

            <tbody>
            @foreach($shops as $shop)
            <tr>
              <td>{{ $shop->id }}</td>
              <td>{{ $shop->razao }}</td>
              <td>{{ $shop->nome }}</td>
              <td>
              <form action="{{action('ShopController@destroy',$shop->id)}}" method="POST" style="float: right; margin-right: 3px;">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <button class="btn btn-danger">
                  <i class="glyphicon glyphicon-trash"></i>Deletar
                </button>
              </form>
              <a href="{{action('ShopController@show', $shop->id)}}" class="btn btn-default">
                <i class="glyphicon glyphicon-eye-open"></i> Mostrar
              </a>
              <a href="{{action('ShopController@edit',$shop->id)}}" class="btn btn-default">
                <i class="glyphicon glyphicon-edit"></i> Editar
              </a>
              </td>
            </tr>
            @endforeach
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  </body>
</html>