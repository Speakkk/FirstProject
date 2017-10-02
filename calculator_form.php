<html>
<head>
	<title>Калькулятор</title>
	<link rel="stylesheet" href="css/style.css?v=1">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<script type="text/javascript">
	
	function calculate_amount(){
		var cost_input = document.getElementById('cost');
		var initial_fee = document.getElementById('initial_fee');
		var amount = document.getElementById('amount');

		
			
				amount.value = initial_fee.value > 0 
					? cost_input.value - (cost_input.value * (initial_fee.value/100) )
					: initial_fee.value;
			
	}

</script>
<div id="calculator">
<form method="post">
	<table>
		<tbody>
			<tr>
				<td>Стоимость покупки имущества:</td>
				<td>
					<input id="cost" type="text" name="cost" value="<?echo $_REQUEST['cost']; ?>" onchange="calculate_amount()">
				</td>

			</tr>

			<tr>
				<td>Первоначальный взнос:</td>
				<td>
					<input id="initial_fee" type="text" name="initial_fee" value="<?echo $_REQUEST['initial_fee']; ?>" onchange="calculate_amount()">%
				</td>

			</tr>

			<tr>
				<td>Сумма кредита:</td>
				<td>
					<input id="amount" type="text" name="amount" value="<?echo $_REQUEST['amount']; ?>" 
				</td>

			</tr>

			<tr>
				<td>Ставка:</td>
				<td>
					<input type="text" name="rate" value="<?echo $_REQUEST['rate']; ?>">%<br>
					<input type="radio" name="rate_type" value="1">
					<label>Годовая</label>
					<input type="radio" name="rate_type" value="0">
					<label>Месячная</label>
				</td>

			</tr>

			<tr>
				<td>Срок кредитования:</td>
				<td>
					<input type="text" name="term" value="<?echo $_REQUEST['term']; ?>"><br>
					<input type="radio" name="term_type" value="1">
					<label>Лет</label>
					<input type="radio" name="term_type" value="0">
					<label>Месяцев</label>
				</td>

			</tr>
		</tbody>
	</table>
	<div class="button_profile">
	<input class="btn btn-info" type="submit" value="Раcсчитать" name="knopka" />
</div>
<form/>

	<div>
		<?php 
			$cost = $_REQUEST['cost'];
			$initial_fee = $_REQUEST['initial_fee'];
			$rate = $_REQUEST['rate'];
			$term = $_REQUEST['term'];
			$rate_type = $_REQUEST['rate_type'];
			$term_type = $_REQUEST['term_type'];

			$fails = [];
			if(!is_numeric($cost)){
				$fails[]='cost';
			}
			if(!is_numeric($initial_fee)){
				$fails[]='initial_fee';
			}

			if(!is_numeric($rate)){
				$fails[]='rate';
			}

			if(!is_numeric($term)){
				$fails[]='term';
			}

			if(!count($fails)){

			$amount = $initial_fee > 0 
				? $cost - ($cost * ($initial_fee/100)) 
				: $cost;

			
		}else{
			echo 'invalid' . implode(', ', $fails);
		}
			if($rate_type == "0" ){ //Месяцев

				if($term_type == "1"){
					$term = $term * 12;
					
				}
				$month_pay = $amount * (($rate/100)/(1-pow((1+$rate/100),-$term)));  
			}

			if($rate_type == "1"){ // Годовая
				if($term_type == "1" ){		
					$term = $term*12;
				}
				$month_pay = $amount * (($rate/100/12)/(1-pow((1+$rate/100/12),-$term)));

			}



 		echo "Ваш ежемесячный платеж:", " ", round($month_pay, 2) , " ", "тенге" ; 
 		echo '<br/>';
 		$overpayment_amount = $month_pay * $term;

 		echo "Размер переплаты:", " ", round($overpayment_amount, 2), " ", "тенге";
 		/*var_dump($cost);
 		var_dump($initial_fee);
 		var_dump($amount);
 		var_dump($rate);
 		var_dump($term);*/
		?> 
	</div>
</div>
</body>
</html>