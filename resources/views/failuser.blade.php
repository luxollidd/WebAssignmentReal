@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"><br>
            <!--<div class="card"> 

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    
                    Plese login or regiseter in order to view this page
                </div> 
            <br><br>
            </div>-->
            <!--//using alert-->

            
            <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Unauthorized access</h4>
                    <p> Plese login or regiseter in order to view this page</p>
                    
            </div>
        </div>
    </div>
</div>
@endsection
