

<!-- Allocate housing modal form-->
<div id="allocateModal" class="modal" tabindex="-1" role="dialog">
      <form method="post" action="./allocate-housing.php" id="allocateForm" > 
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
            <h5 class="modal-title">Allocate Housing</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
  <div class="container"> 
      <div class="row">
        <div class="col-6">
            <div class="form-group">
              Application for: 
                <b id="applicantName"></b>
            </div>
        </div>
        <div class="col-6">
          Residence ID:
          <b id="residenceID"></b>
        </div>
      </div>
      <div class="row">

        <div class="col-6">
            <div class="form-group">

              <label for="exampleFormControlSelect1">Unit No</label>
              <input class="form-control" type="text" name="unitNo" id="unitNo" />
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
              <label for="allocatedStartDate">From Date</label>
              <input type="date" data-date-format="dd/mm/yyyy" value="30/12/2019" name="fromDate" id="allocatedStartDate">
              
            </div>
        </div>
      </div>
      <div class="row">
          <div class="col-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Duration</label>
                <select class="form-control" id="period" name="duration">
                  <option value="12">12 months</option>
                  <option value="18">18 months</option>
                </select>
              </div>
          </div>
          <div class="col-6" >
          <small>Estimated End Date:</small>
          <p style="margin-top:12px" id="allocatedEstimatedDate"></p>
          </div>
      </div>
      <br />
    </div>
  </div>

  <input type="hidden" name="endDate" id="endDate" />
  <input type="hidden" name="application" id="inpApplicationId" />
  <input type="hidden" name="residence" id="inpResidence" />
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <input type="submit" class="btn btn-primary" value="Allocate" />
  </div>
</form>
</div>
</div>
</div>
    <!-- Allocate housing form ENDs-->
