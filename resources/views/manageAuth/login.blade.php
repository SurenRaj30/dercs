<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">DERCS</div>
                    
                </div>     
                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        
                    <form id="loginform" class="form-horizontal" role="form" action="{{URL::to('/loginValid')}}" method="POST">
                                
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" type="text" class="form-control" name="email" placeholder="Email address">
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>                                        
                                </div>
                            
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="pwd" placeholder="password">
                                    <span class="text-danger">@error('pwd'){{ $message }}@enderror</span>
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="text" class="form-control" name="type" placeholder="User type">
                                    <span class="text-danger">@error('type'){{ $message }}@enderror</span>
                                </div>
                            
                    
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                 <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account! 
                                    
                                        <a href="{{URL::to('/registerCust')}}">Sign Up</a>
                                        <a href="{{URL::to('/registerRun')}}">Register as Runner</a>

                                    
                                    </div>
                                </div>
                            </div>    
                        </form>     



                    </div>                     
                </div>  
    </div>
</div>
</body>
</html>

    
    




   