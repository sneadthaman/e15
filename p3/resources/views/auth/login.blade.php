@extends('layouts/login')

@section('content')

<h1>Login</h1>

<form method='POST' action='/login'>

    {{ csrf_field() }}

    <label for='email'>E-Mail Address</label>
    <input id='email' type='email' name='email' value='{{ old('email') }}' dusk='login-email' autofocus>
    {{-- @include('includes.error-field', ['fieldName' => 'email']) --}}

    <label for='password'>Password</label>
    <input id='password' type='password' name='password' dusk='login-password'>
    {{-- @include('includes.error-field', ['fieldName' => 'password']) --}}

    <button type='submit' class='btn btn-primary' dusk='login-button'>Login</button>

    </a>

</form>

@endsection
