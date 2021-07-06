@extends('Layouts.App')

@section('content')
<div class="row screen-header">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Novo usuário</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/users" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Erros!</strong>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="/users">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group ">
                <strong>Nome*:</strong>
                <input type="text" name="name" class="form-control input-field" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data de nascimento*:</strong>
                <input type="date" name="birth" class="form-control input-field">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sexo*:</strong>
                <select name="gender" class="form-control input-field">
                    <option value=""></option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CEP:</strong>
                <input id="postcode" type="text" name="postcode" class="form-control input-field">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Endereço:</strong>
                <input id="address" type="text" name="address" class="form-control input-field">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Número:</strong>
                <input id="address_number" type="text" name="address_number" class="form-control input-field">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Complemento:</strong>
                <input id="complement" type="text" name="complement" class="form-control input-field">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bairro:</strong>
                <input id="district" type="text" name="district" class="form-control input-field">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Cidade:</strong>
                <input id="city" type="text" name="city" class="form-control input-field">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Estado:</strong>
                <select id="state" class="form-control input-field" name="state">
                    <option value=""></option>
                    @foreach ($states as $key => $state)
                    <option value="{{$key}}">{{$state}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</form>
<script src="{{ URL::asset('js/cep.js') }}"></script>
@endsection