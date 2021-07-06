@extends('Layouts.App')

@section('content')
<div class="row screen-header">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Lista de usuários cadastrados</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="/users/create" title="Create a product"> <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Sexo</th>
        <th>Estado</th>
        <th>Cidade</th>
        <th></th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <?php
        $birth = date('d/m/Y', strtotime($user->birth));
        $gender = $user->gender == "M" ? "Masculino" : "Feminino";
        $state = $user->state ? $states[$user->state] : "";
        ?>

        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$birth}}</td>
        <td>{{$gender}}</td>
        <td>{{$state}}</td>
        <td>{{$user->city}}</td>
        <td>
            <form action="/users/{{$user->id}}" method="POST">

                <a href="/users/{{$user->id}}" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>
                </a>

                <a href="/users/{{$user->id}}/edit">
                    <i class="fas fa-edit  fa-lg"></i>
                </a>

                @csrf
                @method('DELETE')

                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                    <i class="fas fa-trash fa-lg text-danger"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@include('Paginator.Default', ['paginator' => $users])

@endsection