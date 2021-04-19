@extends('layouts/main')

@section('head')

<!-- Add Charts Styles -->

@endsection

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Customer Name</th>
            <th>Customer Number</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th>Sales YTD</th>
            <th>GP$ YTD</th>
            <th>GP% YTD</th>
            <th>Last Inv Date</th>
            <th>Last Pay Date</th>
            <th>A/R Balance</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->cust_name}}</td>
            <td>{{$item->cust_number}}</td>
            <td>{{$item->cust_city}}</td>
            <td>{{$item->cust_state}}</td>
            <td>{{$item->cust_zip}}</td>
            <td>{{$item->sales_ytd}}</td>
            <td>{{$item->gpdollars_ytd}}</td>
            <td>{{$item->gppercent_ytd}}</td>
            <td>{{$item->last_invoice_date}}</td>
            <td>{{$item->last_payment_date}}</td>
            <td>{{$item->ar_balance}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
