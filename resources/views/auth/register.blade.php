@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Criar uma conta</h3></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                    	@csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-group">
                                	<label class="small mb-1" for="inputFirstName">Nome</label>
                                	<input id="name" type="text" class="py-4 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Seu name completo">

                                	@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               		@enderror  

                                </div>
                            </div>                           
                        </div>

                        <div class="form-group">
                        	<label class="small mb-1" for="inputEmailAddress">Email</label>
                        	<input id="email" type="email" class="py-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" aria-describedby="emailHelp"  placeholder="Seu email" >
                        	 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                	<label class="small mb-1" for="inputPassword">Senha</label>
									<input id="password" type="password" class="py-4 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Digite uma senha">
                                	@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                	<label class="small mb-1" for="inputConfirmPassword">Confirmar Senha</label>
                                	<input id="password-confirm" type="password" class=" py-4 form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme a senha">
                                	
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0">
                        	<button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Criar conta') }}
                            </button>                        	
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small"><a href="{{ route('login') }}">Já tem uma conta? Acesse</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection