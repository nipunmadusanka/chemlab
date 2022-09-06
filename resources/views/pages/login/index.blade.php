<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register New User</title>

    @include('libraries.styles')
</head>
<body>


@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif
	{{-- <div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<hr>
						<form action="{{ route('validate_login') }}" method="post">
							@csrf
						<div class="form-group mb-3">
							<input type="text" name="email" class="form-control" id="email" placeholder="Email address">
							@if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
							@if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
						</div>
						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Save credentials.</label>
						</div>
						<button type="submit" class="btn btn-block btn-primary mb-4">Signin</button>
						<hr>
						<p class="mb-2 text-muted">Forgot password? <a href="#" class="f-w-400">Reset</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> --}}


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <?php
                        $message = Session::get('message');
                        if ($message){
                        ?>
                        <div style="margin: 0 10px;">
                            <div class="alert alert-danger alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Error! </strong><?php echo $message; ?>
                            </div>
                        </div>
                        <?php
                        Session::put('message', null);
                        }
                        ?>
                        <h3 class="panel-title">Login Credentials</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="{{ route('validate_login') }}">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus
                                           required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password"
                                           value="" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
    
                                <button type="submit" class="btn btn-lg btn-success btn-block">
                                    {{__('Login')}}
                                </button>
                                <a class="btn btn-link" href="">
                                    {{__('Forgot Your Password?')}}
                                </a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('libraries.scripts')
</body>
</html>