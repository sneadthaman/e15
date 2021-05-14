@extends('layouts/main')

@section('content')

<h1>{{ $customer->cust_name }}</h1>
<h2>Customer Number: {{ $customer->cust_number }}</h2>

<form method="POST" action="/projects">
    {{ csrf_field() }}
    <fieldset class="mb-3">
        <legend class="mt-4">Add A Project</legend>

        <label for="project_name" class="form-label">Project Name</label>
        <input type="text" class="form-control" name="project_name" id="project_name" value="{{ 
             old("project_name")
        }}" dusk='project-name' />
        @include('includes/error-field', ['fieldName' => 'project_name'])

        <label for="cust_number" class="form-label">Customer Number</label>
        <input type="number" class="form-control" name="cust_number" id="cust_number" value={{ $customer->cust_number }} value="{{ 
             old("cust_number")
        }}" dusk='cust-number' />
        @include('includes/error-field', ['fieldName' => 'cust_number'])

        <label for="begin_date" class="form-label">Begin Date</label>
        <input type="date" class="form-control" name="begin_date" id="begin_date" value="{{ 
             old("begin_date")
        }}" dusk='begin-date' />
        @include('includes/error-field', ['fieldName' => 'begin_date'])

        <label for="end_date" class="form-label">End Date</label>
        <input type="date" class="form-control" name="end_date" id="end_date" value="{{ 
             old("end_date")
        }}" dusk='end-date' />
        @include('includes/error-field', ['fieldName' => 'end_date'])

        <label for="project_email" class="form-label">Customer Email</label>
        <input type="email" class="form-control" name="project_email" id="project_email" value="{{ 
             old("project_email")
        }}" dusk='project-email' />
        @include('includes/error-field', ['fieldName' => 'project_email'])

        <label for="complete_pct" class="form-label">Progress (%)</label>
        <input type="number" class="form-control" name="complete_pct" id="complete_pct" value="0" dusk='complete-pct' />
        @include('includes/error-field', ['fieldName' => 'complete_pct'])
    </fieldset>

    <button type="submit" class="btn btn-primary" dusk='project-button'>Add Project</button>
    @if(count($errors) > 0)
    <div class='alert alert-danger'>
        Please correct the above errors.
    </div>
    @endif
</form>


@endsection
