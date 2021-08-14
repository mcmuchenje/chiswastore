@extends('store/layout')

@section('content')

<section>
    <div class="container">
    	<div class="row">
        	<div class="col-md-6 mb-4 mb-md-0">
            	<div class="heading_s2">
                	<h3>Login</h3>
                </div>
            	<form method="post" class="login_form ">
                    <div class="form-group">
                        <label>Username or email <span class="required">*</span></label>
                        <input type="text" required="" class="form-control" name="username" value="">
                    </div>
                    <div class="form-group">
                        <label>Password <span class="required">*</span></label>
                        <input class="form-control" required="" type="password" name="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default" name="login" value="Log in">Log in</button>
                    </div>
                    <div class="login_footer">
                        <a href="#">Lost your password?</a>
                        <label>
                            <input name="rememberme" type="checkbox" value="forever"> <span>Remember me</span>
                        </label>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
            	<div class="heading_s2">
                	<h3>Register</h3>
                </div>
            	<form method="post" class="login_form ">
                    <div class="form-group">
                        <label>Email address <span class="required">*</span></label>
                        <input type="text" required="" class="form-control" name="username" value="">
                    </div>
                    <div class="form-group">
                        <label>Password <span class="required">*</span></label>
                        <input class="form-control" required="" type="password" name="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default" name="login" value="Register">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection