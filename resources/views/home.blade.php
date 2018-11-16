@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="">
                <div class="card-header" style="padding:3rem; padding-left:0px; font-size:1.5rem;"> Usuarios do sistema </div>
                <div class="table-users" style="padding:1rem;padding-left:0px;">
                    <table>
                        <thead>

                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Level</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $u)
                        <tr>
                            <td>{{ $u->name}}</td>
                            <td>{{ $u->email}}</td>
                            <td>{{  $u->level }} </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <a href="{{ route('create.usuario') }}" class="btn-floating btn-medium waves-effect waves-light red"> <i class="material-icons">add</i></a>

    </div>
</div>
@endsection
