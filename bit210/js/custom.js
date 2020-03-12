/** jQuery custom handlers for passing the data to the related modal
 * Written by: Pooria Atarzadeh - B1700394
 */

/*$(document).ready(function() {
  // default period
  var period = 12;

  function updateEstimate() {
    const selectedDate = $("#allocatedStartDate").val();
    const estimate = moment(selectedDate)
      .add(period, "months")
      .format("YYYY-MM-DD");
    $("#allocatedEstimatedDate").html(estimate);
    // set the hidden form input
    $("#endDate").attr("value", estimate);
  }

  updateEstimate();

  $(".allocateBtn").click(function(elm) {
    // first get the data related to the clicked row
    const { application, residence } = elm.currentTarget.dataset;

    // load the available units with ajax
    $.post("./getUnits.php", { residence }, function(data) {
      if (data > 0) {
        // now call modal with the data
        $("#allocateModal").modal("show");
        $("#applicantName").html(application);
        $("#residenceID").html(residence);

        // fill in hidden inputs
        $("#inpApplicationId").attr("value", application);
        $("#inpResidence").attr("value", residence);
        $("#unitNo").attr("value", data);
      } else {
        alert("no residence units are available!");
      }
    });
  });

  $(".rejectBtn").click(function(elm) {
    // first get the data related to the clicked row
    const { application } = elm.currentTarget.dataset;

    // load the available units with ajax
    $.post("./reject.php", { application }, function(data) {
      alert(application);
      if (data) {
        // reload
        window.location = window.location;
      }
    });
  });

  // make sure to update the estimate anytime date or period is changed
  $("#period").on("change", function(e) {
    period = e.currentTarget.value;
    updateEstimate();
  });

  $("#allocatedStartDate").on("change", function() {
    updateEstimate();
  });
});
