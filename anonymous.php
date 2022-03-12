<?php
	include('config.php');

	if(isset($_POST['register'])) {
		
			$a = $_POST['category'];
			$b = $_POST['date'];
			$c = $_POST['hours'];
			$d = $_POST['min'];
			$e = $_POST['shift'];
			$f = $_POST['state'];
			$g = $_POST['city'];				
			$h = $_POST['police'];
			$i = $_POST['incident'];
			$j = $_POST['comment'];
			
			$time = $c .':'.$d .' '.$e; 

		$sql = "INSERT INTO anonymous (category,date ,time,state, city,police_station,incident,comment) VALUES ('$a', '$b', '$time','$f', '$g','$h','$i','$j')";
			$sql1 = mysqli_query($db,$sql) or die(mysqli_error());
		
			echo "<script>alert('Your Item uploaded sucessfully !!!');</script>";
			echo "<script>window.location.href='index.html';</script>";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SafetyFirst - Security is priority | Lost Item Registration</title>
	<style type="text/css">
		.indent-small {
  margin-left: 5px;
}
.form-group.internal {
  margin-bottom: 0;
}
.dialog-panel {
  margin: 10px;
}
.datepicker-dropdown {
  z-index: 200 !important;
}
.panel-body {
  background: #e5e5e5;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  font: 600 15px "Open Sans", Arial, sans-serif;
}
label.control-label {
  font-weight: 600;
  color: #777;
}
	</style>

	<link href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Complain and Incident Details</h5>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' method="POST">
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Category of Complaint</label>
            <div class='col-md-6'>
              <select class='form-control' id='id_accomodation' name='category'>
			  <option>Select Category of Complaint</option>
              	<option value="Child Pornography (CP)-Child Sexual Abuse Material (CSAM)">Child Pornography (CP)-Child Sexual Abuse Material (CSAM)</option>
		<option value="Rape/Gang Rape (RGR)-Sexually Abusive Content">Rape/Gang Rape (RGR)-Sexually Abusive Content</option>
		<option value="Publishing or Transmitting Sexually Obscene material in electronic form">Publishing or Transmitting Sexually Obscene material in electronic form</option>
		<option value="Publishing or transmitting of material containing sexually explicit act in electronic form">Publishing or transmitting of material containing sexually explicit act in electronic form</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Name</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <input class='form-control col-md-3' name='date' placeholder='dd-mm-yyyy' type='date'>
                </div>
              </div>
              <div class='col-md-2 indent-small'>
                  <div class='form-group internal'>
                  <select class='form-control' name='hours'>
                    <option>HH</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                
                  </select>
                </div>
              </div>
             <div class='col-md-2 indent-small'>
                  <div class='form-group internal'>
                  <select class='form-control' name='min' >
                    <option>MM</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                
                  </select>
                </div>
              </div>
             <div class='col-md-2 indent-small'>
                  <div class='form-group internal'>
                  <select class='form-control' name='shift'>
                    <option>AM</option>
                    <option>PM</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
      
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>State</label>
            <div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>

				<select class='form-control' onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>

                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>City</label>
            <div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>
                  
				  <select id ="state" class="form-control" name='city' required></select>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Police Station</label>
            <div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>
				<input type="text" class='form-control' name='police' placeholder="Enter police station name">

                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Where this incident occur</label>
            <div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>
                  <select class='form-control' name='incident'>
                    <option value="Email">Email</option>
		<option value="Facebook">Facebook</option>
		<option value="Instagram">Instagram</option>
		<option value="Snapchat">Snapchat</option>
		<option value="Twitter">Twitter</option>
		<option value="WhatsApp">WhatsApp</option>
		<option value="Website Url">Website Url</option>
		<option value="Youtube">Youtube</option>
		<option value="LinkedIn">LinkedIn</option>
		<option value="Telegram">Telegram</option>
		<option value="Other">Other</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Comments</label>
            <div class='col-md-6'>
              <textarea class='form-control' name='comment' placeholder='Additional comments' rows='3'></textarea>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit' name="register">Submit</button>
            </div>
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<script type="text/javascript">
	$(document).ready(function() {  
  $('.multiselect').multiselect();
  $('.datepicker').datepicker();  
});

</script>

<script src="js/cities.js"></script>
<script language="javascript">print_state("sts");</script>
</body>
</html>