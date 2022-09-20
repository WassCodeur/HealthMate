@extends('layouts.template')

@section('scripts')   
@endsection

@section('content')
<section class="inscription_container">
    <div class=" account">
            <div class="welcome_field">
                <div class="signup_title">
                    Bienvenue à nouveau
                </div>
                <div class="donthaveaccout">
                    Vous avez déjà un compte ? génial
                    <a href="{{ route('connexion') }}" class="link">Connectez-vous</a>
                </div>
            </div>
            <div class="login_field">
                <div class="connexiontitle">
                    Inscription
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
            <form action=".\getapp.blade.php" method="post">
                <input type="text" placeholder="Nom" required class="input_account">
                    <input type="text" placeholder="Prénom" required class="input_account">
                    <input type="email" placeholder="email" required class="input_account">
                    <input type="password" placeholder="Password" required class="input_account">
                    <input type="password" placeholder="Confirm" required class="input_account">
                    <input type="submit" value="INSCRIPTION" class="btn" id="submit_accounnt">
                </form>
            </div>

        </div>
    </section>
@endsection