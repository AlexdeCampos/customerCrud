@extends('Layouts.App')
<?php
$birth = date('d/m/Y', strtotime($user->birth));
$gender = $user->gender == "M" ? "Masculino" : "Feminino";
$state = $states[$user->state];
?>

@section('content')

<div class="row screen-header">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Dados de usuário </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/users" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group view-field">
            <strong>Nome:</strong> {{$user->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group view-field">
            <strong>Data de nascimento:</strong>
            {{$birth}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group view-field">
            <strong>Sexo:</strong> {{$gender}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group view-field">
            <strong>CEP:</strong> {{$user->postcode}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group view-field">
            <strong>Endereço:</strong> {{$user->address}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group view-field">
            <strong>Número:</strong> {{$user->address_number}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group view-field">
            <strong>Complemento:</strong> {{$user->complement}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group view-field">
            <strong>Bairro:</strong> {{$user->district}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group view-field">
            <strong>Cidade:</strong> {{$user->city}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group view-field">
            <strong>Estado:</strong> {{$state}}
        </div>
    </div>
</div>
@endsection