<div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
    
            <form class="main-form" action="{{url('appointment')}}" method="POST">

            @csrf

                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="name" class="form-control" placeholder="Full name" required="">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" name="email" class="form-control" placeholder="Email address.." required="">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="date" name="date" class="form-control" required="">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="tutor" id="departement" class="custom-select">

                        <option>---Select Tutor---</option>

                            @foreach($tutor as $tutors)

                            <option value="{{$tutors->name}}">{{$tutors->name}} ---Teaches--> {{$tutors->lessons}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="time" name="time_from" class="form-control" required="">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="time" name="time_to" class="form-control" required="">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" name="phone" class="form-control" placeholder="Number.." required="">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="message" id="message" class="form-control" rows="6"
                            placeholder="Enter message.."></textarea>
                    </div>
                </div>
    
                <button type="submit" class="btn btn-secondary px-4 px-lg-5">Submit Request</button>
            </form>
        </div>
    </div>