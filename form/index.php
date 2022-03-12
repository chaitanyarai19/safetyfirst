<?php
	include('../session.php');

	if(isset($_POST['register'])) {
		
			$a = $_POST['pname'];
			$b = $_POST['pcompany'];
			$c = $_POST['pid'];
			$d = $_POST['ename'];
			$e = $_POST['emobile'];
			
			$g = $_POST['pcondition'];				
			$h = $_POST['state'];
			$i = $_POST['city'];
			$j = $_POST['dof'];
			
			$f = $login_session;

		
		$sql = "INSERT INTO items (product_name,product_company ,dof, product_id,employee_name,employee_no,police_station,product_conduction,state, city) VALUES ('$a', '$b', '$j', '$c', '$d', '$e', '$f', '$g','$h','$i')";
			$sql1 = mysqli_query($db,$sql) or die(mysqli_error());
		
			echo "<script>alert('Your Item uploaded sucessfully !!!');</script>";
			echo "<script>window.location.href='../index.html';</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>SafetyFirst - Security is priority | Lost Item Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
 
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" >
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title"><b>Registration Form</b></h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Product Name</label>
                                    <input class="input--style-4" type="text" name="pname">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Product Company</label>
                                    <input class="input--style-4" type="text" name="pcompany">
                                </div>
                            </div>
                        </div>
							<div class="row row-space">
                           <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Product IMEI No./Model No.</label>
                                    <input class="input--style-4" type="text" name="pid">
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Found</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="dof">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row row-space">
                            
                           <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Employee Name</label>
                                    <input class="input--style-4" type="text" name="ename">
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Employee Mobile</label>
                                    <input class="input--style-4" type="text" name="emobile">
                                </div>
                            </div>
                        </div>
					
						
						
						<div class="row row-space">
                           <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Police station unique code</label>
                                    <input class="input--style-4" type="text" value="<?php echo $login_session; ?>" name="police_station" disabled>
                                </div>
                            </div>
                           <div class="col-2">
                        <div class="input-group">
                            <label class="label">Product Condition</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="pcondition">
                                    <option disabled="disabled" selected="selected">Choose option</option>
									 <option>Good</option>
                                    <option>Bad</option>
                                    <option>Very bad</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div></div>
                        </div>
						
						
                        <div class="row row-space">
						<div class="col-2">
                        <div class="input-group">
                            <label class="label">State</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="state">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                   <option>Madhya Pradesh</option>
                                    <option>Uttar Pradesh</option>
                                    <option>Arunachal Pradesh</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div></div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">City</label>
                                    <input class="input--style-4" type="text" name="city">
                                </div>
                            </div>
                        </div>
                        <!--<div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>-->
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="register">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <script src="js/global.js"></script>

</body>

</html>
