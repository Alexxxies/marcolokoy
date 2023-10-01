<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Southern Jade Life Insurance</title>
  
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>

 <!--JQuery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<link href="style.css" rel="stylesheet"/>

<style>
 
 
</style>
<nav class="navbar bg-body-tertiary shadow-none">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <img src="images/logo-topnav.png" alt="Logo" width="270" height="90" class="d-inline-block align-text-top">
        <div class="d-inline" style="margin-right:50px;">
            <a href="#" style="color: azure; margin-right: 30px;">FAQs</a>
            <a href="#" style="color: azure; margin-right: 30px;">Contact Us</a>
            <a href="#" style="color: azure;">About Us</a>
        </div>
    </div>
</nav>
</head> 
   
    <body>
        <form method="post" action="process_form.php">


    <div class="card p-5">
        <div class="card-body">
             <form class="row g-3">
  
  <div class="col-md-4">
    <label for="validationServer02" class="form-label"> Email *</label>
    <input type="Email" class="form-control " id="validationServer02"  required>
  </div>

  <div class="col-md-3">
    <label for="validationServer02" class="form-label">Last Name *</label>
    <input type="text" class="form-control " id="validationServer02" required>
  </div>

  <div class="col-md-3">
    <label for="validationServer01" class="form-label">First Name *</label>
    <input type="text" class="form-control " id="validationServer01" required>
  </div>

  <div class="col-md-3">
    <label for="validationServer01" class="form-label">Middle Name *</label>
    <input type="text" class="form-control " id="validationServer01" required>
  </div>

  <div class="col-md-2">
    <label for="validationServer02" class="form-label">Birthdate *</label>
    <input type="Date" class="form-control " id="validationServer02"  required>
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Birth Place *</label>
    <input type="text" class="form-control " id="validationServer02" required>
  </div>


  <div class="col-md-2">
    <label for="validationCustom04" class="form-label">Gender</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose</option>
      <option>FEMALE</option>
      <option>MALE</option>
    </select>
    <div class="invalid-feedback">
      Please select your gender.
    </div>
  </div>

  <div class="col-md-2">
    <label for="validationCustom04" class="form-label">CIVIL STATUS</label>
    <select class="form-select" name="civil_status" id="civilstatus" required>
      <option selected disabled value="">Choose</option>
      <option value="Single">Single</option>
      <option value="Married">Married</option>
      <option value="Widow">Widow</option>
    </select>
    <div class="invalid-feedback">
      Please select your Civil Status.
    </div>
  </div>

                <div id="marriedForm">
                <label for="validationServer02" class="form-label">Spouse Fullname </label>
                <input type="text" class="form-control " id="validationServer02" required>
              </div>


  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Contact Number *</label>
    <input type="Number" class="form-control " id="validationServer02" required>
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Lot Number/ Building / Street Name *</label>
    <input type="text" class="form-control " id="validationServer02" required>
  </div>

  <div class="col-md-3 mb-3">
            <label class="form-label">Region *</label>
            <select name="region" class="form-control form-control-md" id="region"></select>
            <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" required>
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label">Province *</label>
            <select name="province" class="form-control form-control-md" id="province"></select>
            <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" required>
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label">City / Municipality *</label>
            <select name="city" class="form-control form-control-md" id="city"></select>
            <input type="hidden" class="form-control form-control-md" name="city_text" id="city-text" required>
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label">Barangay *</label>
            <select name="barangay" class="form-control form-control-md" id="barangay"></select>
            <input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" required>
        </div>


  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Zip </label>
    <input type="number" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label">SSS Number</label>
    <input type="Number" class="form-control " id="validationServer02">
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label">TIN Number</label>
    <input type="Number" class="form-control " id="validationServer02">
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label"> PLUK Email Address *</label>
    <input type="Email" class="form-control " id="validationServer02"  required>
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label"> Name of Recruiter *</label>
    <input type="text" class="form-control " id="validationServer02"  required>
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label"> Recruiter's Agent Code *</label>
    <input type="text" class="form-control " id="validationServer02"  required>
  </div>

  <h3>INCASE OF EMERGENCY</h3>

  <div class="col-md-3">
    <label for="validationServer02" class="form-label">Last Name *</label>
    <input type="text" class="form-control " id="validationServer02" required>
  </div>

  <div class="col-md-3">
    <label for="validationServer01" class="form-label">First Name *</label>
    <input type="text" class="form-control " id="validationServer01" required>
  </div>

  <div class="col-md-3">
    <label for="validationServer01" class="form-label">Middle Name *</label>
    <input type="text" class="form-control " id="validationServer01" required>
  </div>

  <div class="col-md-3">
    <label for="validationServer01" class="form-label">Relationship to Applicant *</label>
    <input type="text" class="form-control " id="validationServer01" required>
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Contact Number *</label>
    <input type="Number" class="form-control " id="validationServer02" required>
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Address *</label>
    <input type="text" class="form-control " id="validationServer02" required>
  </div>

  <h3>Employment History</h3>


  <div class="col-md-2">
    <label for="validationCustom04" class="form-label">Are you a Government Employee? </label>
    <select class="form-select" name="government_employee" id="government" required>
      <option selected disabled value="">Choose</option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
  </div>

<div id="GovernmentForm">
                <label for="validationServer02" class="form-label">Company Name </label>
                <input type="text" class="form-control " id="validationServer02" required>
              </div>

   <div id="PositionForm">
                <label for="validationServer02" class="form-label">Position </label>
                <input type="text" class="form-control " id="validationServer02" required>
              </div>



        <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
</div>
</div>



<!-- MDB -->

<script>
   
        // Initially hide the married form
        $("#marriedForm").hide();

        // Listen for changes in the civil_status select element
        $("#civilstatus").change(function() {
            var selectedCivilStatus = $(this).val();

            // Show the married form if "Married" is selected, otherwise hide it
            if (selectedCivilStatus === "Married") {
                $("#marriedForm").show();
            } else {
                $("#marriedForm").hide();
            }
        });
    
</script>

<script>
   
        // Initially hide the married form
        $("#GovernmentForm").hide();
        $("#PositionForm").hide();

        $("#government").change(function() {
            var selectedGovernmentEmployee = $(this).val();

           
            if (selectedGovernmentEmployee === "Yes") {
                $("#GovernmentForm").show();
                $("#PositionForm").show();
            } else {
                $("#GovernmentForm").hide();
                $("#PositionForm").show();
            }
        });
    
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
    <script src="ph-address-selector.js"></script>

</body>
</html>