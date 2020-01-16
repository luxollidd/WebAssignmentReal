@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"><br>
            <div class="card"> 
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You can now proceed to perfrom your add and drop!<br>
                    Make sure you choose theright subject.</p>
                </div>
            </div>    
            <br>
            <!-- //using alert
            <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">You've succesfully Login</h4>
                    <p>You can now proceed to perfrom your add and drop!<br>
                    Make sure you choose theright subject.</p>
                    
            </div>
            -->
        </div>
    </div>
</div>
@endsection
