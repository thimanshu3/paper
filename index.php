<?php

namespace Phppot;

use \Phppot\CountryState;

require_once __DIR__ . '/Model/CountryStateCity.php';
$countryStateCity = new CountryStateCity();
$countryResult = $countryStateCity->getAllCountry();
?>
<!-- created by amigos @himanshu & @garvit -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>
    Paper Submission
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png" />
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.min.css" rel="stylesheet" />
  <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />

  <script src="./assets/js/ajax-handler.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="">
  <div class="main-content">
    <!-- Navbar -->

    <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://contenthub-static.grammarly.com/blog/wp-content/uploads/2017/11/research.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0 align-items-center">PAPER SUBMISSION</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="./submitDetails.php" enctype="multipart/form-data" method="POST">
                <h3 class="heading-small text-muted">
                  Researcher information
                </h3>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Name</label>
                        <input type="text" id="input-username" name="r_username" class="form-control form-control-alternative" placeholder="Username"  required />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-designation">Designation</label>
                        <input type="text" id="input-designation" name="r_designation" class="form-control form-control-alternative" placeholder="Ex: Project Manager" required />
                      </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email"
                            >Email address</label
                          >
                          <input
                            type="email"
                            id="input-email"
                            class="form-control form-control-alternative"
                            placeholder="jesse@example.com"
                          />
                        </div>
                      </div> -->
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-qual">Occupation</label>
                        <input type="text" id="input-qual" name="r_qual" class="form-control form-control-alternative" required />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-org">Institution/Organization</label>
                        <input type="text" id="input-org" name="r_org" class="form-control form-control-alternative" required />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input onchange="sendOtpToEmail(this.value)" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="input-email" name="r_email" class="form-control form-control-alternative" placeholder="jesse@example.com" required />
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-mobile">Mobile</label>
                        <input type="text" id="input-mobile" name="r_mobile" class="form-control form-control-alternative" placeholder="10 digit mobile number" required />
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-otp">OTP</label>
                        <input onchange="validateEmail(this.value)" type="number" id="validate" name="r_otp" class="form-control form-control-alternative" placeholder="Enter Otp here.." required />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-alt-email">Alternate Email address</label>
                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="input-alt-email" name="r_alt_email" class="form-control form-control-alternative" placeholder="jesse@example.com" required/>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-alt-mob">Alternate Mobile</label>
                        <input type="text" id="input-calt-mob" class="form-control form-control-alternative" name="r_alt_mob" placeholder="10 digit mobile number" required/>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">
                  Contact information
                </h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" name="r_address" class="form-control form-control-alternative" placeholder="Home Address" type="text" required />
                      </div>
                    </div>
                  </div>
                  <div class="row align-text-center">

                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="country-list">Country</label>
                        <select style="width: 100%;" name="r_country" id="country-list" class="demoInputBox" onChange="getState(this.value);" required>
                          <option value disabled selected>Select Country</option>
                          <?php
                          foreach ($countryResult as $country) {
                          ?>
                            <option value="<?php echo $country["id"]; ?>"><?php echo $country["country_name"]; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="state-list">State</label>
                        <select style="width: 100%;" name="r_state" id="state-list" class="demoInputBox" onChange="getCity(this.value);" required>
                          <option value="">Select State</option>
                        </select> </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="city-list">City</label>
                        <select style="width: 100%;" name="r_city" id="city-list" class="demoInputBox" required>
                          <option>Select City</option>
                        </select> </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="pincode">Postal code</label>

                        <input type="text" id="pincode" name="r_pincode" class="form-control form-control-alternative" placeholder="6 digit pincode" required />

                      </div>
                    </div>
                  </div>

                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Paper Information</h6>
                <div class="pl-lg-4">
                  <div class="row align-baseline">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-title">Paper Title</label>
                        <input type="text" id="input-title" name="r_title" class="form-control form-control-alternative" placeholder="Paper Title" required />
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-pages">Number of Pages (max. 8 pages)</label>
                        <input type="number" id="input-pages" class="form-control form-control-alternative" name="r_pages"  placeholder="Number of Pages" required />
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">No. of Authors (max. 5)</label>
                        <input type="number" id="authorscount" name="r_author_count" class="form-control form-control-alternative" value="0" onchange="generate()" required />
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-abstract">Abstract (max. 200 words)</label>
                        <input type="text" id="abstract" name="r_abstract" placeholder="Brief Description" class="form-control form-control-alternative" required />
                      </div>
                    </div>
                    <!-- <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Click on the Below button to enter details</label>
                         <button class="btn btn-icon col-8 btn-secondary" type="button" onclick=addAuthor()>
                          <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                          <span class="btn-inner--text">Add Authors</span>
                        </button> 

                      </div>
                    </div> -->
                  </div>
                  <div id="parentofauthdiv" class="row">

                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="track">Track in Which Your Submision Belongs</label>
                        <select style="width: 100%;" name="r_track" id="track" class="demoInputBox" required>
                          <option>Select Track</option>
                          <option>Engineering</option>
                          <option>Science</option>
                          <option>Management</option>
                        </select> </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="track">Paper Upload (.pdf or .doc format)</label>

                        <div class="custom-file">
                          <input type="file" name="r_file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="uploadValidation('inputGroupFile01')" required>
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-right float-right">
                  <button type="submit" name="btn-save" id="submit" class="btn btn-lg btn-block btn-primary" style="display:none;">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2020
              <a href="https://github.com/thimanshu3" class="font-weight-bold ml-1" target="_blank">Amigos</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- hey guys -->
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.1"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <!-- <script>
      window.TrackJS &&
        TrackJS.install({
          token: "ee6fab19c5a04ac1a32a645abde4613a",
          application: "argon-dashboard-free"
        });
    </script> -->
</body>
<script type="text/javascript">
  function generate() {

    var count = parseInt(document.getElementById("authorscount").value);
    if (count > 4) {
      Swal.fire({
        position: 'top-end',
        icon: 'warning',
        title: 'Max. 5 authors allowed',
        showConfirmButton: false,
        timer: 1500
      })
      document.getElementById("authorscount").value = "";

    } else if (count >= 0 && count <= 4) {
      document.getElementById('parentofauthdiv').innerHTML = '';
      for (i = 0; i < count; i++) {
        var input = '<div style="width: 100%; background-color:#f4eab4" class="row mt-4 " name="authors"><div class="col-lg-6"><label class ="form-control-label">Author ' + (i + 1) + '</label><div class="form-group"><label class="form-control-label" for="authName">Name of Author</label><input type="text" name="authName[]" class="form-control form-control-alternative" /></div></div><div class="col-lg-6 mt-4"><div class="mt-1 form-group"><label class="form-control-label" for="authInstitute">Institution / organization</label><input type="text" name="authInstitute[]" class="form-control form-control-alternative" placeholder="organisation name" /></div></div><div class="col-lg-4"><div class="form-group"><label class="form-control-label" for="authDesi">Designation</label><input type="text" name="authDesi[]" class="form-control form-control-alternative" placeholder="jesse@example.com" /></div></div><div class="col-lg-4"><div class="form-group"><label class="form-control-label" for="authEmail">Email address</label><input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="authEmail[]" class="form-control form-control-alternative" /></div></div><div class="col-lg-4"><div class="form-group"><label class="form-control-label" for="authMobile">Mobile</label><input type="tel" name="authMobile[]" class="form-control form-control-alternative"  /></div></div></div>';
        $("#parentofauthdiv").append(input);
      }
    } else {
      alert("Invalid Input!!");
      document.getElementById("authorscount").value = "0";
    }
  }




  function sendOtpToEmail(a) {


    /* $.ajax({
      url: "./CheckEmail.php",
      type: "GET",
      data: 'email=' + a,
      crossDomain: true,
      success: function(result) {
        if(!result.status == true){
          Swal.fire(
          'sorry',
          'Something went wrong Please Try again',
          'error'
        );
        }
        
      },

      error: function(result) {
        Swal.fire(
          'OH No!',
          'Something went wrong Please Try again',
          'error'
        );
      }

    }); */


     $.ajax({
       url: "./SendOtpApi.php",
       type: "GET",
       data: 'email=' + a,
       crossDomain: true,
       success: function(result) {

         localStorage.setItem("otp", result);
         Swal.fire(
           'sent!',
           'OTP sent successfully to "' + a + '"',
           'success'
         );

       },

       error: function(result) {
         Swal.fire(
           'OH No!',
           'Something went wrong Please Try again',
           'error'
         );
       }

     });

  }

  /* function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  } */

  /* function validate() {
    var $result = $("#result");
    var email = $("#email").val();
    $result.text("");

    if (validateEmail(email)) {
      $result.text(email + " is valid :)");
      $result.css("color", "green");
    } else {
      $result.text(email + " is not valid :(");
      $result.css("color", "red");
    }
    return false;
  } */

  /* $("#validate").on("keyup", validate); */

  function validateEmail(b) {
    var otp = localStorage.getItem('otp');
    if (otp == b) {
      document.getElementById('submit').style = "display:block";

    } else {
      document.getElementById('submit').style = "display:none";
      Swal.fire(
        'Wrong',
        'OTP is not valid please try again',
        'error'
      );
    }
  }

  function uploadValidation(file) {
    var fileInput = document.getElementById(file);
    var filePath = fileInput.value;
    /* var allowedExtensions = /(\.pdf)$/i ||; */
    var allowedExtensions = /^(([a-zA-Z]:)|(\\{2}\w+)\$?)(\\(\w[\w].*))+(.doc|.docx|.DOC|.DOCX|.pdf|.PDF)$/;;
    if (!allowedExtensions.exec(filePath)) {
      /* swal.fire('Please upload pdf or text file.'); */
      Swal.fire(
        'Warning',
        'Please upload pdf or text file.',
        'warning'
      );
      fileInput.value = '';
      return false;
    } else {
      Swal.fire(
        'Success',
        'File uploaded successfully.',
        'success'
      );
    }
  }
</script>
</script>

</html>