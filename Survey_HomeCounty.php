<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		
		<title> Collon Survey Some-County </title>
		
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		
		<link rel="stylesheet" type="text/css" href="css/survey.css" />
		
	</head>
	
	<body>
		<main>
			<header>
			<img src = "images/NewBanner.jpg" width = "1160" height="500" alt = "Sign of Collon(Irish spelling)">
			</header>
			
			<nav id="navLinks"> 
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="history.html">History</a></li>
					<li><a href="area.html">Area</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="survey.html">Survey</a></li>
				</ul>
			</nav>
			
			<section>
			
			<h1> Survey </h1>

			<h2> Search results for Home County of submitters </h2>
			
			<?php
				
				$whichCounty = $_POST["homeCounty"];
				
				$dsn='mysql:host=localhost;dbname=collonsite';
				$username = 'root';
				$password = '';
				
				try {
					$db = new PDO($dsn, $username, $password);
				} catch(PDOException $e) {
					$error_message = $e->getMessage();
					echo "<h1>DATABASE PROBLEM: " . $error_message . ".</h1>";
					exit();
				}
				
				$query = "SELECT * FROM survey WHERE userAddress = :whichCounty ORDER BY userName";
				
				$statement = $db->prepare($query);
				
				$statement->bindValue(":whichCounty", $whichCounty);
				
				$statement->execute();
			
				$all_queries = $statement->fetchAll();
			
				$statement->closeCursor();
			?>
			
			<table>
				<tr>
					<th>Submitters Name</th>
					<th>Submitters Home County</th>
					<th>Submitters Age </th>
					
					<th>Have you been to Collon?</th>
					<th>Do you think Collon looks nice?</th>
					<th>Why/Why not?</th>
					
					<th>Any other comments?</th>
				</tr>
			
				<?php foreach ($all_queries as $one_query) : ?>
				<tr>
					<td><?php echo $one_query['userName']; ?></td>
					<td><?php echo $one_query['userAddress']; ?></td>
					<td><?php echo $one_query['userAge']; ?></td>
					<td><?php echo $one_query['question1']; ?></td>
					<td><?php echo $one_query['question2']; ?></td>
					<td><?php echo $one_query['question3']; ?></td>
					<td><?php echo $one_query['userComment']; ?></td>
				</tr>	
				<?php endforeach; ?>
			</table>
			
		<br/>
			
				
			</section>
			
			<footer>
				<div id="footer_list">
					<ul>
						<li>Copyright of TJ O'Hora</li>
						<li>Collon</li>
						<li>Co.Louth</li>
						<li>Ireland</li>
					</ul>
				</div>
			</footer>
		</main>
	</body>
</html>