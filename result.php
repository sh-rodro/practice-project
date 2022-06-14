<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">  
     <meta name="author" content="sh-rodro">
     
     <title>Home - PHP Student Result Publication System</title>
     
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
     
        
<body class="bg-light">
<div class="container">
  <main>
    <div class="py-5 text-center">
        <h2>PHP Student Result Publication System</h2>
         </div>

         <?php
                
                
                if ($_POST) {
                $rg = $_POST['rollno'];
                
                echo $rg;
                // Check Connection
                $con=mysqli_connect("localhost","root","","resultdb");
                
                
                $result = mysqli_query($con,"SELECT * FROM results where rollno=$rg ");
                
                echo"<table class='table table-dark'>
                
                
                <thead>
                <tr>
                <th>CGPA</th>
                <th>Status</th>
                <th>Refard Subjects</th>
                
                </tr>
                </thead>
                <tbody>";
                
                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td>" . $row[3] . "</td>";
                
                echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                
                mysqli_close($con);
                
                }
                
                // Check connection
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                
                ?>
                
            
        </form>
      </div>
    </div>
  </main>


<footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017–2021 PHP Student Result Publication System</p>
      <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Page</a></li>
      <li class="list-inline-item"><a href="#">Page</a></li>
      <li class="list-inline-item"><a href="#">Admin login</a></li>
    </ul>
  </footer>
</div>

    
  </body>
</html>
