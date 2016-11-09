@extends('layouts.painel')

@section('content')
    @if (session('flash-message'))
        <div class="alert alert-{{ session('flash-message')  }}">
            {{ session('message') }}
        </div>
    @endif
    <form method="POST" action="{{ $action }}" role="form">
        {{ csrf_field()  }}
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{ isset($company) ? 'Atualizar Empresa' : 'Nova Empresa' }}</h3>
          </div>
          <div class="box-body">
              <div class="row">
                  <div class="form-group col-lg-4">
                    <label>CNPJ</label>
                    <input name="cnpj" value="{{ $company->cnpj or ""  }}" type="text" class="form-control">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Razão Social</label>
                    <input name="razao_social" value="{{ $company->razao_social or ""  }}" type="text" class="form-control">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Telefone</label>
                    <input name="telefone" value="{{ $company->telefone or ""  }}" type="text" class="form-control">
                  </div>
                  <div class="form-group col-lg-12">
                    <label>Endereço</label>
                    <input name="endereco" value="{{ $company->endereco or ""  }}" type="text" class="form-control">
                  </div>
              </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($company) ? 'Atualizar' : 'Cadastrar' }}</button>
    </form>
@endsection
