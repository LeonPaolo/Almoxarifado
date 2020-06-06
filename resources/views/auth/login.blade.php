@extends('layouts.app')

@section('content')
  <div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header" style="background-color: #ccccff;"><h3 class="text-center font-weight-light text-dark my-3" >Área do Administrador</h3></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input name="email" class="py-4 form-control @error('email') is-invalid @enderror"  id="inputEmailAddress" type="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Senha</label>
                                    <input id="password" type="password" class="py-4 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror                                   
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                        <label class="custom-control-label" for="rememberPasswordCheck">Lembrar de mim</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                                     
                                    <button type="submit" class="btn btn-primary col-6">
                                        {{ __('Entrar') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="{{ route('register') }}">Não tem uma conta? Cadastre-se</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection