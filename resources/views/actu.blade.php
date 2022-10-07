@extends('layouts.template')

@section('scripts')   
@endsection

@section('navbar')
<span class="link_container">
            <a href="{{ route('home') }}" class="link  scrollto">Accueil</a>
            <a href="{{ route('forum') }}" class="link scrollto">Forum</a>
            <a href="{{ route('actu') }}" class="link scrollto">News</a>
            <a href="https://www.lome-city.com/pharmacie-de-garde-lome/" class="link scrollto">Pharmacies de gardes</a>
        </span>
        <span class="longin_signup">
            <a href="{{route('logout')}}">Logout</a>
        </span>
@endsection

@section('menu_burger')

<nav class="menu_burger">
                <div class="menu_contener">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}" class="link">
                                Accueil
                            </a>
                        </li>
                        <li>
                            <a href="#bout" class="link">
                                A propos
                            </a>
                        </li>
                        <li>
                            <a href="#doctors" class="link">
                                Nos médecins
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('forum') }}" class="link">
                                Forum
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('actu') }}" class="link">
                                News
                            </a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}" class="link-logout">Deconnexion</a>
                        </li>

                    </ul>
                </div>
            </nav>
@endsection

@section('content')

<h1>News</h1>
@endsection