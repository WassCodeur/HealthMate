@extends('layouts.template')


@section('navbar')
<span class="link_container">
            <a href="{{ route('home') }}" class="link  scrollto">Accueil</a>
            <a href="{{ route('forum') }}" class="link scrollto">Forum</a>
            <a href="{{ route('actu') }}" class="link scrollto">News</a>
            <a href="https://www.lome-city.com/pharmacie-de-garde-lome/" class="link scrollto">Pharmacies de gardes</a>
        </span>
        <span class="longin_signup">
            <a href="{{route('logout')}}" class="link-logout">Deconnexion</a>
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



    <div class="container">
    <div class="btn-create-container">
        <a href="{{ route('sujet.create') }}" class=" btn-create">Faire un post</a>
    </div>
        <div class="list-group">
            @foreach($sujets as $sujet)
            <div class="card">
                <h2><a href="{{ route('sujet.show', $sujet) }}" class="link2">{{ $sujet->title }}</a></h2>
                <p>{{ $sujet->content}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small>posté le {{ $sujet->created_at->format('d/m/y à H:m') }} par {{ $sujet->user->firstname }} </small>
                    <a href="{{ route('sujet.show', $sujet->id) }}" class="btn btn-primary">Voir</a>
                    <!-- <a href="{{ route('sujet.edit', $sujet->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('sujet.destroy', $sujet->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form> -->
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-3" width="10%">
            {{ $sujets->links() }}
        </div>
    </div>


@endsection