<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LMS</title>

  <!-- Bootstrap CDN CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
  <?php include('reusables/nav.php') ?>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-5">All Schools</h1>
        </div>
      </div>

      <div class="row">
        <?php 
          include('reusables/connection.php');
          $query = 'SELECT * FROM schools';
          $schools = mysqli_query($connect, $query);

          foreach ($schools as $school) {
            echo '<div class="col-md-3">
                    <div class="card mb-4" style="">
                      <div class="card-body">
                        <h5 class="card-title">' . $school['Board'] . '</h5>
                        <span class="badge badge-primary">' . $school['School Type'] . '</span>
                        <span class="badge badge-success">' . $school['Language'] . '</span>
                        <div class="card-footer">
                          <form action="updateschool.php" method="POST">
                            <input type="hidden" name="boardNo" value="' . $school['Board No'] .'">
                            <button type="submit" name="updateSchool" class="btn btn-sm btn-success">Edit</button>
                          </form>
                          <form action="deleteschool.php" method="GET">
                            <input type="hidden" name="boardNo" value="' . $school['Board No'] .'">
                            <button type="submit" name="deleteSchool" class="btn btn-sm btn-danger">Delete</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>';
        }
        ?>
      </div>
    </div>
  </div>


  
</body>
</html>