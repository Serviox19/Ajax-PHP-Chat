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
          <li><?php echo $row['name']; ?>: <?php echo $row['$chat']; ?> [<?php echo $row['date']; ?>]</li>
        <?php endwhile; ?>
        </ul>
      </div>
      <div id="newChat">
        <form>
          <label>Name: </label>
          <input type="text" id="name">
          <label>Message Text: </label>
          <input type="text" id="message">
          <input type="submit" id="submit" value="Chat">
        </form>
      </div>
    </div>

  </body>
</html>
