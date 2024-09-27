<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeIgniter CRUD Tutorial on Coding Ninjas</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #1c1c1c; /* Black background */
      color: #d4edda; /* Light green text */
    }
    
    .container {
      max-width: 500px;
      background-color: #2b2b2b; /* Darker shade for the form container */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.7);
    }

    h1 {
      color: #28a745; /* Bootstrap's success green */
      text-align: center;
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      margin-bottom: 20px;
    }

    label {
      color: #28a745; /* Green labels */
    }

    .form-control {
      background-color: #1c1c1c; /* Dark input fields */
      color: #d4edda; /* Light green text */
      border: 1px solid #28a745; /* Green border */
    }

    .form-control:focus {
      border-color: #218838; /* Darker green on focus */
      box-shadow: none;
    }

    .btn-warning {
      background-color: #28a745;
      border-color: #218838;
      color: #fff;
    }

    .btn-warning:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }

    .error {
      color: #ff3860; /* Red error messages */
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1>Edit the Name of Student</h1>

    <form method="post" id="update_user" name="update_user" action="<?= site_url('/update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?php echo $user_obj['name']; ?>">
      </div>

      <div class="form-group">
        <label for="email">Email ID</label>
        <input type="email" name="email" id="email" class="form-control" value="<?php echo $user_obj['email']; ?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-warning">Edit Data</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
</body>
</html>
