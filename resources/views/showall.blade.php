@extends('layouts.app')

@section('content')
    @foreach($attendances as $attendance)
        <ul class="list-group">
            <li class="text-center list-group-item">User ID: {{$attendance->user_id}} , Start Time:{{$attendance->start_time}}, Leave Time:{{$attendance->leave_time}}</li>
        </ul>
    @endforeach
@endsection