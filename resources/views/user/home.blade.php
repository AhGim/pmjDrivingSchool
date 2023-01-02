<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PMJ - Everyone Can Drive</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Icon logo -->
    <link rel="icon" href="https://pmjdriving.com.my/static/media/pmj.3c2bef5c.png" type="image/x-icon">

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>088 455 808</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>pmjDrivingSchool@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    
    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="home" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><img src="../assets/img/pmjLogo.jpg" style="width:100px;height:100px;">
                PMJ Driving Institution</h1>
            </a>

            @if(Route::has('login'))
                
                @auth
                 
                <x-app-layout>   
                </x-app-layout>

                <a href="{{url('myappointment')}}" style="background-color:crimson;" class="btn btn-primary py-2 px-4 d-none d-lg-block ml-lg-3">My Appointment</a>
                <a href="{{url('chatify')}}" onclick="return confirm('Type --admin-- in the search box area to chat with admin')" style="background-color:#3cb371;" class="btn btn-primary py-2 px-1 d-none d-lg-block ml-lg-3">Chat with Admin</a>
                
                @else
                
                <a href="{{route('login')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block ml-lg-3">Login</a>
                <a href="{{route('register')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block ml-lg-3">Register</a>
                
                @endauth
                
            @endif

        </nav>
    </div>
    <!-- Navbar End -->

    @if(session()->has('message'))

        <div class="alert alert-success">

            <button type="button" class="close" data-bs-dismiss="alert">
                X
            </button>

            {{session()->get('message')}}

        </div>

    @endif

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">Everyone Can Drive</h1>
            <h1 class="text-white display-1 mb-5">Welcome to Pusat Memandu Jesselton</h1>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">  
            </div>
        </div>
    </div>
    <!-- Header End -->

    @include('user.appointment')

    @include('user.tutor')
    
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">PMJ</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white" href="https://htmlcodex.com">Lim Jing Ming</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/counterup/counterup.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>