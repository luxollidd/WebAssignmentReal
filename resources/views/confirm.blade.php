
    @extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"><br>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You have successfuly perform Add/Drop
                    <a href="{{url('/apply')}}"><button class="btn btn-primary float-right">Return</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
