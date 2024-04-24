<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Public</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php">Basic user</a>
      </li>
      <?php
        if (isset($UserPower)&& $UserPower == "1") {
            echo '<li class="nav-item">
        <a class="nav-link" href="consultant.php">Consultant</a>
      </li>';
        }else {
            echo '<li class="nav-item">
        <a class="nav-link disabled" href="consultant.php">Consultant</a>
      </li>';
        }
?>
      <?php
        if (isset($UserPower)&& $UserPower == '2') {
            echo '<li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>';
        }else {
            echo '<li class="nav-item">
        <a class="nav-link disabled" href="admin.php">Admin</a>
      </li>';
        }
?>
      
  </div>
</nav>
</body>
</html>
