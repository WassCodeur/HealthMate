@extends('layouts.template')

@section('scripts')
<title>Connexion</title>   
@endsection

@section('content')
    <section class="connexion_container">
        <div class="account">
            <div class="login_field">
                <div class="connexiontitle">
                    Connexion
                </div>
                <div class="apifac">
                    <span class="with">
                        Avec :
                    </span>
                    <span class="googleapi">
                        <a href="#">
                            <img src="assets\icons\logo-google-glass.png" alt="google" width="15px">
                        </a>
                    </span>
                    <span class="facebookapi">
                        <a href="#">
                            <img src="assets\icons\facebook (1).png" alt="facebook" width="15px">
                        </a>
                    </span>
                    <span class="instagramapi">
                        <a href="#">
                            <img src="assets\icons\instagram (1).png" alt="instagram" width="15px">
                        </a>
                    </span>
                </div>
                <div>
                    Ou utilisez vos informations personnelles
                </div>
                <form action="{{ route('userlogin')}}" method="post">
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                    @endif
                    @csrf
                    <input type="email" placeholder="email" name="email" class="input_account" value="{{old('email')}}" required>
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    <input type="password" placeholder="Password" name="password" class="input_account" required>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    <input type="submit" value="CONNEXION" class="btn_submit " id="submit_accounnt">
                </form>
                <div class="forgetpassword">
                    Mot de passe oublié ? <a href="#">Cliquez Ici</a>
                </div>
            </div>
            <div class="welcome_field">
                <div class="connexi_title">
                    Bienvenue à nouveau
                </div>
                <div class="donthaveaccout">
                    Vous n'etes pas encore inscrit ? c'est pas grave
                    <a href="{{ route('inscription') }}" class="link">Créez votre compte</a>
                </div>
            </div>
        </div>
    </section>
@endsection