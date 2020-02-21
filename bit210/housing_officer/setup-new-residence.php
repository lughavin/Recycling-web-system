
<?php
  include "./housingHeader.php";
  include "./db.php";

  if (isset($_POST['numUnits'])) {
    $numUnits = $_POST['numUnits'];
    $address = $_POST['address'];
    $name = $_POST['name'];
    $amenities = $_POST['amenities'];
    $sizePerUnit = $_POST['sizePerUnit'];
    $monthlyRental = $_POST['monthlyRental'];

    // insert into database
    $sql = "INSERT INTO residences (numUnits, address, residenceName, sizePerUnit, monthlyRental, amenities) 
        VALUES ('{$numUnits}', '{$address}', '${name}', '{$sizePerUnit}', '{$monthlyRental}', '{$amenities}')";
    $result = $conn->query($sql);

    $residentId = $conn->insert_id;
    $unitNoIdx = 0;

    for($unitNoIdx = 0; $unitNoIdx <= $numUnits; $unitNoIdx++) {
      $sql2 = "INSERT INTO unit (unitNo, availability, residence)
              VALUES ('{$unitNoIdx}', 'available', '{$residentId}')";
      $result2 = $conn->query($sql2);
    }

    if ($result=== TRUE) {
        include "./residenceCreated.php";
        die();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>
    <div class="container" id="main">

      <div class="row">
  
        <div class="col-2"></div>
        <div class="col-8">
          <h2>Setup New Residence</h2>
          <br />
          <div id="newResidenceFormContainer">
          <form method="post" id="newResidentForm">
          <div class="row">
            <div class="col-md-3 col-sm-12">
              <div class="form-group">
                <label for="unitsInput">No of units available</label>
                <input
                  class="form-control"
                  id="unitsInput"
                  type="number"
                  name="numUnits"
                  placeholder="0"
                  required
                />
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="unitsInput">Residence name</label>
                <input
                  class="form-control"
                  id="unitsInput"
                  type="text"
                  name="name"
                  placeholder=""
                  required
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="addrInput">Residence Address</label>
                <p>
                  <textarea
                    class="form-control"
                    id="addrInput"
                    cols="10"
                    rows="2"
                    name="address"
                    required
                    placeholder="Residence Address"
                  ></textarea>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="addrInput">Amenities</label>
                <p>
                  <textarea
                    class="form-control"
                    id="addrInput"
                    cols="10"
                    rows="2"
                    name="amenities"
                    required
                    placeholder="Amenities"
                  ></textarea>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="sizeInput">Size</label>
                <input
                  class="form-control"
                  id="sizeInput"
                  type="number"
                  name="sizePerUnit"
                  placeholder="0"
                  required
                />
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="sizeInput">Monthly rental:</label>
                <span>
                  <input
                    class="form-control"
                    id="sizeInput"
                    type="number"
                    name="monthlyRental"
                    required
                    placeholder="1500"
                  />
                </span>
              </div>
            </div>
          </div>

          <br />
          <button type="submit" class="btn btn-primary">Setup New Residence</button>
        </div>
        </div>
       
      </div>
       </form>
    </div>

<?php
  include "housingFooter.php"
?>
