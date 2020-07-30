@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Verifique sua caixa de entrada') }}
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link foi enviado para seu endereço de e-mail.') }}
                        </div>
                    @endif

                    {{ __('Antes de prosseguir, cheque sua caixa de entrada para acessar o link.') }}
                    {{ __('Se você não recebeu o e-mail') }},

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf

                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                            {{ __('clique aqui para soliticar um novo link.') }}
                        </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
