@extends('layouts.app-logreg')

@section('content')
					<!-- Login Box -->
					<div class="col-md-6 col-md-offset-3 col-sm-offset-3">
						<form class="login-page" role="form" method="POST" action="{{ url('/login') }}">
							{{ csrf_field() }}
							<div class="login-header margin-bottom-30">
								<h2>Admin Login</h2>
							</div>
							<div class="input-group margin-bottom-20 ">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input placeholder="Username" class="form-control" type="text" name="username"  required autofocus>
								
							</div>
							<div class="input-group margin-bottom-20 ">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input placeholder="Password" class="form-control" type="password" name="password" required>
								
							</div>
							<div class="row">
								<div class="col-md-6">
									<label class="checkbox"><input type="checkbox"> Stay signed in</label>
								</div>
								<div class="col-md-6">
									<button class="btn btn-primary pull-right" type="submit">Login</button>
								</div>
							</div>
							<hr>
							<h4>Forget your Password ?</h4>

							<p><a href="{{ url('/password/reset') }}">Click here</a> to reset your password.</p>
                            <p>(c) Copyright 2016</p>
							<!--<p><a href="{{ url('/register') }}">Click here</a> to register as admin.</p>-->


						</form>
					</div>
					<!-- End Login Box -->
@endsection			