@section('titulo', 'Recuperar Senha')
@extends('layouts.layoutLogin')
@section('content')
    <section>
        <div class="container-fluid m-auto text-center">
            @component('layouts._components.alert_error')
            @endcomponent
            @component('layouts._components.alert_sucess')
            @endcomponent
            @component('layouts._components.titulo_logo', ['titulo_imagem' => "Recuperar Senha"])
            @endcomponent
            <div class="row">
                <main class="form-signin w-100 m-auto">
                    <form  method="post" class="p-4 p-md-5 border rounded-3 bg-light" action="{{ route('redefinir_senha.redefine') }}">
                        @csrf
                        <label for="floatingInput">Digite seu e-mail</label>
                        <div class="form-floating">
                            <input name="recuperar" type="email" class="form-control" id="floatingInput" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="50" required>
                        </div>
                        <input class="w-100 btn btn-lg btn-primary mt-4" type="submit" value="Recuperar">
                    </form>
                </main>
            </div>
            @component('layouts._components.voltar')
                {{ route('login') }}
            @endcomponent
    </section>
@endsection
