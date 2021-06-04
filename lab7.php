<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab7</title>
</head>
<body>
	<h3>Привітання</h3>
		
		<?php  
			echo 'Hello, World!';
		?>
	
	<h3>Точний час</h3>
		
		Сьогодні <?php echo date('d.m.Y h:i') ?>

	<h3>Змінні</h3>
		
		<?php
			$a = 50; 					// ціле число
			$b = 0.5; 					// дробові числа
			$c = 'NUBiP'; 				// строка
			$d = true; 					// булевий тип
			$e = array(
				'name' => 'Владислав',
				'surname' => 'Войт',
				'age' => 22,
				'byear' => 1999,
				'education' => array('Школу закінчив у 2016р', 'Освітній ступінь Бакалавр у 2020р')
			);							// багатомірний масив
			echo 'Мене звати ' .$e['name']. ' ' .$e['surname'].'.<br/>'; 
			echo 'Я народився ' .$e['byear']. ' року, зараз мені ' .$e['age']. '.<br/>';
			echo 'Моя освіта: ' .$e['education'][0], ', ' .$e['education'][1]. '.<br/>';
		?>

		<h3>Математичні операції</h3>

			<?php
				$a = 25;
				$b = 5;

				echo '25 + 5 = ' .$a + $b. '<br/>';
				echo '25 - 5 = ' .$a - $b. '<br/>';
				echo '25 * 5 = ' .$a * $b. '<br/>';
				echo '25 / 5 = ' .$a / $b. '<br/>';
				echo abs(-100). '<br/>';
				echo round(50.99). '<br/>';
				echo floor(50.99). '<br/>';
				echo ceil(50.11).'<br/>';
				echo rand(0, 100). '<br/>';
				echo min(2,5,9.15,22,44,56).'<br/>';
				echo max(2,5,9.15,22,44,56). '<br/>';
			?>

		<h3>Умовні оператори</h3>
			
			<?php  
				$rating = 75;

				if ( $rating >=60 or $rating <=100) {
					echo 'Ваша оцінка задовільна!';
				} else {
					echo 'Ваша оцінка незадовільна!';
				}
			?>

		<h3>Цикли</h3>
		<h4>for</h4>
			
			<?php  
				for ( $i = 1; $i <= 5; $i++) { 
					echo $i;
					if ($i % 2 ==0) {
						echo ' - Число парне';
					} else {
						echo ' - Число непарне';
					}

					echo '<br>';
				}
			?>

		<h4>while</h4>
			
			<?php  
				$numb = 10;
				while ($numb <=15) {
					echo 'Строка '.$numb.'<br/>';
					$numb ++;
				}
			?>

		<h4>foreach</h4>	

			<?php 
				$names = array(
					'Alisson', 
					'Joel',
					'Robert',
					'Virgil',
					'Mane'
			);

				foreach ($names as $value) {
					echo $value.'<br/>';
				}
			?>
		<h3>Фунції</h3>

			<?php  
				function get_bigger($a, $b){
					if ( $a > $b)
					{
						return $a;
					} else {
						return $b;
					}	
				}

				$bigger = get_bigger(10,20);
				echo $bigger;
			?>


</body>
</html>