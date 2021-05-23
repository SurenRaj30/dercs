
@extends('layouts.nav')


@section('content')
<title>Runner Registration</title>
    <form action="{{URL::to('/saveRunner')}}" method="POST">
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
       
        <div class="mb-3">
           <label for="age" class="form-label">Age 18 or above</label><br>
           <input type="radio"  name="age" value="Yes" class="form-check-input">
           <label for="age" class="form-label">Yes</label>
           <input type="radio"  name="age" value="No" class="form-check-input">
           <label for="age" class="form-label">No</label>
        </div>
    
        <div class="mb-3">
            <label for="lang" class="form-label">Languange</label><br>
            <input type="radio" name="lang" value="Malay" class="form-check-input">
            <label for="lang" class="form-label">Malay</label>
            <input type="radio" name="lang" value="English" class="form-check-input">
            <label for="lang" class="form-label">English</label>
           
        </div>
       
        <div class="mb-3">
            <label for="citizen" class="form-label">Citizen</label><br>
            <input type="radio" name="citizen" value="Malaysian" class="form-check-input">
            <label for="citizen" class="form-label">Yes</label>
            <input type="radio" name="citizen" value="Non-Malaysian" class="form-check-input">
            <label for="citizen" class="form-label">No</label>
        </div>
        
        <div class="mb-3">
            <label for="license" class="form-label">License</label><br>
            <input type="radio" name="license" value="Yes" class="form-check-input">
            <label for="license" class="form-label">Yes</label>
            <input type="radio" name="license" value="No" class="form-check-input">
            <label for="license" class="form-label">No</label>
        </div>
    
        <div class="mb-3">
            <label for="agree" class="form-label">Agreement</label><br>        
            <input type="radio" name="agree" value="Yes" class="form-check-input">
            <label for="agree" class="form-label">Agree</label>
        </div>
        

        <input name='type' type="hidden" value="Runner">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit" name="button" class="btn btn-primary">Submit</button>
</form>
    
@endsection
