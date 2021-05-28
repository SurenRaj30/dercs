@extends('layouts.navReg')


@section('content')
<title>Staff Registration</title>
    <form action="{{URL::to('/saveStaff')}}" method="POST">
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input name='fullname' type="text" placeholder="Full Name" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name='email' type="text" placeholder="Email" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="pwd" class="form-label">Password</label>
            <input name='pwd' type="password" placeholder="Password" class="form-control">
        </div>
      
        <input name='type' type="hidden" value="Staff" class="forn-control">
       
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit" name="button" class="btn btn-primary">Submit</button>
</form>
@endsection

