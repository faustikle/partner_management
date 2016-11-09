@extends('layouts.painel')

@section('title', 'Dashboard')

@section('content')
    @if (session('flash-message'))
        <div class="alert alert-{{ session('flash-message')  }}">
            {{ session('message') }}
        </div>
    @endif
@endsection

