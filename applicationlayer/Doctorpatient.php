<!DOCTYPE html>
<html>
<head>
	<title>Doctor Patient</title>
	<link rel="stylesheet" href="doctorpatient.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<style>
		.wrapper {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.btn {
			margin: 0 10px;
		}
	</style>
</head>

<body style="background-color: #2C3539">
	<center><p style="background-color:#3F000F; color: #f1f1f1; font-weight: bold; font-size: 50px">Doctor Patient Management System</p></center><hr>
	<div style="position: relative;">
		<img src="img1.jpg" alt="Background Image" style="width: 100%; height: auto; position: absolute; top: 0; left: 0; opacity: 0.5;">
		<div class="wrapper">
                    
			<div class="btn">
				<a href="admin.php">
					<button type="button" class="buttonA">Admin</button>
				</a>
			</div>

			<div class="btn">
				<a href="patient.php">
					<button type="button" class="buttonP">Patient</button>
				</a>
			</div>

			<div class="btn">
				<a href="doctor.php">
					<button type="button" class="buttonD">Doctor</button>
				</a>
			</div>
		</div>
	</div>
</body>
</html>
