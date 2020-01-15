@extends('layouts.main')

@section ('content')

<form method="post" action="{{route('apply.store')}}" id="create">
@csrf
<h1>Add Drop</h1>
    
    <div class="form-group">
        <label for="std_id">Student Name</label>
        <input type="text" class="form-control" name="std_id" value="{{$std->id}}">
    </div>

    <div class="form-group">
        <label for="std_id">Student ID</label>
        <input type="text" class="form-control" name="email" value="{{$std->email}}">
    </div>

    <div class="form-group">
        <label for="option">Add/Drop</label><br>
        <input type="radio" name="choice" value="Add">Add </input><br>
        <input type="radio" name="choice" value="Drop">Drop </input>
        </select>
    </div>
 
    <div class="form-group">
        <label for="subj_name">Subject Name</label>
        <select class="form-control" id="subject">
        @foreach ($subj as $sb)
            <option value="{{$sb->subject_id}}">{{$sb->name}}</option>
        @endforeach
    </select>
    </div>

    <div class="form-group">
        <label for="subj_code">Subject Code</label>
        <input type="text" class="form-control" name="subj_code" >
    </div>
  
    <div class="form-group">
        <label for="reasons">Reasons</label>
        <textarea class="form-control" id="reasons" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="solution">Proposed Solution</label>
        <textarea class="form-control" id="solution" rows="3"></textarea>
    </div>

    <input type="hidden" class="form-control" name="std_id" value="{{$std->student_id}}" >
  <input type="submit" value="Submit">
</form>
@endsection