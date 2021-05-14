@extends('layouts/main')

@section('content')

<h1>{{ $project->project_name }}</h1>

<form method="POST" action="../projects/{{ $project->id }}">
    {{ method_field('put') }}
    {{ csrf_field() }}

    <fieldset class="mb-3">
        <legend class="mt-3">Edit A Project</legend>

        <label for="cust_number" class="form-label">Customer Number</label>
        <input type="number" class="form-control" name="cust_number" id="cust_number" value={{ $project->cust_number }} />
        @include('includes/error-field', ['fieldName' => 'cust_number'])

        <label for="begin_date" class="form-label">Begin Date</label>
        <input type="date" class="form-control" name="begin_date" id="begin_date" value="{{ $project->begin_date }}" />
        @include('includes/error-field', ['fieldName' => 'begin_date'])

        <label for="end_date" class="form-label">End Date</label>
        <input type="date" class="form-control" name="end_date" id="end_date" value="{{ $project->end_date }}" />
        @include('includes/error-field', ['fieldName' => 'end_date'])

        <label for="project_email" class="form-label">Customer Email</label>
        <input type="email" class="form-control" name="project_email" id="project_email" value="{{ $project->project_email }}" />
        @include('includes/error-field', ['fieldName' => 'project_email'])

        <label for="complete_pct" class="form-label">Progress (%)</label>
        <input type="number" class="form-control" name="complete_pct" id="complete_pct" value="{{ $project->complete_pct }}" dusk='project-complete-pct' />
        @include('includes/error-field', ['fieldName' => 'complete_pct'])
    </fieldset>

    <button type="submit" class="btn btn-primary" dusk='update-button'>Update Project</button>

</form>

<form method='POST' action="../projects/{{ $project->id }}">
    {{ method_field('delete') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger mt-3" dusk='delete-button'>Delete Project</button>
</form>

@if(count($errors) > 0)
<div class='alert alert-danger'>
    Please correct the above errors.
</div>
@endif

@endsection
