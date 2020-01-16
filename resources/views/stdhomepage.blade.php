@extends('layouts.main')

@section ('content')

<h1>Subject List</h1>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">SUBJECT</th>
            <th scope="col">SUBJECT CODE</th>
          </tr>
        </thead>

        <tbody>
            @foreach($student as $std)
            @if($std->status == 0)
            <tr>
                <th scope="row">{{ $i++}}</th>  
                <td>{{$std->id}}</td>
                <td>{{$std->subject->name}}</td>
                <td>{{$std->subject->subject_code}}</td>
               
            </tr>
            
            @endif
            @endforeach
        </tbody>
      </table>

@endsection