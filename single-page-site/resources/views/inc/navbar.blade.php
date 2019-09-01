<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">{{config('app.name', 'Simple App')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>
      </ul>
      <div class="my-lg-0">
        <a href="{{ url('/') }}">Useless Link</a>
      </div>
    </div>
  </nav>
</div>