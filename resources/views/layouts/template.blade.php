<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\index.css" >
    <link rel="stylesheet" href="assets\css\rendezvous.css">
    <link rel="stylesheet" href="assets\css\medecins.css">
    <link href="assets\css\bootstrap.min.css" rel="stylesheet">
    @yield('scripts')
</head>
<body>
<header>
<div class="container_header">
    <div class="logo">
        <img src="assets\icons\medical-sign.svg" alt="logo" class="logo_img">
    </div>
    <div class="navbar">
    
        <span class="link_container">
            <a href="/" class=link>Accueil</a>
            <a href="#about" class=link>A propos</a>
            <a href="#doctors" class=link>Nos médecins</a>
            <a href="{{route('forum')}}" class=link>Forum</a>
            <a href="{{ route('news') }}" class=link>News</a>
            <a href="https://www.lome-city.com/pharmacie-de-garde-lome/" class=link>Pharmacies de gardes</a>
        </span>
        <span class="longin_signup">
            <a href="{{ route('connexion') }}" class="longin">Se connecter</a>
            <a href="{{ route('inscription') }}" class="signup">S'inscrire</a>
        </span>
        
    </div>
</div>
</header>
    @yield('content')
<footer>
    <div class="footer_content">
        <div class="logo">
            <img src="assets\icons\medical-sign.svg" alt="logo" class="logo_img">
        </div>
        <div class="ressources">
            <div class="ressource_title">
                RESSOURCES
            </div>
            <div class="footer_text">
                <a href="" class="link">A Propos</a>
            </div>
            <div class="footer_text">
                <a href="" class="link">Astuces</a>
            </div>
            <div class="footer_text">
                <a href="" class="link">Sponsores</a>
            </div>
        </div>
        <a href="" class="link"></a>
        <div class="legal">
            <div class="tite_legal">
                LEGAL
            </div>
            <div class="footer_text">
                <a href="" class="link">Conditions d'utilisation</a>
            </div>
            <div class="footer_text">
                <a href="" class="link">Confidentalité</a>
            </div>
            <div class="footer_text">
                <a href="" class="link">Code de Coduite</a>
            </div>
            <div class="footer_text">
                <a href="" class="link">FAQ</a>
            </div>
        </div>
        <div class="contacts_abonne">
            <div class="call_to_abonne">
                ABONNEZ-VOUS
            </div>
            <div class="abonne_description">
                <div>Facere recusandae, voluptates maiores corrupti  corporis 
                <div>ratione mollitia voluptatibus optio libero</div>
            </div>
            <form action="" method="" class="inputs">
                <input type="email" placeholder="email:" name="email_abonné" class="email_abonné" required>
                <input type="submit" value="Abonner" class="btn">
            </form>
            <div class="follow_us_on_socialmedia">
                <div class="follow">
                    Suivez Nous
                </div>
                <div class="social_media">
                    <a href="#" name="facebook"><img src="assets\images\facebook.png" alt="facebook" class="media"></a>
                    <a href="#" name="whatsapp"><img src="assets\images\whatsapp.png" alt="whatsapp" class="media"></a>
                    <a href="#" name="instagram"><img src="assets\images\instagram.png" alt="instagram" class="media"></a>
                    <a href="#" name="linkedin"><img src="assets\images\linkedin (1).png" alt="linkedin" class="media"></a>
                    <a href="#" name="twitter"><img src="assets\images\twitter.png" alt="tweeter" class="media"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>