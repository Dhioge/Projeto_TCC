@section ('body')
@extends ('admin.layouts.app')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                        <a href="{{ route('index') }}" class="btn btn-primary float-right"><i class="fa fa-arrow-left"></i> Voltar</a>
                @component('admin.widgets.panel')
                    @slot ('panelTitle', 'Entrar')
                    @slot ('panelBody')
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="email" class="control-label">Usuario</label>

                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="password" class="control-label">Senha</label>

                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-6 col-md-6 text-center">
                                    <div class="checkbox-block">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-success btn-block">
                                        Entrar
                                    </button>
                                    <a href="{{ route('register') }}" class="btn btn-primary btn-primary btn-block">Cadastrar</a>
                                    <br>
                                    <a class="btn-link" href="#">
                                        Esqueceu sua senha?
                                    </a>
                                </div>
                            </div>
                             
                        </form>
                    @endslot
                @endcomponent
            </div>


        </div>
        <!--/row-->

    </div>
    <!--/col-->
</div>
<!--/row-->
</div>

@endsection
