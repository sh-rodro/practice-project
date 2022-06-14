<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
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

        <form action="result.php" method="post">
           <div class="col-md-3">
             <label for="cc-cvv" class="form-label">Roll No.</label>
                <input type="number" class="form-control" id="cc-cvv" placeholder="Your roll number" name="rollno">
                <button class="btn btn-secondary btn-lg" type="submit">Get Result</button>
              
      
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
