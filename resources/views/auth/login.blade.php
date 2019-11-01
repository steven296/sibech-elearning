@extends('auth.layouts.app')

@section('content')
<body id="login_bg">
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

                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <div class="access_social">
                        <a href="#0" class="social_bt facebook">Facebook</a>
                    </div>
                    <div class="divider"><span>O</span></div>

                    <div class="form-group">
                        <span class="input">
                            <input id="email" type="email" class="input_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label class="input_label">
                                <span class="input__label-content">Your email</span>
                            </label>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>

                        <span class="input">
                            <input id="password" type="password" class="input_field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <label class="input_label">
                                <span class="input__label-content">Your password</span>
                            </label>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>

                        <small>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </small>
                    </div>

                    <button type="submit" class="btn_1 rounded full-width add_top_60">
                        {{ __('Login') }}
                    </button>
                    <div class="text-center add_top_10">No tienes cuenta? <strong><a href="{{ route('register') }}">Registrate!</a></strong></div>
                </form>

                <div class="copy">© 2019 Sibech e-learning</div>
            </aside>
        </div>
        
@endsection
