<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/asset/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/asset/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/asset/css/iofrm-theme4.css">
</head>
<body>
<div class="form-body">
    <!--<div class="website-logo">-->
    <!--<a href="index.html">-->
    <!--<div class="logo">-->
    <!--<img class="logo-size" src="images/logo.png" alt="">-->
    <!--</div>-->
    <!--</a>-->
    <!--</div>-->
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <img src="{{ asset('/') }}front/asset/images/graphic1.svg" alt="">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Congratulation {{ $first_name.' '.$last_name }}</h3>
                    <hr/>
                    <h5>Welcome to our <span class="text-success">newsportal</span></h5>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias, earum error ipsa numquam placeat quos ratione vitae! Ab aspernatur inventore iusto placeat ullam. Odio perspiciatis quam quisquam tempore vel!</p>

                    <h5>107, Katasur, Mohammadpur, Dhaka-1207</h5>
                    <h5>Phone : 01621355849</h5>
                    <h5>Email : bondhupabel@gmail.com</h5>
                    <div class="other-links">
                        <a href="https://www.facebook.com/">Facebook</a>
                        <a href="https://www.google.com/">Google</a>
                        <a href="https://bd.linkedin.com/">Linkedin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}front/asset/js/jquery.min.js"></script>
<script src="{{ asset('/') }}front/asset/js/popper.min.js"></script>
<script src="{{ asset('/') }}front/bootstrap.min.js"></script>
<script src="{{ asset('/') }}front/asset/js/main.js"></script>
</body>
</html>