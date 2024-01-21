<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<?php 
	
	function sukses($message, $location){
		echo"
			<script>
				swal({ 
					icon: 'success',
					title: 'Success',
					text:  '$message'}).then(okay => {
					if (okay) {
					window.location.href = '$location';
					}
				});
			</script>
		";
	}

	function gagal($message, $location){
		echo"
			<script>
				swal({ 
					icon: 'error',
					title: 'Failed',
					text:  '$message'}).then(okay => {
					if (okay) {
					window.location.href = '$location';
					}
				});
			</script>
		";
	}

	function warning($message, $location){
		echo"
			<script>
				swal({ 
					icon: 'warning',
					title: 'Warning',
					text:  '$message'}).then(okay => {
					if (okay) {
					window.location.href = '$location';
					}
				});
			</script>
		";
	}
	
	?>

</body>
</html>
