@extends('layouts.app-logreg')

@section('content')
				<!-- Register Box -->
				<div class="col-md-6 col-md-offset-3 col-sm-offset-3">
					<form class="signup-page" role="form" method="POST" action="{{ url('/register') }}">
						{{ csrf_field() }}
						<div class="signup-header">
							<h2>Register a new account</h2>
							<p>Already a member? Click <a href="{{ url('/admin/login')}}">HERE</a> to login to your account.</p>
						</div>
						<label>Name</label>
						<input class="form-control margin-bottom-20" type="text" name="name">
						
						<label>Username</label>
						<input class="form-control margin-bottom-20" type="text" name="username">

						<label>Jabatan</label>
						<select name="jabatan" class="form-control margin-bottom-20">
							<option value="ADMIN">ADMIN</option>
							<option value="USER">USER</option>
						</select>
						
						<label>Email Address <span class="color-red">*</span></label>
						<input class="form-control margin-bottom-20" type="text" name="email">
						<div class="row">
							<div class="col-sm-6">
								<label>Password <span class="color-red">*</span></label>
								<input class="form-control margin-bottom-20" type="password" name="password">
							</div>
							<div class="col-sm-6">
								<label>Confirm Password <span class="color-red">*</span></label>
								<input class="form-control margin-bottom-20" type="password" name="password_confirmation">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-lg-8">
								<label class="checkbox">
									<input type="checkbox">
									I read the <a href="#">Terms and Conditions</a>
								</label>
							</div>
							<div class="col-lg-4 text-right">
								<button class="btn btn-primary" type="submit">Register</button>
							</div>
						</div>
					</form>
				</div>
				<!-- End Register Box -->
@endsection			