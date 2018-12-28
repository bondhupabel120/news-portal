@extends('front.master')

@section('title')
    Contact
@endsection

@section('body')
    <link rel="icon" type="image/png" href="{{ asset('/') }}front/contact/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/contact/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/contact/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/contact/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/contact/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/contact/css/main.css">

    <h5 class="text-center text-success pb-2">{{ Session::get('message') }}</h5>
    <div class="bg-contact100" style="background-image: url('{{ asset('/') }}front/contact/images/bg-01.jpg');">
        <div class="container-contact100">
            <div class="wrap-contact100">
                <div class="contact100-pic js-tilt" data-tilt>
                    <img src="{{ asset('/') }}front/contact/images/img-01.png" alt="IMG">
                </div>
                    <form class="contact100-form validate-form" action="{{ route('new-contact') }}" method="POST">
                    @csrf
					<span class="contact100-form-title text-center">
						Send your opinion
                        <hr/>
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Name is required">
                        <input class="input100" type="text" name="name" placeholder="Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <textarea class="input100" name="message" placeholder="Message"></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card bg-white">
            <h3 class="text-success text-center card-header font-weight-bold">Our location</h3>
        </div>

        <div style="height: 400px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3162.754924429142!2d90.3620978379911!3d23.7554977679554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbus+stnad+Mohammadpur%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1540438280740" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <script src="{{ asset('/') }}front/contact/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('/') }}front/contact/vendor/bootstrap/js/popper.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('/') }}front/contact/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('/') }}front/contact/vendor/tilt/tilt.jquery.min.js"></script>


    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('/') }}front/contact/js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
@endsection