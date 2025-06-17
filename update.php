<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Update</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #eaf6ff,#ffeaf6,#f6ffea);
    }
    .custom-shadow {
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
    }
    .custom-bg {
      background-color: #fffbe6;
    }
  </style>
</head>

<?php
$id = $_GET['id'];
include "config.php";
$Rdata = mysqli_query($con, "SELECT * FROM tbltodo WHERE id=$id");
$data = mysqli_fetch_array($Rdata);
?>

<body class="bg-info">
  <form action="update1.php" method="post">
    <div class="container mt-5">
      <div class="row justify-content-center m-auto custom-shadow custom-bg mt-3 py-4 col-md-6">
        <h3 class="text-center text-primary font-monospace">Update</h3>
        <div class="col-10">
          <input type="text" value="<?php echo $data['List']; ?>" name="List" class="form-control" placeholder="Enter a task" required />
        </div>
        <div class="col-2">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
      </div>
    </div>
  </form>
</body>
</html>
