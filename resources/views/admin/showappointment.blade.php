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

            <h1>All Appointments</h1><br>

            <div style="padding-bottom: 30px;">

            <form action="{{url('searchAppointments')}}" method="get">

            @csrf

                <input type="text" style="color:black;" name="search" placeholder="Search For Appointments">
            
                <input type="submit" name="Search" class="btn btn-outline-primary">

            </form>

            </div>

                <table>

                    <tr style="background-color:black;">
                        <th style="padding:20px">Student name</th>
                        <th style="padding:20px">Student Email</th>
                        <th style="padding:20px">Student Phone</th>
                        <th style="padding:20px">Tutor Name</th>
                        <th style="padding:20px">Date</th>
                        <th style="padding:20px">Time_From</th>
                        <th style="padding:20px">Time_To</th>
                        <th style="padding:20px">Message</th>
                        <th style="padding:20px">Status</th>

                        <th style="padding:20px">Send Mail</th>
                        <th style="padding:20px">Approved</th>
                        <th style="padding:20px">Canceled</th>
                    </tr>

                    @forelse($data as $appoint)

                    <tr align="center" style="background-color:gray;">
                        <td style="padding:20px">{{$appoint->name}}</td>
                        <td style="padding:20px">{{$appoint->email}}</td>
                        <td style="padding:20px">{{$appoint->phone}}</td>
                        <td style="padding:20px">{{$appoint->tutor}}</td>
                        <td style="padding:20px">{{$appoint->date}}</td>
                        <td style="padding:20px">{{$appoint->time_from}}</td>
                        <td style="padding:20px">{{$appoint->time_to}}</td>
                        <td style="padding:20px">{{$appoint->message}}</td>
                        <td style="padding:20px">{{$appoint->status}}</td>

                        <td>
                            <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>
                        </td>

                        @if ($appoint->status != "Canceled" && $appoint->status != "Approved")

                        <td>
                            <a onclick="return confirm('Are you sure to approve this?')" class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure to cancel this?')" class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a>
                        </td>

                        @endif

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