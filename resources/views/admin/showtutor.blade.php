

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

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
        
            <div align="center" style="padding-top:50px">

              <h1>All Tutors</h1><br>

              <div style="padding-bottom: 30px;">

            <form action="{{url('searchTutors')}}" method="get">

              @csrf
              
                <input type="text" style="color:black;" name="search" placeholder="Search For Tutors">
            
              <input type="submit" name="Search" class="btn btn-outline-primary">
              
              </form>
              
              </div>

                <table>
        
                    <tr style="background-color:black;">
                        <th style="padding:20px">Tutor name</th>
                        <th style="padding:20px">Phone</th>
                        <th style="padding:20px">Teachable Lessons</th>
                        <th style="padding:20px">Image</th>
        
                        <th style="padding:20px">Delete</th>
                        <th style="padding:20px">Update</th>
                    </tr>

                    @forelse($data as $tutor)

                    <tr align="center" style="background-color:gray;">
                        <td>{{$tutor->name}}</td>
                        <td>{{$tutor->phone}}</td>
                        <td>{{$tutor->lessons}}</td>
                        <td><img height="150" width="150" src="tutorimage/{{$tutor->image}}"></td>

                        <td><a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletetutor',$tutor->id)}}">Delete</a></td>
                        <td><a class="btn btn-primary" href="{{url('updatetutor',$tutor->id)}}">Update</a></td>
                    </tr>

                    @empty

                        <tr align="center" style="background-color:gray;">

                            <td colspan="16">
                                No Data Found
                            </td>

                        </tr>

                    @endforelse
        
                </table>
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>