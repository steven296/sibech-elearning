@extends('auth.layouts.app')

@section('content')
<body id="register_bg">
        <nav id="menu" class="fake_menu"></nav>
        
        <div id="preloader">
            <div data-loader="circle-side"></div>
        </div>
        <!-- End Preload -->

        <div id="login">
            <aside>
                <figure>
                    <a href="/"><img src="{{ asset('img/logo-elearning.png') }}" width="149" height="42" data-retina="true" alt=""></a>
                </figure>

                <form method="POST" action="{{ route('register') }}" novalidate>

                    @csrf

                    <div class="form-group">

                        <span class="input">
                            <input id="name" type="text" class="input_field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <label class="input_label">
                                <span class="input__label-content">Your Name</span>
                            </label>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>

                        <span class="input">

                            <input id="email" type="email" class="input_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <label class="input_label">
                                <span class="input__label-content">Your Email</span>
                            </label>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>

                        <span class="input">
                            <input id="password" type="password" class="input_field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <label class="input_label">
                                <span class="input__label-content">Your password</span>
                            </label>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>

                        <span class="input">
                            <input id="password-confirm" type="password" class="input_field" name="password_confirmation" required autocomplete="new-password">
                            <label class="input_label">
                                <span class="input__label-content">Confirm password</span>
                            </label>
                        </span>
                        
                        <div id="pass-info" class="clearfix"></div>
                    </div>
                    <button type="submit" class="btn_1 rounded full-width add_top_30">
                        {{ __('Register') }}
                    </button>
                    <div class="text-center add_top_10">Ya tienes una Cuenta? <strong><a href="{{ route('login') }}">Iniciar Sesion</a></strong></div>
                </form>


                <div class="copy">© 2019 Sibech e-learning</div>
            </aside>
        </div>

@endsection
