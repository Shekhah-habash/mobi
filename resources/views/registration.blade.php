@extends('layout')
@section('title', 'Registration')
@section('content')

<div class="container">

    <form action="{{ route('registration.post')}} " method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
        @csrf
        <div class="mb-3">
            <label class="form-label">First name</label>
            <input type="text" class="form-control" name="name1">
        </div>

        <div class="mb-3">
            <label class="form-label">Last name</label>
            <input type="text" class="form-control" name="name2">
        </div>

        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="mb-3">
            <label class="form-label">Bank Account</label>
            <input type="text" class="form-control" name="bank">
        </div>

        <div class="mb-3">
            <label class="form-label">Phone number</label>
            <input type="text" class="form-control" name="phone">
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

</div>

@endsection
