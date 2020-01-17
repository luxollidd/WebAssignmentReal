<!doctype html>
<html lang="en">

<head>
    @include('includes.header')
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
</head>

<body>
    <div class="container">
        @include('includes.navbar')

        @if (\Session::has('success'))
            <div class= "alert alert-success">
                <p>{{ \Session::get('success')}}</p>
            </div>

        @elseif(\Session::has('danger'))
            <div class=" alert alert-danger">
                <p>{{ \Session::get('danger') }}</p>
            </div>

        @elseif(\Session::has('message'))
            <div class=" alert alert-warning">
                <p>{{ \Session::get('message') }}</p>
            </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($error->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        <@endif>

        <br>
        @endif

        @yield('content')

        @include('includes.footer')
    </div>
</body>
</html>
