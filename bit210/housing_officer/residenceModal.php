<div class="modal" tabindex="-1" id="<?php echo 'res-'.$row['id'] ?>" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Residence Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <br />
            <p>Residence ID: <?php echo $row['residenceId'] ?></p>
            <p>Address: <?php echo $row['address'] ?></p>
            <p>Amenities <?php echo $row['amenities'] ?></p>
            <p>Number of Units: <?php echo $row['numUnits'] ?></p></p>
            <p>Monthly rental: <?php echo $row['monthlyRental'] ?></p></p>
            <hr>
            <p>Applicant username: <?php echo $row['username'] ?></p></p>
            <p>Monthly income: <?php echo $row['monthly_income'] ?></p></p>
            <p>Date: <?php echo $row['applicationDate'] ?></p></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>