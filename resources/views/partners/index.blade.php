@extends('layouts.painel')

@section('title', 'Lista de Sócios')

@section('content')
    @if (session('flash-message'))
        <div class="alert alert-{{ session('flash-message')  }}">
            {{ session('message') }}
        </div>
    @endif
        <form method="POST" action="{{route('partners.search')}}" role="form">
            {{ csrf_field()  }}
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Busca</h3>
              </div>
              <div class="box-body">
                  <div class="form-group col-lg-12">
                    <label>CPF</label>
                    <input type="text" class="form-control" name="cpf">
                  </div>
                  <input value="Buscar" type="submit" class="btn btn-primary"></input>
              </div>
            </div>
        </form>
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Lista de Sócios</h3>
          </div>
          <div class="box-body">
            @include('partials.datatable', [
                'resources' => $partners,
                'route_name' => 'partners',
                'fields' => [
                    'ID' => 'id',
                    'Nome' => 'nome',
                    'CPF' => 'cpf',
                    'E-mail' => 'email',
                    'Empresa' => 'company_razao',
                ],
                'actions' => ['edit', 'delete']
            ])
          </div>
        </div>
@endsection



