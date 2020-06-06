@extends('layouts.app')

@section('content')

@include('menuLateral')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white"><i class="fas fa-handshake"></i> Itens devolvidos</div>
                <div class="card-body">
                    <table class="table">
                          <thead class="bg-secondary text-white" >
                            <tr>
                              <th >#</th>
                              <th >Produto</th>
                              <th >Descrição</th>
                              <th >Contato</th>
                              <th >Email</th>
                              <th >Empréstimo em</th>
                              <th >Devolvido em</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($collection as $lista)
                            <tr>
                              <th >{{$loop->iteration}}</th>
                              <td>{{$lista->produto}}</td>
                              <td>{{$lista->dsc}}</td>
                              <td>{{$lista->fone}}</td>
                              <td>{{$lista->email}}</td>
                              <td>{{date('d/m/Y', strtotime($lista->dia))}}</td>
                              <td>{{date('d/m/Y', strtotime($lista->dt_devolucao))}}</td>
                            @empty
                            <table class="ml-4 mt-2">
                              <tr>
                                <td class="font-weight-normal" style="color: #333;">
                                  <i class="fas fa-thumbs-up"></i> Ainda não fez nenhum empréstimo</td>
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
