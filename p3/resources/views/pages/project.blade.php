@extends('layouts/main')

@section('content')

<h1>{{ $project->project_name }}</h1>

<form method="POST" action="../projects/{{ $project->id }}">
    {{ method_field('put') }}
    {{ csrf_field() }}

    <fieldset>
        <legend>Edit A Project</legend>

        <label for="cust_number">Customer Number</label>
        <input type="number" name="cust_number" id="cust_number" value={{ $project->cust_number }} />

        <label for="begin_date">Begin Date</label>
        <input type="date" name="begin_date" id="begin_date" value="{{ $project->begin_date }}" />

        <label for="end_date">End Date</label>
        <input type="date" name="end_date" id="end_date" value="{{ $project->end_date }}" />

        <label for="project_email">Customer Email</label>
        <input type="email" name="project_email" id="project_email" value="{{ $project->project_email }}" />

        <label for="complete_pct">Progress (%)</label>
        <input type="number" name="complete_pct" id="complete_pct" value="{{ $project->complete_pct }}" />
    </fieldset>

    <button type="submit" class="btn btn-primary">Update Project</button>

</form>

<form method='POST' action="../projects/{{ $project->id }}">
    {{ method_field('delete') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger">Delete Project</button>
</form>

@endsection
