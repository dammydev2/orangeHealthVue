<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>orange health payment</title>
    <link rel="shortcut icon" href="{{ asset('images/OREANGE HEALTH LOGO.jpg') }}" />
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- //Meta tags -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css" media="all" /><!-- Style-CSS -->
    <link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet"><!-- font-awesome-icons -->
</head>

<body>
    <section class="w3l-form-36">
        <div class="form-36-mian section-gap">
            <div class="wrapper">
                <div class="form-inner-cont">
                    <h3>Continue to pay</h3>


                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        <div class="row" style="margin-bottom:40px;">
                            <div class="col-md-8 col-md-offset-2">
                                <p>&nbsp;</p>
                                <p>
                                <div>
                                    <h2>Donate:
                                        ₦ {{ number_format($data->amount, 2) }}</h2>
                                </div>
                                </p>
                                <input type="hidden" name="email" value="{{ $data->email }}"> {{-- required --}}
                                <input type="hidden" name="orderID" value="345">
                                <input type="hidden" name="amount" value="{{ $data->amount * 100 }}"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="currency" value="NGN">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['email' => $data->email, 'orange_ref' => $data->orange_ref ]) }}"> {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                <p>
                                    <button class="btn btn-success btn-lg btn-block btn theme-button" type="submit" value="Pay Now!">
                                        <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                    </button>
                                </p>
                            </div>
                        </div>
                    </form>



                    <!-- <form action="#" method="post" class="signin-form">
						<div class="form-input">
							<span class="fa fa-user-o" aria-hidden="true"></span> <input type="text" name="email" placeholder="Username" required />
						</div>
						<div class="form-input">
							<span class="fa fa-envelope-o" aria-hidden="true"></span> <input type="email" name="email" placeholder="Email" required />
						</div>
						<div class="form-input">
							<span class="fa fa-key" aria-hidden="true"></span><input type="password" name="password" placeholder="Password"
								required />
						</div>
						<div class="form-input">
							<span class="fa fa-key" aria-hidden="true"></span> <input type="password" name="password" placeholder="Confirm Password"
								required />
						</div>
						
						<div class="login-remember d-grid">
							<label class="check-remaind">
								<input type="checkbox">
								<span class="checkmark"></span>
								<p class="remember">Remember me</p>
							</label>
							<button class="btn theme-button">Signup</button>
						</div>
					</form> -->
                    <div class="social-icons">
                        <!-- <p class="continue"><span>Or</span></p>
						<div class="social-login">
						<a href="#facebook">
							<div class="facebook">
								<span class="fa fa-facebook" aria-hidden="true"></span>
								
							</div>
						</a>
						<a href="#google">
							<div class="google">
								<span class="fa fa-google-plus" aria-hidden="true"></span>
							</div>
						</a> -->
                    </div>
                </div>
                <!-- <p class="signup">Already a member? <a href="login.html" class="signuplink">Login</a></p> -->
            </div>
        </div>
        </div>
    </section>
    <style>
        button {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</body>

</html>