@extends('layouts.app')

@section('content')

@include('menuLateral')
 <div class="row">  
 	<div class="col-md-12">
 		<div class="card ">
	 		<div class="card-header bg-danger text-white">Emprestar um item</div>
			<div class="card-body">
				<form role="form" action="{{route('Almoxarifado.store')}}" method="post" accept-charset="utf-8" >
					@csrf
					<div class="form-row">
						<div class="form-group col-lg-6">
							<label> Nome: </label>
							<input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome do(a) amigo(a) ">
							@error('nome')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group col-lg-6">
							<label> Email: </label>
							<input type="text" value="" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Digite o email">
							@error('email')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						
					</div>
					<div class="form-row">
						<div class="form-group col-lg-6">
							<label> Contato: </label>
							<input type="text" value="" name="fone" class="form-control @error('email') is-invalid @enderror" placeholder="Digite celular de contato">
							@error('fone')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group col-lg-6">
							<label> Item: </label>
							<input type="text"  name="item" class="form-control @error('item') is-invalid @enderror" placeholder="Digite o nome do item">
							@error('item')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-lg-12">
							<label> Descrição do item:</label>
							<textarea class="form-control  @error('desc') is-invalid @enderror" name="desc"  placeholder="Descrição o item e suas características" rows="2" style="resize: none;"></textarea>
							@error('desc')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>

				<div class="card-footer">
					<button type="submit" class="btn btn-danger btn-sm mr-4 col-3" >Salvar</button>
					<button type="reset" class="btn btn-secondary btn-sm col-3" >Limpar</button>
				</div>
				</form>
				
			</div>
		</div>
	</div>
</div>




@endsection