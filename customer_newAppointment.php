<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
        
    <?php
    $locPelath = "athens"; //hardcoded dieuthynsh pelath
		$host = "localhost";
		$username = "root";
		$pass = "";
    $con = mysqli_connect($host, $username, $pass, "project");
	?>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" >eFreelance</a> 
  </nav>

  <div class="container">
	<br>  <h1><p class="text-center">Find a Freelancer</a></p></h1>
	<hr>

    <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Hlektrologoi
              </button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">

                <ul class="list-group">
                    <?php 
                    $result = mysqli_query($con,"SELECT jobName, userID FROM professional WHERE jobDescription LIKE '%hlektrologos%' AND address LIKE '%$locPelath%' ");
                    if (mysqli_num_rows($result) > 0) {
                      while($row = mysqli_fetch_assoc($result)) {
                        echo ('<li class=list-group-item>' . $row["jobName"]);
                        echo ('<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#descModal' . $row["userID"] . '" data-whatever="@getbootstrap">Book appointment</button> </li>');
                      }
                    } else {echo 'No freelancers found';}
                    ?>
                </ul>   

                <?php
                  $result = mysqli_query($con,"SELECT userID , name , jobDescription , jobName FROM professional WHERE jobDescription LIKE '%hlektrologos%' AND address LIKE '%$locPelath%' ");
                  if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                      $rowNum = $row["userID"];
                      echo <<< EOT

                      <div class="modal fade" id="descModal$rowNum" tabindex="-1" role="dialog" aria-labelledby="descModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="descModalLabel">Book an appointment</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="" method="POST">
                          <div class="modal-body">
                            
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Book an oppointment with:</label>
                                <div class="card">
                                  <article class="card-group-item">
                                    <div class="filter-content">
                                      <div class="card-body">
                                        $row[name]
                                        <br>$row[jobName]
                                        <br>$row[jobDescription]

                                      </div>  <!-- list-group .// -->
                                    </div>
                                  </article> <!-- end of area -->
                                </div>
                              
                            </div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Book" name="submitBook$rowNum">
                          </div>
                        </form>
                      
                      </div>
                      </div>
                      </div>
EOT ; 
                      $a='submitBook';
                      $b=$rowNum;
                      $c=$a.$b;
                      if( isset( $_POST[$c] )){
                        $sql = "INSERT INTO appointment (customerID, datetime, new_appointment, proID) VALUES (10, 'tote', 1 , '$row[userID]'); ";
                        mysqli_query($con, $sql);
                        echo "<meta http-equiv='refresh' content='0'>";
                      }
                    } 
                  }
                ?>

          </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Ydraulikoi
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <ul class="list-group">
                    
                    <?php 
                    $result = mysqli_query($con,"SELECT jobName, userID FROM professional WHERE jobDescription LIKE '%ydraulikos%' AND address LIKE '%$locPelath%' ");
                    if (mysqli_num_rows($result) > 0) {
                      while($row = mysqli_fetch_assoc($result)) {
                        echo ('<li class=list-group-item>' . $row["jobName"]);
                        echo ('<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#descModal' . $row["userID"] . '" data-whatever="@getbootstrap">Book appointment</button> </li>');
                      }
                    } else {echo 'No freelancers found';}
                    ?>

              </ul>

              <?php
                  $result = mysqli_query($con,"SELECT userID , name , jobDescription , jobName FROM professional WHERE jobDescription LIKE '%ydraulikos%' AND address LIKE '%$locPelath%' ");
                  if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                      $rowNum = $row["userID"];
                      echo <<< EOT

                      <div class="modal fade" id="descModal$rowNum" tabindex="-1" role="dialog" aria-labelledby="descModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="descModalLabel">Book an appointment</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="" method="POST">
                          <div class="modal-body">
                            
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Book an oppointment with:</label>
                              <div class="card">
                                <article class="card-group-item">
                                  <div class="filter-content">
                                    <div class="card-body">
                                      $row[name]
                                      <br>$row[jobName]
                                      <br>$row[jobDescription]

                                    </div>  <!-- list-group .// -->
                                  </div>
                                </article> <!-- end of area -->
                              </div>
                            </div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Book" name="submitBook$rowNum">
                          </div>
                        </form>
                        
                      </div>
                      </div>
                      </div>
EOT ;
                $a='submitBook';
                $b=$rowNum;
                $c=$a.$b;
                if( isset( $_POST[$c] )){
                  $sql = "INSERT INTO appointment (customerID, datetime, new_appointment, proID) VALUES (10, 'tote', 1 , '$row[userID]'); ";
                  mysqli_query($con, $sql);
                  echo "<meta http-equiv='refresh' content='0'>";
                }
              }
            }



              ?>

            </div>
          </div>
        </div>
        
          
        </div>
      </div>
	
        </div>
</body>
</html>