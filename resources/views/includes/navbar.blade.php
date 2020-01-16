<!--<nav class="navbar navbar-expand-lg navbar-light bg-light"><
    <a class="navbar-brand" href="/home">Add Dop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="/apply">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/HOD">HOD</a>
        </li>
        @guest
        <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
        </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        @endguest
        
      </ul>
    </div>
  </nav>-->

  

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Add Drop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
      @guest
        <li class="nav-item">
            <a class="nav-link" href="{{route('login') }}">{{ __('Login') }}</a>
        </li>
        
        @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{route('register') }}">{{ __('Register')}}</a>
          </li>
        @endif
      @else
        <li class="nav-item dropdown">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="/apply">Student</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/HOD">HOD</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
              </li>
              
            </ul>
          </div>
        </li>

        @endguest
        </ul>
    </div>
  </nav>

