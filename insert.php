<!DOCTYPE html>
<html>
 
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
 
<body>
    <?php

        $servername = "localhost";
        $username = "mario";
        $password = "mvb";
        $dbname = "it_security_course";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $selected_student = $_REQUEST['selected_student'];
        $first_name = $_REQUEST['first_name'];
        $grades = $_REQUEST['grades'];

        if (strlen($grades) > 1) {

        $sql = "UPDATE it_students SET Firstname='$first_name' WHERE Firstname='$selected_student'";
        $sql_grade = "UPDATE it_students SET Grades='$grades' WHERE Firstname='$first_name'";

        echo $sql_grade;

        if ($conn->query($sql) === TRUE) {
          echo "";
        } else {
          echo "Error updating record: " . $conn->error;
        }

        if ($conn->query($sql_grade) === TRUE) {
            echo "";
          } else {
            echo "Error updating record: " . $conn->error;
          }
        }

        else 
        {
          $sql = "UPDATE it_students SET Firstname='$first_name' WHERE Firstname='$selected_student'";

          if ($conn->query($sql) === TRUE) {
            echo "";
          } else {
            echo "Error updating record: " . $conn->error;
          }

        }
        
        ?>

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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>