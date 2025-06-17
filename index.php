<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TO-DO-LIST</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #eaf6ff,#ffeaf6,#f6ffea);
    }

    .custom-shadow {
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
    }

    .custom-bg {
      background-color: #fffbe6; /* soft yellow pastel */
    }
  </style>
</head>
<body>
  <form action="insert.php" method="get">
    <div class="container mt-5">
      <div class="row justify-content-center m-auto custom-shadow custom-bg mt-3 py-4 col-md-6">
        <h3 class="text-center text-primary font-monospace">TODO List</h3>
        <div class="col-8">
          <input type="text" name="list" class="form-control" placeholder="Enter a task" />
        </div>
        <div class="col-2">
          <button class="btn btn-primary">ADD</button>
        </div>
      </div>
    </div>
  </form>

  <?php
  include "config.php";
  $rawData = mysqli_query($con, "SELECT * FROM tbltodo");
  ?>

  <div class="container">
    <div class="col-8 bg-white m-auto mt-3 p-4 shadow rounded">
      <table class="table table-striped">
        <tbody>
          <?php
          while ($row = mysqli_fetch_array($rawData)) {
          ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['List']; ?></td>
              <td style="width: 10%;">
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Delete</a>
              </td>
              <td style="width: 10%;">
                <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success">Update</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
