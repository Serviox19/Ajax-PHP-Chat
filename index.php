<?php include 'database.php'; ?>
<?php
    //Query database for all chats!
    $query = "SELECT * FROM shouts ORDER BY id DESC";
    $chats = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajax Chat</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>

    <div class="container">
      <header>
        <h1>Chat Box</h1>
      </header>
      <div id="chats">
        <ul>
          <?php while ($row = mysqli_fetch_assoc($chats)) : ?>
            <li><span id="chatName"><?php echo $row['name'] ?></span><span id="chatDate">(<?php echo $row['date']; ?>):</span> <span id="chatMessage"><?php echo $row['shout']; ?></span></li>
          <?php endwhile; ?>
        </ul>
      </div>
      <div id="newChat">
        <form class="form-inline">
          <div class="form-group">
            <label>Name: </label>
            <input type="text" class="form-control" placeholder="Your Name" id="name">
          </div>
          <div class="form-group">
            <label>Message Text: </label>
            <input type="text" class="form-control" placeholder="Type Message" id="message">
          </div>
          <input type="submit" class="btn btn-primary" id="submit" value="Chat">
        </form>
      </div>
    </div>

  </body>
</html>
