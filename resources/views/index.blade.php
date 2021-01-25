<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="orange health, health in lagos, donate to orange health">
    <meta name="description" content="">
    <title>orange health</title>
    <link rel="shortcut icon" href="{{ asset('images/OREANGE HEALTH LOGO.jpg') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/templatemo_style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <!-- 
        Composite Template 
        http://www.templatemo.com/preview/templatemo_444_composite
        -->
    <script src="https://kit.fontawesome.com/6b6030dd17.js" crossorigin="anonymous"></script>
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse">
    <div id="app">
        <example-component></example-component>
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/smoothscroll.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.flexslider.js') }}"></script>

    <!-- start templatemo back to top js -->
    <!-- start templatemo back to top js -->
    <script>
        $(document).ready(function() {
            // FlexSlider 
            $('.flexslider').flexslider({
                animation: "fade",
                directionNav: false
            });

            // Show or hide the sticky footer button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('.go-top').fadeIn(200);
                } else {
                    $('.go-top').fadeOut(200);
                }
            });
            // Animate the scroll to top
            $('.go-top').click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 300);
            })
        });
    </script>
    <!-- end templatemo back to top js -->

    <style>
        #more {
            display: none;
        }
    </style>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>

</body>

</html>