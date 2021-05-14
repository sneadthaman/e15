@extends('layouts/main')

@section('content')

@if($projects->count() == 0)
<p>You do not have any current projects</p>
@else

@foreach($projects as $project)
<div>
    <ul>
        <li>
            <a href="../projects/{{$project->id}}" dusk='project-{{$project->id}}'>{{ $project->project_name }}</a>
        </li>
    </ul>
</div>
@endforeach
@endif

@endsection
