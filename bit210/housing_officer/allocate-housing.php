<?php
  include "./housingHeader.php";
  include "./db.php";

  if (isset($_POST['unitNo'])) {
    $fromDate = $_POST['fromDate'];
    $duration = $_POST['duration'];
    $endDate = $_POST['endDate'];
    $unit = $_POST['unitNo'];
    $application = $_POST['application'];
    $residence = $_POST['residence'];

    $query = "INSERT INTO allocation (fromDate, duration, endDate, unit, application)
              VALUES ('{$fromDate}', '{$duration}', '{$endDate}', '{$unit}', '{$application}')";
    $result = $conn->query($query);

    $query2 = "UPDATE application SET status = 'Approved' WHERE id={$application}";
    $result2 = $conn->query($query2);

  $query3 = "UPDATE unit SET availability = 'unavailable' WHERE residence={$residence} AND id={$unit}";
    $result3 = $conn->query($query3);

    if ($result && $result2) {
      echo "Submitted Successfully!";
    } else {
      echo "Error: " . $conn->error;
    }
  }
?>

  <div class="container" id="main">
    <div class="row">
      <div class="col-12">
          <blockquote class="blockquote text-center">
              <h2>Allocate Housing</h2>
              <br />
              <table class="table table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Applicant username</th>
                      <th scope="col">Status</th>
                      <th scope="col">Allocate</th>
                      <th scope="col">Reject</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

                      $sql = "SELECT app.id, app.applicationDate, app.status, u.monthly_income,
                              u.username, r.address, r.id residenceId, r.numUnits, r.amenities, r.monthlyRental
                              FROM application AS app, residences AS r, user AS u
                              WHERE app.residence = r.id
                              AND app.userName = u.username
                              ORDER BY app.id DESC";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                    ?>
                      <tr>
                        <th scope="row">
                          <a href="#" data-target="#<?php echo 'res-'.$row['id'] ?>" data-toggle="modal">
                            <?php echo $row['id'] ?>
                          </a>
                        </th>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td><button class="btn btn-secondary allocateBtn" data-application="<?php echo $row['id'] ?>" data-residence="<?php echo $row['residenceId'] ?>">Allocate</button></td>
                        <td><button <?php if ($row['status'] == 'Approved' || $row['status'] == 'Rejected') echo "disabled"; ?> class="btn btn-secondary rejectBtn" data-application="<?php echo $row['id'] ?>" data-residence="<?php echo $row['residenceId'] ?>">Reject</button></td>
                        
                      </tr>
                      <?php include "residenceModal.php"; ?>
                    <?php
                      }};
                    ?>
                  </tbody>
                </table>
            </blockquote>
      </div>
     
  </div>


<?php
  include "allocateModal.php";
  include "housingFooter.php";
?>

