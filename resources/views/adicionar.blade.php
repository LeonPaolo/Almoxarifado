@extends('layouts.app')

@section('content')
 <div class="col-md-12">

<form role="form" id="form_bairro" action="{{route('Almoxarifado.store')}}" method="post" accept-charset="utf-8" >
@csrf
    <div class="col-md-12">
    	<div class="form-row">
			<div class="form-group col-lg-4">
				<label> Nome: </label>
				<input type="text" value="" name="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="Digite da nome pessoa ">
				  @error('nome')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>   
            <div class="form-group col-lg-4">
				<label> Email: </label>
				<input type="text" value="" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Digite o email">
				@error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>  
             <div class="form-group col-lg-4">
				<label> Contato: </label>
				<input type="text" value="" name="fone" class="form-control @error('email') is-invalid @enderror" placeholder="Digite o contato">
				  @error('fone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>                         
		</div>
		<div class="form-row">
			<div class="form-group col-lg-4">
				<label> Item: </label>
				<input type="text" value="" name="item" class="form-control @error('item') is-invalid @enderror" placeholder="Digite o nome da item">
				  @error('item')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>                       
		
			<div class="form-group col-lg-8">
				<label> Descrição do item:</label>
				<textarea class="form-control col-lg-11 @error('desc') is-invalid @enderror" name="desc" style="height: 40px;" placeholder="Uma breve descrição do item"></textarea>
				  @error('desc')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
			</div>
		</div>
	</div>
	<div class="card-footer">
		<button type="submit" class="btn btn-info btn-sm mr-4"  style="width: 80px;">Salvar</button>
		<button type="reset" class="btn btn-secondary btn-sm "  style="width: 80px;">Limpar</button>
	</div>
</form>
</div>



@endsection