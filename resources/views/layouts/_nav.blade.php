<style type="text/css">
  .navbar-brand{
    padding-left: 100px;
  }
  .navbar-right{
    padding-right: 70px;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{Route('home')}}">Laracarte</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{route_active('home')}}">
        <a class="nav-link" href="{{Route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{route_active('about')}}"  href="{{Route('about')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Artisans</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Planet
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
          <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
          <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
          <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
          <a class="dropdown-item" href="https://laravel-news.com">Laravel news</a>
          <a class="dropdown-item" href="https://Larachat.co">LaraChat</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>     
     
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li> 
    </ul>
   
  </div>
</nav>