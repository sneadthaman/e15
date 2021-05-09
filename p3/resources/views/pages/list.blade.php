@extends('layouts/main')

@section('content')

@if($projects->count() == 0)
<p>You do not have any current projects</p>
@else

@foreach($projects as $project)
<div>
    <ul>
        <li>
            {{ $project->project_name }}
        </li>
    </ul>
</div>

@endsection
