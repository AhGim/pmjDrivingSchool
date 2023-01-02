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
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
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
                <h1 class="m-0 text-uppercase text-primary"><img src="../assets/img/pmjLogo.jpg" style="width:100px;height:100px;">PMJ Driving School</h1>
            </a>

            @if(Route::has('login'))
                
                @auth

                <x-app-layout>   
                </x-app-layout>

                <a href="{{url('myappointment')}}" style="background-color:crimson;" class="btn btn-primary py-2 px-4 d-none d-lg-block ml-lg-3">My Appointment</a>

                <a href="{{url('chatify')}}" style="background-color:#3cb371;" class="btn btn-primary py-2 px-1 d-none d-lg-block ml-lg-3">Chat with Admin</a>
                
                @else
                
                <a href="{{route('login')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block ml-lg-3">Login</a>
                <a href="{{route('register')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block ml-lg-3">Register</a>
                
                @endauth
                
            @endif

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="course.html" class="nav-item nav-link">Courses</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="detail.html" class="dropdown-item">Course Detail</a>
                            <a href="feature.html" class="dropdown-item">Our Features</a>
                            <a href="team.html" class="dropdown-item">Instructors</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                   
                </div>

                

            </div>
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

<div align="center" style="padding:70px;">

    <table>

        <tr style="background-color:black;">
            <th style="padding:20px; font-size:25px; color:white;">Tutor Name</th>
            <th style="padding:20px; font-size:25px; color:white;">Date</th>
            <th style="padding:20px; font-size:25px; color:white;">Time_From</th>
            <th style="padding:20px; font-size:25px; color:white;">Time_To</th>
            <th style="padding:20px; font-size:25px; color:white;">Message</th>
            <th style="padding:20px; font-size:25px; color:white;">Status</th>

            <th style="padding:20px; font-size:25px; color:white;">Cancel Appointment</th>
        </tr>

        @foreach($appoint as $appoints)

        <tr style="background-color:grey;" align="center">
            <td style="padding:20px; color:white;">{{$appoints->tutor}}</td>
            <td style="padding:20px; color:white;">{{$appoints->date}}</td>
            <td style="padding:20px; color:white;">{{$appoints->time_from}}</td>
            <td style="padding:20px; color:white;">{{$appoints->time_to}}</td>
            <td style="padding:20px; color:white;">{{$appoints->message}}</td>
            <td style="padding:20px; color:white;">{{$appoints->status}}</td>

            @if ($appoints->status != "Canceled" && $appoints->status != "Approved")

            <td><a class="btn btn-danger" onclick="return confirm('Are you sure to cancel this appointment?')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>

            @endif

        </tr>

        @endforeach

    </table>

</div>

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