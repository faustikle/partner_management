@extends('layouts.login')

@section('content')
    <form action="{{ url('/login') }}" method="post">
      {{ csrf_field() }}

      @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">{{$error}}</div>
      @endforeach
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4 col-xs-offset-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Logar-se</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
@endsection
