@extends('layouts.app')

@section('content')

@include('menuLateral')
    <div class="row">     
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header bg-primary text-white">Itens Emprestados</div>

                <div class="card-body">
                    <table class="table">
                          <thead class="bg-secondary text-white">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Produto</th>
                              <th scope="col">Descrição</th>
                              <th scope="col">Contato</th>
                              <th scope="col">Email</th>
                              <th scope="col">Data</th>
                              <th colspan="1">Ação</th>
                            </tr>
                          </thead>
                          <tbody>
                          @forelse($collection as $lista)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$lista->produto}}</td>
                              <td>{{$lista->dsc}}</td>
                              <td>{{$lista->fone}}</td>
                              <td> <a href="mailto:{{$lista->email}}"> {{$lista->email}}</a>  </td>
                              <td>{{date('d/m/Y', strtotime($lista->dia))}}</td>
                              <form action="{{route('Almoxarifado.update', $lista->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <td>
                                    <input class="btn btn-success btn-sm" type="submit" value="Devolvido?" style="width: 100px;">
                                 </td>
                                 
                              </form>
                            @empty
                            <table class="ml-4 mt-2">
                              <tr>
                                <td class="font-weight-normal" style="color: #333;">
                                  <i class="fas fa-thumbs-up"></i> Nenhum item emprestado. Uhuuu!</td>
                                </tr>
                            </table> 
                        @endforelse
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection
