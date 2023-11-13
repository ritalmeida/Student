@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<ul class="list-group">
    @forelse($students as $student)
    <li class="list-group-item">
        <h5>{{$student->id}} - {{$student->firstName}} - {{$student->lastName}} </h5>
        <form action="{{ url('students/destroy/'.$student->id) }}" method="POST">
            <a class="btn btn-info" href="{{ url('students/show',$student->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ url('students/edit',$student->id) }}">Edit</a>
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </li>
    @empty
    <h5 class="text-center">No Students Found!</h5>
    @endforelse
</ul>
{!! $students->links('pagination::bootstrap-4') !!}

@endsection