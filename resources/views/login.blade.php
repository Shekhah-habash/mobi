@extends('layout')
@section('title','login')
@section('content')
<div class="container" >

<form action="{{route('login.post')}} " method="POST" class="ms-auto me-auto mt-3"  style="width: 500px ">
   @csrf
  <div class="mb-3">
    <label class="form-label">User name</label>
    <input type="name" class="form-control" name=" username">

  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password >
  </div>

  <div class="d-grid gap-2 col-6 mx-auto">
  <button style="width: 100%;" class="shadow-lg btn btn-outline-dark btn-lg btn-block p-2 m-1" type="submit">login</button>
</div>
</form>

</div>

@endsection
