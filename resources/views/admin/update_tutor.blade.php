

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style type="text/css">

        label {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
    @include('admin.sidebar')

      <!-- partial -->
      
    @include('admin.navbar')

        <!-- partial -->
<div class="container-fluid page-body-wrapper">

    <div class="container" align="center" style="padding:150px">

    @if(session()->has('message'))

    <div class="alert alert-success">

        <button type="button" class="close" data-bs-dismiss="alert">
            X
        </button>

        {{session()->get('message')}}

    </div>

    @endif

        <form action="{{url('edittutor',$data->id)}}" method="POST" enctype="multipart/form-data">

        @csrf

            <div style="padding:15px;">
                <label>Tutor Name</label>
                <input type="text" style="color:black;" name="name" value="{{$data->name}}">
            </div>

            <div style="padding:15px;">
                <label>Phone</label>
                <input type="number" style="color:black;" name="phone" value="{{$data->phone}}">
            </div>

            <div style="padding:15px;">
                <label>Lessons</label>
                <select name="lessons" style="color: black; width: 200px;" required="">
                
                    <option>--Select--</option>
                    <option value="B (motocycle)">B (motocycle)</option>
                    <option value="D (Manual)">D (Manual)</option>
                    <option value="DA (Automatic)">DA (Automatic)</option>
                    <option value="PSV (Bas Mini/Van/Taxi/E-Hailing)">PSV (Bas Mini/Van/Taxi/E-Hailing)</option>
                    <option value="B,D">B,D</option>
                    <option value="B,DA">B,DA</option>
                    <option value="B,D,DA">B,D,DA</option>
                    <option value="D,DA">D,DA</option>
                    <option value="D,DA,PSV">D,DA,PSV</option>
                    <option value="All lessons">All lessons</option>

                </select>
            </div>

            <div style="padding:15px;">
                <label>Tutor Old Image</label>
                <img height="500" width="500" src="tutorimage/{{$data->image}}">
            </div>

            <div style="padding:15px;">
                <label>Change Image</label>
                <input type="file" name="file">

            </div>

            <div style="padding:15px;">
                <input type="submit" class="btn btn-primary">

            </div>

        </form>

    </div>

</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>