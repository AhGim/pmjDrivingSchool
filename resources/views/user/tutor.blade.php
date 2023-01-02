<!-- Team Start -->
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
                <h1 class="display-4">Meet Our Instructors</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">

            @foreach($tutor as $tutors)

                <div class="team-item">
                    <a href="https://www.youtube.com/"><img style="height: 350px !important"  src="tutorimage/{{$tutors->image}}" alt=""></a>
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">{{$tutors->name}}</h5>
                        <p class="mb-2">{{$tutors->lessons}}</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
            @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->