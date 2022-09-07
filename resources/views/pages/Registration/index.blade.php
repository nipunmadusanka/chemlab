@extends('layouts.app')

@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Add New User</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href={{ route('homePage') }}><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Add New User</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<div class="auth-wrapper">
	<div class="auth-content text-center">
		{{-- <img src="assets/images/logo.png" alt="" class="img-fluid mb-4"> --}}
		<div class="card borderless">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="f-w-400">Add New User</h4>
						<hr>
						<form action="{{ route('user_registration') }}" method="post">
							@csrf
						<div class="form-group mb-3">
							<input type="text" class="form-control" name="name" id="Username" placeholder="Username">
							{{-- @if($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
					@endif --}}
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control" name="email" id="Email" placeholder="Email address">
							{{-- @if($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif --}}
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" name="password" id="Password" placeholder="Password">
							{{-- @if($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif --}}
						</div>
						<hr>
						<button class="btn btn-primary btn-block mb-4">Create New Users</button>
						{{-- <button type="submit" class="btn btn-primary">Register</button> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

@endsection