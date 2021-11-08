<?php include 'header.php'?>
<?php include 'config.php'?> 
       <div id="sidebar" class="sidebar" style="margin-top:45px;">
              <a class="btn active" href="index.php">Jobs</a>
              <a class="btn" href="jobs.php">Candidates Applied</a>
              <a class="btn" href="#contact">Contact</a>
              <a class="btn" href="#about">About</a>
        </div>
        <!-- Page content -->
        <div class="content">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Post job
                </button>
            </p>    
           <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form action="config.php" method="post">
                      <div class="mb-3">
                        <label for="CompanyName" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="CompanyName" aria-describedby="emailHelp" name="companyName">
                      </div>
                      <div class="mb-3">
                        <label for="position" class="form-label">Job Position</label>
                        <input type="text" class="form-control" id="position" name="position">
                      </div>
                      <div class="mb-3">
                          <label for="description">Job Description</label>
                          <textarea class="form-control" placeholder="" id="description" style="height: 100px" name="description"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="ctc" class="form-label">Skills Required</label>
                        <input type="text" class="form-control" id="ctc" name="skills">
                      </div>
                      <div class="mb-3">
                        <label for="ctc" class="form-label">CTC</label>
                        <input type="text" class="form-control" id="ctc" name="ctc">
                      </div>
                          
                      <button type="submit" class="btn btn-primary" name="postJobs">Submit</button>
                    </form>
                </div>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Company Name</th>
                  <th scope="col">Job Position</th>
                  <th scope="col">CTC</th>
                    
                </tr>
              </thead>
              <tbody>
                <?php 
                  
                  $sql = "SELECT `cname`, `position`,`ctc` FROM `jobs`";
                  $result = mysqli_query($conn,$sql);
                    
                  if($result->num_rows > 0)
                  {     $i=0;
                      while($rows= $result->fetch_assoc())
                      {
                          echo "<tr>
                                <td>".++$i."</td>
                                <td>".$rows['cname']."</td>
                                <td>".$rows['position']."</td>
                                <td>".$rows['ctc']."</td>
                                </tr>";
                      }
                  }
                  
                ?>
                
              </tbody>
            </table>
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