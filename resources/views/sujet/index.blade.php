@extends('layouts.template')


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
@section('content')
    <div class="container">
        <div class="list-group">
            @foreach($sujets as $sujet)
            <div class="card">
                <h2>{{ $sujet->title }}</h2>
                <p>{{ $sujet->content}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small>posté le {{ $sujet->created_at->format('d/m/y à H:M') }}  </small>
                    <span class="badge-primary">posté par {{ $sujet->user->firstname }}</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-3" width="10%">
            {{ $sujets->links() }}
        </div>
    </div>


@endsection