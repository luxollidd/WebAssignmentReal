@extends('layouts.main')

@section('content')

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
            @foreach($app as $app)
            @if($app->status == 0){
            <tr>
                <th scope="row">{{ $i++}}</th>  
                <td>{{$app->id}}</td>
                <td>{{$app->student->name}}</td>
                <td>{{$app->choice}}</td>
                <td>{{$app->subject->name}}</td>
                <td>{{$app->reason}}</td>
                <td>{{$app->solution}}</td>
                <td>{{$app->status}}</td>
                <td>
                    <form action="{{}}" method="POST"
            </tr>
            }
            @endif
            @endforeach
        </tbody>
      </table>

@endsection
