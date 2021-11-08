<?php include 'header.php'?>
<!doctype html>
<html lang="en">
<?php include 'config.php'?>    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
           
        }
        .center{
            text-align: center;
        }
        .banner{
              margin-top: 45px;    
              background-image: url(images/Online-job-search-cover.jpg);
              background-attachment: scroll;
              height: 250px;
              background-position:top;
              background-repeat: no-repeat;
              background-size: cover;
              position: relative;
              
        }
        .banner .text{
             text-align: left;
              position: absolute;
              top: 50%;
              left: 12%;
              transform: translate(-50%, -50%);
              color: white;
        }
        .list{
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
        }
        .list .card{
            margin-left: 2em;
            margin-bottom: 20px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            border-radius: 10px;
        }
        .list .card .card-body{
            display: flex;
            flex-direction: column;
            align-content: space-between;
            justify-content: space-between;
        }
        .list .card .card-body p{
            font-size: 0.9em;
        }
        .list .card .card-body .infoP{
            font-size: 0.8em;
            margin-bottom: 5px;
        }
        .list .card .card-body button{
            
        }
    </style>
    <title>Dashboard</title>
  </head>
  <body>
   
      <div class="banner">
          <div class="text">
              <h1>Job Portal</h1>
              <p>Find best jobs matching your skills</p>
          </div>
      </div>
      <div class="list">
          
          <?php 
                  
                  $sql = "SELECT `cname`, `position`, `jdesc`, `skills`, `ctc` FROM `jobs`";
                  $result = mysqli_query($conn,$sql);
                    
                  if($result->num_rows > 0)
                  {     $i=0;
                      while($rows= $result->fetch_assoc())
                      {
                          echo '<div class="card" style="width: 18rem;">
                                  <div class="card-body">
                                    <h4 class="card-title center">'.$rows['position'].'</h4>
                                    <h6 class="card-subtitle mb-2 text-muted center">'.$rows['cname'].'</h6>
                                    <hr>
                                    <p class="card-text">'.$rows['jdesc'].'</p>
                                    <p class="infoP"><b>Skills Required: </b>'.$rows['skills'].'</p>  
                                    <p class="infoP"><b>Job Location: </b>Banglore</p>
                                    <p class="infoP"><b>CTC: </b>'.$rows['ctc'].'</p>
                                    
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">Apply Now</button>
                                    
                                  </div>
                                </div>';
                      }
                  }
                  
                ?>
          <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apply for job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post">
                  <div class="mb-3">
                    <label for="name" class="col-form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Applying For</label>
                    <input type="text" class="form-control" id="name" name="apply">
                  </div>
                  <div class="mb-3">
                    <label for="qual" class="col-form-label">Qualification</label>
                    <input type="text" class="form-control" id="qual" name="qualification">
                  </div>
                  <div class="mb-3">
                    <label for="qual" class="col-form-label">Year Passed out</label>
                    <input type="text" class="form-control" id="qual" name="year">
                  </div>    
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="send">Apply</button>
               
                  
                </div>
             </form>
            </div>        
            </div>
          </div>
        </div>
          
          
      
      </div>
          
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>