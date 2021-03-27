<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>InnovationDrive</title>
    <style type="text/css">
      label{
        font-weight: bolder;
      }
    </style>
  </head>
  <body>
    
    <!-- Container -->
    <section class="container mt-5">
      <form>
        <section class="row">
          <!-- LEFT Side -->
          <div class="col-6">
            <!-- Degree -->
            <div class="row mb-2 ">
              <label for="degree" class="col-3 form-label">Degree:</label>
              <div class="col-8">
                <select class="degree form-control" id="degree" name="degree">
                  <option>Select Degree</option>
                  <!-- <?php 
                    foreach ($degree as $val) 
                    {
                      echo "<option value='$val->id'>".$val->name."</option>";
                    }
                   ?> -->
                </select>
              </div>
            </div>
            <!-- End Degree -->
            <!-- Name -->
            <div class="row mb-2">
              <label for="name" class="col-3 form-label">Name:</label>
              <div class="col-8">
                <input class="form-control" type="text" name="name" id="name" >              
              </div>
            </div>
            <!-- End Name -->

            <!-- DOB -->
            <div class="row mb-2">
              <label for="dob" class="col-3 form-label">DOB:</label>
              <div class="col-8">
                <input class="form-control" type="date"  data-date="" data-date-format="DD MMMM YYYY" name="dob" id="dob">
              </div>
            </div>
            <!-- End DoB-->
            <!-- MobileNumber -->
            <div class="row mb-2">
              <label for="mobNo" class="col-3 form-label">Mobile No:</label>
              <div class="col-8">
                <input  class="form-control" type="text" maxlength="11" minlength="11" name="mobNo" id="mobNo">
              </div>
            </div>
            <!-- End MobileNumber -->
          </div>
          <!-- END LEFT Side -->
          <!-- END Right Side -->
          <div class="col-6">
            <!-- Class -->
            <div class="row mb-2">
              <label for="class" class="col-3 form-label">Class:</label>
              <div class="col-8"> 
                <select class="class form-control" id="class" name="class">
                  <option>Select Class</option>
                  <!-- <?php 
                    foreach ($classes as $val) 
                    {
                      echo "<option value='$val->id'>".$val->name."</option>";
                    }
                  ?> -->
                </select>
              </div>
            </div>
            <!-- End Class -->
            <!-- Father Name -->
            <div class="row mb-2">
              <label for="fname" class="col-3 form-label">Father Name:</label>
              <div class="col-8">
                <input  class="form-control" type="text" name="fname" id="fname">
              </div>
            </div>
            <!-- End Father Name -->
            <!-- CNIC -->
            <div class="row mb-2">
              <label for="cnic" class="col-3 form-label">CNIC:</label>
              <div class="col-8">
                <input class="form-control" type="number" name="cnic" id="cnic">
              </div>
            </div>
            <!-- End CNIC-->
            <!-- Father CNIC -->
            <div class="row mb-2">
              <label for="fcnic" class="col-3 form-label">Father CNIC:</label>
              <div class="col-8">
                <input class="form-control" type="number" name="fcnic" id="fcnic">
              </div>
            </div>
            <!-- End Father CNIC-->
          </div>
          <!-- END Right Side -->
          <!-- Address -->
          <section class="col-12 mb-3">
            <div class="row container">
            <label for="address" class="col-2 form-label" style="margin-left: -20px;">Address:</label>
            <div class="col-10" style="margin-left:20px !important; ">
              <textarea class="form-control" name="address" id="address"></textarea>
            </div>
          </section>
          <!-- End Address -->
          <!-- Status -->
          <section class="col-12">
            <div class="row container">
              <label for="status" class="col-2 form-label" style="margin-left: -2%;">Status:</label>
              <div class="col-4" style="margin-left:2% !important; ">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="active" value="1">
                    Active
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="inactive" value="0">
                    In-Active
                </div>
              </div>
              <!--End Status  -->
              <!--Scholorship  -->
              <div class="col-4" style="margin-left:2% !important; ">
                <label class=" col-5 form-label"> Scholorship:      </label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="scholorship" name="scholorship">
                    Required
                </div>
              </div>
              <!--END Scholorship  -->
            </div>
          </section>
          <!-- End Status -->
  
      <div class="offset-10 col-2 mt-3">
        <div class="container" style="margin-left:-15% !important; ">
        <button type="submit" class="btn btn-primary form-control">
          Save
        </button>
      </div>
      </form>
    </section>
    <!-- End Container -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="https://github.com/Eonasdan/bootstrap-datetimepicker/blob/master/src/js/bootstrap-datetimepicker.js"></script>
   -->

    <script type="text/javascript">
      $( document ).ready(function() {

        $('#fcnic').prop("disabled",true);

       });
    
      $( "#mobNo" ).on( "keyup", function( event ) 
      {
        var $this = $(this);
        var input = $this.val();
        input = input.replace(/[\D\s\._\-]+/g, "");
        var split = 11;
        var chunk = [];
        for (var i = 0, len = input.length; i < len; i += split) {
            chunk.push( input);
        }

        $this.val(function() 
        {
          return chunk.join(" ").toUpperCase();
        });
      } );

      </script>
  </body>
</html>