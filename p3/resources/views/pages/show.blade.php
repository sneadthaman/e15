@extends('layouts/main')

@section('content')

<h1>{{ $customer->cust_name }}</h1>
<h2>{{ $customer->cust_number }}</h2>

<form method="POST" action="/projects">
    {{ csrf_field() }}
    <fieldset>
        <legend>Add A Project</legend>

        <label for="project_name">Project Name</label>
        <input type="text" name="project_name" id="project_name" />

        <label for="cust_number">Customer Number</label>
        <input type="number" name="cust_number" id="cust_number" value={{ $customer->cust_number }} />

        <label for="begin_date">Begin Date</label>
        <input type="date" name="begin_date" id="begin_date" />

        <label for="end_date">End Date</label>
        <input type="date" name="end_date" id="end_date" />

        <label for="project_email">Customer Email</label>
        <input type="email" name="project_email" id="project_email" />

        <label for="complete_pct">Progress (%)</label>
        <input type="number" name="complete_pct" id="complete_pct" value="0" />
    </fieldset>

    <button type="submit" class="btn btn-primary">Add Project</button>
</form>


@endsection
