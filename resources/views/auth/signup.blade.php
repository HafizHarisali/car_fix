<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('backend.includes.style')

</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Registration</h3>
				<p>This is the best app ever!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <div class="garage">
                            <form action="{{ route('signup_user') }}" id="loginForm" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>First Name</label>
                                        <input class="form-control" name="firstname">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Last Name</label>
                                        <input class="form-control" name="lastname">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Phone</label>
                                        <input class="form-control" name="phone">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Address</label>
                                        <input class="form-control" name="address">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>City/Town</label>
                                        <input class="form-control" name="city">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Postal Code</label>
                                        <input class="form-control" name="postcode">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Registered As:</label><br/>
                                        <div class="i-checks pull-left">
                                             <label>
                                                <input type="radio" value="2" name="usertypeid"> <i></i> Customer
                                            </label>
                                        </div>
                                        <div class="i-checks pull-right">
                                             <label>
                                                <input type="radio" value="3" name="usertypeid"> <i></i> Garage
                                            </label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Register" class="btn btn-success loginbtn"/>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('login') }}" style="padding: 10px;">Already Registered?</a> 
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
			</div>
			
		</div>   
    </div>

    @include('backend.includes.script')
</body>

</html>