@extends('layouts.painel')

@section('title', 'Lista de Sócios')

@section('content')
    @if (session('flash-message'))
        <div class="alert alert-{{ session('flash-message')  }}">
            {{ session('message') }}
        </div>
    @endif
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



