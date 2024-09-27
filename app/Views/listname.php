<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width, shrink-to-fit=no">
    <title>ALGORDO_CRUD</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>
      body {
        background-color: #fbf2d5; /* Light beige background */
        color: #394a51; /* Dark teal text */
      }

      h1 {
        color: #394a51; /* Dark teal */
        font-weight: bold;
      }

      .btn-primary {
        background-color: #7fa99b; /* Muted teal button */
        border-color: #7fa99b;
      }

      .btn-warning {
        background-color: #fdc57b; /* Light orange button */
        border-color: #fdc57b;
        color: #394a51; /* Dark teal text on orange */
      }

      .btn-danger {
        background-color: #ff6b6b; /* Bright red for delete */
        border-color: #ff6b6b;
        color: #fff;
      }

      .table {
        color: #394a51;
        background-color: #fff; /* White table background */
      }

      .table thead th {
        background-color: #7fa99b; /* Muted teal for table header */
        color: #fff; /* White text */
      }

      .table tbody tr:hover {
        background-color: #fbf2d5; /* Light beige hover */
      }

      .table tbody td {
        color: #394a51; /* Dark teal text */
      }

      .btn {
        color: #fff; /* Default button text color */
      }

      .container {
        margin-top: 20px;
      }

      /* Styling for the Add button container */
      .d-flex {
        margin-bottom: 20px;
      }

      /* Adding some padding to the body for better spacing */
      body {
        padding: 20px;
      }
    </style>
  </head>

  <body>
    <div class="container mt-4">
      <h1>STAR DRAGON MASTER LIST</h1>

      <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/insertname') ?>" class="btn btn-primary">Add a Name & email</a>
      </div>

      <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
      }
      ?>

      <div class="mt-3">
        <table class="table table-bordered" id="users-list">
          <thead>
            <tr>
              <th>Id Number</th>
              <th>Name</th>
              <th>Email</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($users): ?>
            <?php foreach ($users as $user): ?>
            <tr>
              <td><?php echo $user['id']; ?></td>
              <td><?php echo $user['name']; ?></td>
              <td><?php echo $user['email']; ?></td>
              <td>
                <a href="<?php echo base_url('editname/'.$user['id']);?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo base_url('delete/'.$user['id']);?>" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#users-list').DataTable();
      });
    </script>
  </body>
</html>
