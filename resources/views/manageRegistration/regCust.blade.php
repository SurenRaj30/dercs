@extends('layouts.navReg')


@section('content')
<title>Customer Registration</title>
<link rel="stylesheet" href="public/css/style.css">
<form action="{{URL::to('/save')}}" method="POST">
    
    <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input name='fullname' type="text" placeholder="Full Name" class="form-control">
        <span class="text-danger">@error('Full Name'){{ $message }}@enderror</span> 
    </div>

    <div class="mb-3">
        <label for="addr" class="form-label">Address</label>
        <input name='addr' type="text" placeholder="Mailing Address" class="form-control">
    </div>
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input name='email' type="email" class="form-control">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input name="pwd" type="password" class="form-control">
    </div>
<div class="mb-3">
    <input name='type' type="hidden" value="Customer">
</div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

   
