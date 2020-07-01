<!DOCTYPE html>
<html lang="en">
<head>
	<title>site en maintenance</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/maintenance/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/maintenance/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/maintenance/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/maintenance/vendor/animate/animate.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/maintenance/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/maintenance/css/util.css">
	<link rel="stylesheet" type="text/css" href="/maintenance/css/main.css">
<!--===============================================================================================-->
	<script src="https://kit.fontawesome.com/94491a0993.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	
	<!--  -->
	<div class="simpleslide100">
		<div class="simpleslide100-item bg-img1" style="background-image: url('/maintenance/images/bg01.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('/maintenance/images/bg02.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('/maintenance/images/bg03.jpg');"></div>
	</div>

	<div class="size1 overlay1">
		<!--  -->
		<div class="size1 flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-50">
			<h3 class="l1-txt1 txt-center p-b-25" style="font-family:Montserrat;">
				Ce site est en maintenance.
			</h3>

			<p class="m2-txt1 txt-center p-b-48" style="font-family:Montserrat;">
				Notre site Web est en construction, suivez-nous pour une mise à jour maintenant!
			</p>

			
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="/maintenance/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/maintenance/vendor/bootstrap/js/popper.js"></script>
	<script src="/maintenance/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/maintenance/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/maintenance/vendor/countdowntime/moment.min.js"></script>
	<script src="/maintenance/vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="/maintenance/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="/maintenance/vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="/maintenance/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="/maintenance/js/main.js"></script>

</body>
</html>