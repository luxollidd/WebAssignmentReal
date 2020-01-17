

  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="{{url('/')}}">Add Drop</a>
      <h3 class="text-center">Welcome
          @if (Auth::guard('hod')->check())
                {{Auth::guard('hod')->user()->name}}!
              @elseif (Auth::guard('student')->check())
                {{Auth::guard('student')->user()->name}}!
              @else
                stranger!
          @endif

      </h3>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
      @auth
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

            @if (Auth::guard('student')->check())
              <li class="nav-item">
                <a class="nav-link" href="/student">Student</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
              </li>

            @elseif (Auth::guard('hod')->check())
              <li class="nav-item">
                <a class="nav-link" href="/HOD">HOD</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
              </li>

            @else
            <li class="nav-item">
            <a class="nav-link" href="{{url('login/student') }}">{{ __('Student Login') }}</a>
        </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('login/hod') }}">{{ __('HOD Login') }}</a>
        </li>

        @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{url('register/student') }}">{{ __('Student Register')}}</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('register/hod') }}">{{ __('HOD Register')}}</a>
          </li>
        @endif
            @endif
            </ul>
          </div>
        </li>
        @endauth
        </ul>
    </div>
  </nav>

