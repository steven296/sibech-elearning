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
                            <label for="exampleFormControlSelect1">País</label>
                            <select class="form-control form-control-lg" name="country" id="exampleFormControlSelect1">
                                    <option value="Afganistan">Afganistán</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Alemania">Alemania</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartida">Antártida</option>
                                    <option value="Argelia">Argelia</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaiyan">Azerbaiyán</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrein">Bahrein</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belgica">Bélgica</option>
                                    <option value="Belice">Belice</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermudas">Bermudas</option>
                                    <option value="Bielorrusia">Bielorrusia</option>
                                    <option value="Birmania">Birmania</option>
                                    <option value="Boliva">Bolivia</option>
                                    <option value="Bosnia">Bosnia y Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brasil">Brasil</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Butan">Bután</option>
                                    <option value="CaboVerde">Cabo Verde</option>
                                    <option value="Camboya">Camboya</option>
                                    <option value="Camerun">Camerún</option>
                                    <option value="Canada">Canadá</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Chipre">Chipre</option>
                                    <option value="Vaticano">Ciudad del Vaticano (Santa Sede)</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comores">Comores</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Corea">Corea</option>
                                    <option value="CoreaNorte">Corea del Norte</option>
                                    <option value="CostaMarfil">Costa de Marfíl</option>
                                    <option value="CostaRica">Costa Rica</option>
                                    <option value="Croacia">Croacia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Dinamarca">Dinamarca</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egipto">Egipto</option>
                                    <option value="Salvador">El Salvador</option>
                                    <option value="EmiratosArabes">Emiratos Árabes Unidos</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Eslovenia">Eslovenia</option>
                                    <option value="España">España</option>
                                    <option value="USA">Estados Unidos</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Etiopia">Etiopía</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Filipinas">Filipinas</option>
                                    <option value="Finlandia">Finlandia</option>
                                    <option value="Francia">Francia</option>
                                    <option value="Gabon">Gabón</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Granada">Granada</option>
                                    <option value="Grecia">Grecia</option>
                                    <option value="Groenlandia">Groenlandia</option>
                                    <option value="Guadalupe">Guadalupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guayana">Guayana</option>
                                    <option value="GuayanaFrancesa">Guayana Francesa</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="GuineaEcuatorial">Guinea Ecuatorial</option>
                                    <option value="GuineaBissau">Guinea-Bissau</option>
                                    <option value="Haiti">Haití</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hungria">Hungría</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Irak">Irak</option>
                                    <option value="Iran">Irán</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italia">Italia</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japon">Japón</option>
                                    <option value="Jordania">Jordania</option>
                                    <option value="Kazajistan">Kazajistán</option>
                                    <option value="Kenia">Kenia</option>
                                    <option value="Kirguizistan">Kirguizistán</option>
                                    <option value="Kiribiti">Kiribati</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Letonia">Letonia</option>
                                    <option value="Libano">Líbano</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libia">Libia</option>
                                    <option value="Liechtestein">Liechtenstein</option>
                                    <option value="Lituania">Lituania</option>
                                    <option value="Luxembugo">Luxemburgo</option>
                                    <option value="Macedonia">Macedonia, Ex-República Yugoslava</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malasia">Malasia</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldivas">Maldivas</option>
                                    <option value="Mali">Malí</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marruecos">Marruecos</option>
                                    <option value="Martinica">Martinica</option>
                                    <option value="Mauricio">Mauricio</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">México</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldavia">Moldavia</option>
                                    <option value="Monaco">Mónaco</option>
                                    <option value="Mongalia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Níger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk">Norfolk</option>
                                    <option value="Noruega">Noruega</option>
                                    <option value="NuevaCaledonia">Nueva Caledonia</option>
                                    <option value="NuevaZelanda ">Nueva Zelanda</option>
                                    <option value="Oman">Omán</option>
                                    <option value="PaisesBajos">Países Bajos</option>
                                    <option value="Panama">Panamá</option>
                                    <option value="Nueva Guinea">Papúa Nueva Guinea</option>
                                    <option value="Paquistan">Paquistán</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru" selected>Perú</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Polinesia Francesa">Polinesia Francesa</option>
                                    <option value="Polonia">Polonia</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reino Unido">Reino Unido</option>
                                    <option value="Republica Checa">República Checa</option>
                                    <option value="Republica Dominicana">República Dominicana</option>
                                    <option value="Republica Eslovaca">República Eslovaca</option>
                                    <option value="Reunion">Reunión</option>
                                    <option value="Ruanda">Ruanda</option>
                                    <option value="Rumania">Rumania</option>
                                    <option value="Rusia">Rusia</option>
                                    <option value="Sahara">Sahara Occidental</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="San Vicente">San Vicente y Granadinas</option>
                                    <option value="Santa Helena">Santa Helena</option>
                                    <option value="Santa Lucia">Santa Lucía</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Sierra Leona">Sierra Leona</option>
                                    <option value="Singapur">Singapur</option>
                                    <option value="Siria">Siria</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="Suazilandia">Suazilandia</option>
                                    <option value="Sudan">Sudán</option>
                                    <option value="Suecia">Suecia</option>
                                    <option value="Suiza">Suiza</option>
                                    <option value="Surinam">Surinam</option>
                                    <option value="Tailandia">Tailandia</option>
                                    <option value="Taiwan">Taiwán</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Tayikistan">Tayikistán</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                    <option value="Tunez">Túnez</option>
                                    <option value="Turkmenistan">Turkmenistán</option>
                                    <option value="Turquia">Turquía</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Ucrania">Ucrania</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistán</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Yugoslavia">Yugoslavia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabue">Zimbabue</option>
                            </select>
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
                        <div id="pass-info" class="clearfix"></div>
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
