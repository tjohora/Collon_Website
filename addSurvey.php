<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		
		<title> Collon Survey ALL </title>
		
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		
		<link rel="stylesheet" type="text/css" href="css/survey.css" />
		
	</head>
	
	<body>
		<main>
			<header>
			<img src = "images/banner.jpg" height = "200" class="floatright" alt = "Sign of Collon(Irish spelling)">
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

			<h2> Search results for the whole survey </h2>
			
			<?php
				$theUserName = $_POST["userName"];
				$theUserAddress = $_POST["userAddress"];
				$theUserAge = $_POST["userAge"];
				$theQuestion1 = $_POST["question1"];
				$theQuestion2 = $_POST["question2"];
				$theQuestion3 = $_POST["question3"];
				$theUserComment = $_POST["userComment"];
				
				if(empty($theUserName)) {
					$theUserName = "Anonymous";
				}
				
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
				
				$query = "INSERT INTO survey (userName, userAddress, userAge, question1, question2, question3, userComment) VALUES (:theUserName, :theUserAddress, :theUserAge, :theQuestion1, :theQuestion2, :theQuestion3, :theUserComment)";
				
				$statement = $db->prepare($query);
				
				$statement->bindValue(":theUserName", $theUserName);
				$statement->bindValue(":theUserAddress", $theUserAddress);
				$statement->bindValue(":theUserAge", $theUserAge);
				$statement->bindValue(":theQuestion1", $theQuestion1);
				$statement->bindValue(":theQuestion2", $theQuestion2);
				$statement->bindValue(":theQuestion3", $theQuestion3);
				$statement->bindValue(":theUserComment", $theUserComment);
				
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
			
				
				<tr>
					<td><?php echo $theUserName; ?></td>
					<td><?php echo $theUserAddress; ?></td>
					<td><?php echo $theUserAge; ?></td>
					<td><?php echo $theQuestion1; ?></td>
					<td><?php echo $theQuestion2; ?></td>
					<td><?php echo $theQuestion3; ?></td>
					<td><?php echo $theUserComment; ?></td>
				</tr>	
			</table>

			<input class="button" type="button" onclick="window.location.href = 'survey.html'" value="Return to survey search" />
			
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