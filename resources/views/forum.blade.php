@extends('layouts.template')

@section('scripts')   
@endsection
@section('login')
  <a href="{{ route('connexion') }}" class="longin">Se connecter</a>
  <a href="{{ route('inscription') }}" class="signup">S'inscrire</a>

@endsection
@section('content')

<h1>forum</h1>


<nav class="navbar navbar-expand-md navbar navbar-dark bg-primary">  
  <a class="navbar-brand" href="#">Navbar</a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">  
   <span class="navbar-toggler-icon"></span>  
  </button>  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">  
   <ul class="navbar-nav">  
    <li class="nav-item">  
     <a class="nav-link" href="#">Link</a>  
    </li>  
    <li class="nav-item">  
     <a class="nav-link" href="#">Link</a>  
    </li>  
    <li class="nav-item">  
     <a class="nav-link" href="#">Link</a>  
    </li>    
   </ul>  
  </div>   
 </nav>  
@endsection