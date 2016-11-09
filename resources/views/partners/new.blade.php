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
            <h3 class="box-title">{{ isset($partner) ? 'Atualizar Sócio' : 'Novo Sócio' }}</h3>
          </div>
          <div class="box-body">
              <div class="row">
                  <div class="form-group col-lg-6">
                    <label>Nome</label>
                    <input name="nome" value="{{ $partner->nome or ""  }}" type="text" class="form-control">
                  </div>
                  <div class="form-group col-lg-6">
                    <label>E-mail</label>
                    <input name="email" value="{{ $partner->email or ""  }}" type="email" class="form-control">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>CPF</label>
                    <input name="cpf" value="{{ $partner->cpf or ""  }}" type="text" class="form-control">
                  </div>
                  <div class="form-group col-lg-8">
                    <label>Empresa</label>
                    <select name="company" class="form-control">
                        <option value=''></option>
                        @foreach($companies as $id => $razao)
                            <option {{ (isset($partner) && $partner->company_id == $id) ? 'selected' : '' }} value='{{$id}}'>{{$razao}}</option>
                        @endforeach
                    </select>
                  </div>
              </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($partner) ? 'Atualizar' : 'Cadastrar' }}</button>
    </form>
@endsection
