<?php include 'database.php'; ?>

<?php
    if(isset($_POST['name']) && isset($_POST['message'])) {
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $message = mysqli_real_escape_string($con, $_POST['message']);
      $date = mysqli_real_escape_string($con, $_POST['date']);

      //setting the Timezone
      date_default_timezone_set('America/New_York');
      $date = date('h:i:s a',time());

      $query = "INSERT INTO shouts (name, shout, date)
      VALUES ('$name', '$message', '$date')";

      if (!mysqli_query($con, $query)) {
          echo 'Error: '.mysqli_error($con);
      } else {
          echo '<li>'.$name.': '.$message.' ['.$date.']</li>';
      }
    }
