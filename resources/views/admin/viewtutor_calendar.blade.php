<?php 
// Include configuration file 
include_once 'C:\Users\User\pmjDrivingSchool\resources\views\admin\config.php'; 

$postData = ''; 
if(!empty($_SESSION['postData'])){ 
    $postData = $_SESSION['postData']; 
    unset($_SESSION['postData']); 
} 
 
$status = $statusMsg = ''; 
if(!empty($_SESSION['status_response'])){ 
    $status_response = $_SESSION['status_response']; 
    $status = $status_response['status']; 
    $statusMsg = $status_response['status_msg']; 
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  @include('admin.css')

  <style type="text/css">
        
        label 
        {
            display: inline-block;
            width: 120px;
        }
    </style>

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->

    @include('admin.sidebar')

    <!-- partial -->

    @include('admin.navbar')

    <!-- partial -->

    <!-- Status message -->
    <?php if(!empty($statusMsg)){ ?>
    <div class="alert alert-<?php echo $status; ?>">
      <?php echo $statusMsg; ?>
    </div>
    <?php } ?>

    <div class="container-fluid page-body-wrapper">

      <div class="container" align="center" style="padding-top: 100px;">

        <form method="post" action="{{url('addEvent')}}">
        @csrf
          <div style="padding:15px;">
            <label>Event Title</label>
            <input type="text" style="color:black;" name="title"
              value="<?php echo !empty($postData['title'])?$postData['title']:''; ?>" required="">
          </div>
          <div style="padding:15px;">
            <label>Event Description</label>
            <textarea name="description"
              style="color:black;"><?php echo !empty($postData['description'])?$postData['description']:''; ?></textarea>
          </div>
          <div style="padding:15px;">
            <label>Location</label>
            <input type="text" name="location" style="color:black;"
              value="<?php echo !empty($postData['location'])?$postData['location']:''; ?>">
          </div>
          <div style="padding:15px;">
            <label>Date</label>
            <input type="date" name="date" style="color:black;"
              value="<?php echo !empty($postData['date'])?$postData['date']:''; ?>" required="">
          </div>
          <div class="form-group time">
            <label>Time</label>
            <input type="time" name="time_from" style="color:black;"
              value="<?php echo !empty($postData['time_from'])?$postData['time_from']:''; ?>">
            <span>TO</span>
            <input type="time" name="time_to" style="color:black;"
              value="<?php echo !empty($postData['time_to'])?$postData['time_to']:''; ?>">
          </div>
          <div style="padding:15px;">
            <input type="submit" class="form-control btn-primary" name="submit" value="Add Event" />
          </div>
        </form>

      </div>
    </div>
    </div>



  </div>

</html>