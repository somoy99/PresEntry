@extends('layouts.app')

@section('content')
<div class="container">

        <form class="container jumbotron form-control" action="store" method="post">
            {!! csrf_field() !!}
            <label for="start_time" >Start Time  &nbsp &nbsp</label>
            <input type="datetime-local"  name="start_time">
            <p>Format: YYYY:DD:MM 00:00:00</p>
            <label for="leave_time">Leave Time &nbsp &nbsp</label>
            <input type="datetime-local" name="leave_time">
            <p>Format: YYYY:DD:MM 00:00:00</p>
            <input type="submit" class="btn btn-danger">
        </form>
    </div>
</div>
@endsection
