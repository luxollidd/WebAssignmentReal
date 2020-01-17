@extends('layouts.main')

@section ('content')

    <div class="container">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4 border border-dark rounded">
                <form method="post" action="{{route('apply.store')}}" id="create">
                    @csrf
                    <h1>Add Drop</h1>

                    <div class="form-group">
                        <label for="std_id">Student Name: {{$std->name}}</label>
                    </div>

                    <div class="form-group">
                        <label for="std_id">Student Email: {{$std->email}}</label>
                    </div>

                    <div class="form-group">
                        <label for="option">Add/Drop</label><br>
                        <input type="radio" name="choice" value="Add">Add </input><br>
                        <input type="radio" name="choice" value="Drop">Drop </input>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="subj_name">Subject Name</label>
                        <select class="form-control" id="subject" name="subjectid">
                            @foreach ($subj as $sb)
                                <option value="{{$sb->id}}">{{$sb->name}} - {{$sb->subj_code}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="reasons">Reasons</label>
                        <textarea class="form-control" id="reason" rows="3" name="reason"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="solution">Proposed Solution</label>
                        <textarea class="form-control" id="solution" rows="3" name="solution"></textarea>
                    </div>

                    <input type="hidden" class="form-control" name="studentid" value="{{$std->id}}" >
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <a href="{{url('/student')}}"><button class="btn btn-primary">Back</button></a>
                </form>


                <br><br>
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>
@endsection
