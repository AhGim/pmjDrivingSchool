<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style type="text/css">
        
        label 
        {
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

            <div class="container" align="center" style="padding-top: 100px;">

            @if(session()->has('message'))

            <div class="alert alert-success">
            
                <button type="button" class="close" data-bs-dismiss="alert">
                    X
                </button>
            
                {{session()->get('message')}}
            
            </div>

            @endif

                <form action="{{url('sendemail',$data->id)}}" method="POST">

                @csrf

                    <div style="padding:15px;">
                        <label>Sender</label>
                        <input type="text" size="25" style="color:black;" name="greeting" placeholder="From PMJ" required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Contents</label>
                        <input type="text" size="25" style="color:black;" name="body" placeholder="Your appointment is approved" required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Action Text</label>
                        <input type="text" size="25" style="color:black;" name="actiontext" placeholder="Checkout our website" required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Action Url</label>
                        <input type="text" size="25" style="color:black;" name="actionurl" placeholder="https://pmjdriving.com.my/" required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Ending</label>
                        <input type="text" size="25" style="color:black;" name="endpart" placeholder="Rmb to wear smart, goodluck" required="">
                    </div>

                    <div style="padding:15px;">           
                        <input type="submit" class="btn btn-success">
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