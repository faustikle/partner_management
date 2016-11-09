@extends('layouts.painel')

@section('title', 'Lista de Empresas')

@section('content')
    @if (session('flash-message'))
        <div class="alert alert-{{ session('flash-message')  }}">
            {{ session('message') }}
        </div>
    @endif
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Lista de Empresas</h3>
          </div>
          <div class="box-body">
            @include('partials.datatable', [
                'resources' => $companies,
                'route_name' => 'companies',
                'fields' => [
                    'ID' => 'id',
                    'CNPJ' => 'cnpj',
                    'Razão Social' => 'razao_social',
                    'Telefone' => 'telefone',
                ],
                'actions' => ['edit', 'delete']
            ])
          </div>
        </div>
@endsection



