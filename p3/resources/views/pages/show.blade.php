@extends('layouts/main')

@section('content')

<h1>{{ $customer->cust_name }}</h1>
<h2>{{ $customer->cust_number }}</h2>

<form method="POST" action="/projects">
    {{ csrf_field() }}
    <fieldset>
        <legend>Add A Project</legend>

        <label for="project_name">Project Name</label>
        <input type="text" name="project_name" id="project_name" value="{{ 
             old("project_name")
        }}" dusk='project-name' />
        @include('includes/error-field', ['fieldName' => 'project_name'])

        <label for="cust_number">Customer Number</label>
        <input type="number" name="cust_number" id="cust_number" value={{ $customer->cust_number }} value="{{ 
             old("cust_number")
        }}" dusk='cust-number' />
        @include('includes/error-field', ['fieldName' => 'cust_number'])

        <label for="begin_date">Begin Date</label>
        <input type="date" name="begin_date" id="begin_date" value="{{ 
             old("begin_date")
        }}" dusk='begin-date' />
        @include('includes/error-field', ['fieldName' => 'begin_date'])

        <label for="end_date">End Date</label>
        <input type="date" name="end_date" id="end_date" value="{{ 
             old("end_date")
        }}" dusk='end-date' />
        @include('includes/error-field', ['fieldName' => 'end_date'])

        <label for="project_email">Customer Email</label>
        <input type="email" name="project_email" id="project_email" value="{{ 
             old("project_email")
        }}" dusk='project-email' />
        @include('includes/error-field', ['fieldName' => 'project_email'])

        <label for="complete_pct">Progress (%)</label>
        <input type="number" name="complete_pct" id="complete_pct" value="0" dusk='complete-pct' />
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
