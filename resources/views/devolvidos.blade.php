@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Almoxafirado</div>

                <div class="card-body">
                    <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Produto</th>
                              <th scope="col">Descrição</th>
                              <th scope="col">Contato</th>
                              <th scope="col">Email</th>
                              <th scope="col">Data do emprestimo</th>
                              <th scope="col">data da devolção</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($collection as $lista)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$lista->produto}}</td>
                              <td>{{$lista->dsc}}</td>
                              <td>{{$lista->fone}}</td>
                              <td>{{$lista->email}}</td>
                              <td>{{date('d/m/Y', strtotime($lista->dia))}}</td>
                              <td>{{date('d/m/Y', strtotime($lista->dt_devolucao))}}</td>
                            @empty
                            <td colspan="5">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>Você não tem nada emprestado!!!</strong> 
                          
                        </div>
                        </td>
                            </tr>

                            @endforelse

                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
