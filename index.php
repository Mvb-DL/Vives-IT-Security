<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>

body {color:red;}

.div {
  margin: auto;
  margin-top: 15%;
  width: 50%;
  padding: 10px;
}

</style>

<body>

<div class="div" id="div">

<h2 class="text-center">IT Security Vives Kortrijk</h2>

    <form action="welcome.php" method="post">
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Admin Name">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Password</label>
          <input type="password" class="form-control" name="email" id="formGroupExampleInput2" placeholder="Admin Password">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

