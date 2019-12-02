<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Logic - Мы способствуем эволюции ИТ - инфраструктуры организации</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    @push('styles')
        <style>
            .translateY-1 a:hover{
                text-decoration: none;
            }
            .pointer:hover,.pointer:focus{
                cursor: pointer;
                opacity: 0.9;
                outline: none;
                -webkit-box-shadow: 2px 13px 26px -5px rgba(0,0,0,0.75);
                -moz-box-shadow: 2px 13px 26px -5px rgba(0,0,0,0.75);
                box-shadow: 2px 13px 26px -5px rgba(0,0,0,0.75);
            }
            .translateY-1,.translateX-1{
                transition:0.3s;
            }
            .translateY-1:hover,.translateY-1:focus {
                -webkit-transition: transform 0.3s;
                transform: translateY(-0.25em)!important;
            }
            .translateX-1:hover,.translateX-1:focus {
                -webkit-transition: transform 0.3s;
                transform: translateX(0.25em)!important;
            }
            #preloader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background-image: url({{asset('images/10.gif')}});
                background-repeat: no-repeat;
                background-color: #FFF;
                background-position: center;
            }
        </style>
    @endpush
    @stack('styles')
</head>
<body>
<div id="preloader"></div>
@include('partials.header')
@yield('content')
@include('partials.footer')


<script src="{{ asset('js/app.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script>
    AOS.init();
</script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();

            if (scrollTop >= 50) {
                $('.menuse').addClass('solid-nav');
                $('.menuse').addClass('shadow');
                $('.modal-button').addClass('modal-border');
                $('.icos').addClass('icos-done');
            } else {
                $('.menuse').removeClass('solid-nav');
                $('.menuse').removeClass('shadow');
                $('.modal-button').removeClass('modal-border');
                $('.icos').addClass('icos-done');

            }

        });
    });
</script>
<script>
    $(window).on('load', function() {
        $("#preloader").delay(300).fadeOut(100);
    });
</script>
<script>
    $('#ajax-message2').click(e => {
        e.preventDefault();
        let name = $('#form-name2');
        let email = $('#form-email2');
        let phone = $('#form-phone2');
        let company = $('#form-company2');
        let message = $('#form-message2');
        let datas = [name.val(),email.val(),phone.val(),message.val()];

        if()
        $(".send-success-mail2").removeClass('d-none');

        $.ajax({
            url: '{{ route('mail') }}',
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "name": name.val(),
                "phone": phone.val(),
                "email": email.val(),
                "message": message.val(),
                "company":company.val(),
            },
            success: data => {
                $('#form-name2').val('');
                $('#form-phone2').val('');
                $('#form-email2').val('');
                $('#form-message2').val('');
                $(".send-success-mail2").removeClass('d-none');
            },
            error: () => {
            }
        });
    })
</script>
<script>
    $(document).ready(function(){
        $("#menu").on("click",".links", function (event) {
            event.preventDefault();
            if (document.location.pathname.length > 1) {
                window.location.replace("/");
            }
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1500);
        });
    });
</script>
<script>
    var canvas = document.getElementById("canvas");
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    var ctx = canvas.getContext("2d");
    ctx.globalCompositeOperation = "lighter";

    var requestAnimationFrame =
        window.requestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.msRequestAnimationFrame;

    var points = [];
    var numPoints = 400;
    var distToTravel = 35;
    var distortionLevel = 20;

    function Draw() {
        ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);
        ctx.beginPath();

        for (var x = 0; x < points.length; x++) {
            if (points[x].life > 0) {
                points[x].Dying();
            } else {
                points.splice(x, 1);
                points.unshift(new Point());
            }

            points[x].UpdatePath();
            points[x].Move();

            ctx.moveTo(points[x].x, points[x].y);
            var rando = GetRandom(0, distortionLevel);
            for (var y = 0; y < points[x].path.length; y++) {
                ctx.lineTo(
                    points[x].path[y].x + GetRandom(-rando, rando),
                    points[x].path[y].y + GetRandom(-rando, rando)
                );
            }
        }
        ctx.strokeStyle = "rgba(22, 155, 115, 0.1)";
        ctx.stroke();

        requestAnimationFrame(Draw);
    }

    function Point() {
        this.x = window.innerWidth / 1.8;
        this.y = window.innerHeight / 1.8;
        this.direction = GetRandom(1, 5);
        this.distanceMoved = 0;
        this.life = GetRandom(1, 30);
        this.speed = 10;
        this.path = [];
        this.maxPath = 45;
    }

    Point.prototype.Dying = function() {
        this.life -= 0.01;
    };

    Point.prototype.Move = function() {
        this.distanceMoved += this.speed;

        switch (this.direction) {
            case 1:
                //moving up
                this.y -= this.speed;
                break;
            case 2:
                //moving right
                this.x += this.speed;
                break;
            case 3:
                //moving down
                this.y += this.speed;
                break;
            case 4:
                //moving left
                this.x -= this.speed;
                break;
        }

        if (this.distanceMoved > distToTravel) {
            this.direction = GetRandom(1, 5);
            this.distanceMoved = 0;
        }
    };

    Point.prototype.UpdatePath = function() {
        if (this.path.length > this.maxPath) {
            this.path.splice(this.path.length - 1, 1);
            this.path.unshift({
                x: this.x,
                y: this.y
            });
        } else {
            this.path.unshift({
                x: this.x,
                y: this.y
            });
        }
    };

    function GetPoints() {
        for (var x = 0; x < numPoints; x++) {
            points.push(new Point());
        }
    }

    function GetRandom(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }

    GetPoints();
    Draw();

</script>
@stack('script')
</body>
</html>