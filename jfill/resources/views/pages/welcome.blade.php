@extends('layouts/main')

@section('content')

<form method="POST" action="/process">
    {{ csrf_field() }}
    <label for="custName" class="form-label">Customer Name</label>
    <input type="text" name="custName" class="form-control form-control-lg" placeholder="ABC Company" value="{{ old("custName") }}" />

    <label for="custPhone" class="form-label">Customer Phone</label>
    <input type="tel" name="custPhone" class="form-control form-control-lg" value="{{ old("custPhone") }}" />

    <label for="custEmail" class="form-label">Customer Email</label>
    <input type="email" name="custEmail" class="form-control form-control-lg" value="{{ old("custEmail") }}" />

    <label for="unitType" class="form-label">Unit Type</label>
    <select name="unitType" class="form-select form-select-lg">
        <option selecteddisabled>--Select J-Fill Type--</option>
        <option value="uno">Uno</option>
        <option value="duo">Duo</option>
        <option value="quattro">Quattro</option>
    </select>

    <label for="numOfUnits" class="form-label">Number of Units</label>
    <input type="number" name="numOfUnits" class="form-control form-control-lg" value="{{ old("numOfUnits") }}" />

    <label for="unitDesc" class="form-label">Notes about dispenser(s)</label>
    <textarea name="unitDesc" class="form-control form-control-lg" rows="3" value="{{ old("unitDesc") }}"></textarea>

    {{-- <label for="initials" class="form-label">Your Initials</label>
            <input type="text" name="initials" class="form-control" /> --}}
    @if(count($errors) > 0)
    <ul class='alert alert-danger'>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg">Send Request</button>
    </div>

</form>
@endsection
