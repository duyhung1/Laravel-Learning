<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="{{ route('welcome') }}">Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('welcome') }}">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('other.about') }}">About</a>
      </li>    
    </ul>
  </div>  
</nav>