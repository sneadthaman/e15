@extends('layouts/main')

@section('content')

<form class="mt-3 p-2" method="POST" action="/process">
    {{ csrf_field() }}

    <label for="custName" class="my-3 fs-3 form-label">Customer Name</label>
    <input type="text" name="custName" class="form-control form-control-lg" placeholder="ABC Company" value="{{ old("custName") }}" />
    @if($errors->get('custName'))
    <div class='text-danger'>{{ $errors->first('custName') }}</div>
    @endif


    <label for="custPhone" class="my-3 fs-3 form-label">Customer Phone</label>
    <input type="tel" name="custPhone" class="form-control form-control-lg" value="{{ old("custPhone") }}" />
    @if($errors->get('custPhone'))
    <div class='text-danger'>{{ $errors->first('custPhone') }}</div>
    @endif

    <label for="custEmail" class="my-3 fs-3 form-label">Customer Email</label>
    <input type="email" name="custEmail" class="form-control form-control-lg" value="{{ old("custEmail") }}" />
    @if($errors->get('custEmail'))
    <div class='text-danger'>{{ $errors->first('custEmail') }}</div>
    @endif

    <label for="unitType" class="my-3 fs-3 form-label">Unit Type</label>
    <select name="unitType" class="form-select form-select-lg">
        <option selecteddisabled>--Select J-Fill Type--</option>
        <option value="uno">Uno</option>
        <option value="duo">Duo</option>
        <option value="quattro">Quattro</option>
    </select>

    <label for="numOfUnits" class="my-3 fs-3 form-label">Number of Units</label>
    <input type="number" name="numOfUnits" class="form-control form-control-lg" value="{{ old("numOfUnits") }}" />
    @if($errors->get('numOfUnits'))
    <div class='text-danger'>{{ $errors->first('numOfUnits') }}</div>
    @endif

    <label for="unitDesc" class="my-3 fs-3 form-label">Notes about dispenser(s)</label>
    <textarea name="unitDesc" class="form-control form-control-lg" rows="3" value="{{ old("unitDesc") }}"></textarea>

    {{-- <label for="initials" class="form-label">Your Initials</label>
            <input type="text" name="initials" class="form-control" /> --}}
    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg">Send Request</button>
    </div>

</form>
@endsection
