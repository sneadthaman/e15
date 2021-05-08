@extends('layouts/main')

@section('head')

<!-- Add Charts Styles -->

@endsection

@section('content')

<div>
    <table class="table table-hover">
        <thead class="table-light">
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
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td><a href="/{{ $item->slug }}">{{$item->cust_name}}</a></td>
                <td>{{$item->cust_number}}</td>
                <td>{{$item->cust_city}}</td>
                <td>{{$item->cust_state}}</td>
                <td>{{$item->cust_zip}}</td>
                <td>${{$item->sales_ytd}}</td>
                <td>${{$item->gpdollars_ytd}}</td>
                <td>{{$item->gppercent_ytd}}%</td>

            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
