
    @extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="max-width:100%">
            <div class="card" >

                <div class="card-body">
                    <div class="row justify-content-right"><a href="{{url('/apply')}}"><button class="btn btn-primary align-right">Add/Drop</button></a></div>
                    <h1>Application List</h1>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">CHOICE</th>
                            <th scope="col">SUBJECT</th>
                            <th scope="col">REASONS</th>
                            <th scope="col">SOLUTION</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">ACTION</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($app as $ap)
                            @if($ap->student_id == $id)
                                <tr>
                                    <th scope="row">{{ $i++}}</th>
                                    <td>{{$ap->id}}</td>
                                    <td>{{$ap->student->name}}</td>
                                    <td>{{$ap->choice}}</td>
                                    <td>{{$ap->subject->name}}</td>
                                    <td>{{$ap->reason}}</td>
                                    <td>{{$ap->solution}}</td>
                                    <td>
                                        @if ($ap->status == 0)
                                            Pending
                                            @elseif ($ap->status == 1)
                                            Approved
                                            @else
                                            Denied
                                            @endif
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
