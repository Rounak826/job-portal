<?php include 'header.php'?>
<?php include 'config.php'?>
<div id="sidebar" class="sidebar"  style="margin-top:45px;">
              <a class="btn" href="index.php">Jobs</a>
              <a class="btn active" href="jobs.php">Candidates Applied</a>
              <a class="btn" href="#contact">Contact</a>
              <a class="btn" href="#about">About</a>
</div>
<div class="content">
    <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Candidate Name</th>
                  <th scope="col">Job Position</th>
                  <th scope="col">year passed</th>
                    
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = "SELECT `name`,`year`,`apply` FROM `candidates`";
                  $result = mysqli_query($conn,$sql);
                    
                  if($result->num_rows > 0)
                  {     $i=0;
                      while($rows= $result->fetch_assoc())
                      {
                          echo "<tr>
                                <td>".++$i."</td>
                                <td>".$rows['name']."</td>
                                <td>".$rows['apply']."</td>
                                <td>".$rows['year']."</td>
                                </tr>";
                      }
                  }
                  
                  
                  ?>
                
              </tbody>
            </table>

</div>