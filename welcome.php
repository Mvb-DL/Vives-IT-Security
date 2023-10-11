<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>

#div1 {
  margin: auto;
  margin-top: 3%;
  width: 50%;
  padding: 10px;
}

#div2 {
  margin: auto;
  margin-top: 1%;
  width: 50%;
  padding: 10px;
}

</style>

<body>

<container id="main_container">

<form action="insert.php" method="post" id="data_form">

<div id="div1">
  
    <h1 class="text-center mb-5">Admin View</h2>
    <p style="font-size: 20px;">Hey <?php echo $_POST["name"]; ?> </p>

<div class="col">

<div class="row">

<div class="mb-3 form-group">
    <label for="last_name" value="Lastname">Student</label>
    <input type="text" name="selected_student" id="selectedStudent" class="form-control">
</div>

<div class="mb-3 form-group">
    <label for="first_name" value="Firstname">Firstname</label>
    <input type="text" name="first_name" id="firstName" class="form-control">
</div>

</div>

<div class="row">

<div class="form-group">
    <label for="last_name" value="Lastname">Lastname</label>
    <input type="text" name="last_name" id="lastName" class="form-control">
</div>

<div class="mb-3 form-group">
    <label for="grades" value="grades">Grades</label>
    <input type="text" name="grades" id="grades" readonly class="form-control">
</div>

</div>

<input class="btn btn-primary mb-3" type="submit" value="Submit">

</div>

</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Grade</th>
      <th scope="col">Country</th>
      <th scope="col">Course</th>
    </tr>
  </thead>
<tbody> 

<?php
    $servername = "localhost";
    $username = "mario";
    $password = "mvb";
    $dbname = "it_security_course";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT Firstname, Lastname, Grades, Country, Course FROM it_students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
      while($row = $result->fetch_assoc()) {
        echo "<tr>" . "<td>" . $row["Firstname"] . "</td>" . "<td>" . $row["Lastname"]. "</td>" .  "<td>" . $row["Grades"]. "</td>" .  "<td>" . $row["Country"]. "</td>" . "<td>" . $row["Course"]. "</td>" . "</tr>"  ;
      }
    } else {
      echo "0 results";
    }
    $conn->close();
?>
</tbody>
  </table>

</div>

  </container>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>

