@extends('layouts.template')

@section('scripts')   
@endsection
@section('login')
  <a href="{{ route('connexion') }}" class="longin">Se connecter</a>
  <a href="{{ route('inscription') }}" class="signup">S'inscrire</a>

@endsection
@section('content')

<h1>News</h1>
@endsection