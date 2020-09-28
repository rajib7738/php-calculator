<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<style type="text/css">
		.container{
			background: #CB4335;
			padding: 200px 0;
		}
		.calcultor{
			margin: 0 auto;
			background: #212F3D;
			width: 50%;
			padding: 30px 30px;
			border-radius: 10px;
		}
		.heading h1{
			color: #CB4335;
			font-size: 40px;
			padding-left: 20px;
			letter-spacing: 2px;
		}
		
		.calculator-item{
			display: flex;
			padding-top: 20px;
			padding-bottom: 50px;
		}
		.form{
			display: block;
			margin-left: 80px;
			margin-right: 20px;

		}
		.form-control{
			width: 100%;
			margin-bottom: 30px;
			height: 30px;
			border-radius: 10px;
			border:none;
			padding: 10px 20px;
			font-size: 20px;
		}
		.submit-btn{
			background: #26C5B5;
			color: #fff;
			font-size: 15px;
			padding: 15px 30px;
			border-radius: 10px;
			margin-top: 30px;
			border:none;
			cursor: pointer;
		}
		select{
			width: 100px;
			height: 30px;
			border-radius: 5px;
		}
		.select option{
			font-size: 16px;
			padding: 15px 30px;

		}
		.calculator-result p{
			font-size: 25px;
			color: #fff;
			text-align: center;
			
		}
	</style>

	<div class="container">
		<div class="calcultor">
			<div class="calculator-item">
				<div class="heading">
					<h1>PHP<br> CALCULATOR</h1>
				</div>
				<div class="form">
					<form action="" method="POST">
						<input type="text" name="number1" class="form-control" placeholder="Write First Number">
						<input type="text" name="number2" class="form-control" placeholder="Write Second Number">

						<div class="select">
							<select name="select">
								<option value="add">ADD</option>
								<option value="sub">SUB</option>
								<option value="multi">MULTI</option>
								<option value="div">DIV</option>
							</select>

						</div>
						<input type="submit" value="SUBMIT" name="submit" class="submit-btn">
					</form>

				</div>
			</div>
			<div class="calculator-result">
				<p>
					<?php 

						if(isset($_POST['submit'])){
							$num1 = $_POST['number1'];
							$num2 = $_POST['number2'];

							$operation = $_POST['select'];

							switch ($operation) {
								case "add": $sum = $num1 + $num2 ;
									echo "The Additon of Two Numer is {$sum}";
									break;
								case "sub": $sub = $num1 - $num2 ;
									echo "The Subtraction of Two Numer is {$sub}";
									break;
								case "multi": $multiple = $num1 * $num2 ;
									echo "The Multiplication of Two Numer is {$multiple}";
									break;
								case "div": $div = $num1 / $num2 ;
									echo "The Division of Two Numer is {$div}";
									break;
								default: echo "Sorry its Not Exist";		
							};
						};

					?>
				</p>
			</div>
		</div>
	</div>
	
</body>
</html>