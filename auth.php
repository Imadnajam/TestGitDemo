<?php
include_once('ConxDB.php');

if (isset($_GET['Nom'])) {
	$sql = "SELECT fourmateur.matricul,Libelle,num_model FROM module INNER JOIN fourmateur ON fourmateur.matricul = module.matricul WHERE fourmateur.Nom = :Nom";
	$rows = $pdo->prepare($sql);
	$rows->execute(['Nom' => $_GET['Nom']]);
	$result = $rows->fetchAll(PDO::FETCH_ASSOC);
} else {
	echo "Le paramètre 'Nom' est manquant dans l'URL.";
}

?>



//////////////////////////////mmmmmmmmmmmmmmmmm
<!DOCTYPE html>
<html>

<head>
	<title>Home</title>

	<style>
		* {
			font-family: 'Montserrat', sans-serif;
		}

		body {
			width: 100%;
			margin: 0px;
			background-color: #5c54e9;

		}

		.location>a {
			text-decoration: none;
			color: white;
		}

		.location:hover {
			box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
			background-color: #5c54e9;
		}


		/*---------- Responsive Grid ---------------*/

		@media screen and (min-width: 1001px) {
			.card {
				margin-left: 32%;
				margin-top: 2%;
				padding: 0px;
				background-color: white;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				transition: 0.3s;
				width: 35%;
				border-radius: 5px;
				
			}

			.card:hover {
				box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 1);
			}

			img {
				border: 20px solid white;
				border-radius: 50%;
				margin-top: 8%;
				margin-bottom: -15% !important;
				width: 30%;
			}

			.name {
				text-align: center;
				font-size: 2.8em;
				color: #5c54e9;
				margin-top: 15%;
				margin-bottom: auto;
				text-transform: capitalize;
			}

			hr {
				width: 93%;
				height: 2px;
				background-color: #5c54e9;
				border: 0px;
			}

			.subtitle {
				text-align: center;
				font-size: 1.8em;
				color: black;
			}

			.location {
				text-align: center;
				color: white;
				font-size: 1.5em;
				display: block;
				background-color: cornflowerblue;
				padding-left: 30px;
				padding-right: 30px ;
				margin-left: 3%;
				margin-right: 7%;
				border-radius: 8px;

			}
			.location1 {
				
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  border: none;
  outline: none;
  background: none;
  padding: 0.5rem ;
  font-size: 1.2rem;
  color:cornflowerblue;
  font-family: Verdana, Geneva, Tahoma, sans-serif;

			}
			button{
				text-align: center;
				color: white;
				font-size: 1.5em;
				display: block;
				background-color: cornflowerblue;
				padding-left: 55px;
				padding-right: 55px ;
				margin-left: 30%;
				margin-right: 7%;
				border-radius: 8px;
			}
		}

		@media (min-width: 100px) and (max-width: 728px) and (orientation:portrait) {
			body {
				width: 100%;
				margin: 0px;
				background-color: #5c54e9;

			}

			hr {
				width: 93%;
				height: 2px;
				background-color: #5c54e9;
				border: 0px;
			}

			.card {
				margin-top: 10%;
				margin-left: 2%;
				margin-right: 0px;
				background-color: white;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				transition: 0.3s;
				width: 95%;
				border-radius: 5px;
			}

			.card:hover {
				box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 1);
			}

			img {
				border: 15px solid white;
				margin-bottom: -20% !important;
				border-radius: 50%;
				width: 33%;
			}

			.name {
				padding-right: 4px;
				padding-left: 4px;
				text-align: center;
				font-size: 2.5em;
				color: #5c54e9;
				margin-top: 16%;
				margin-bottom: auto;
				text-transform: capitalize;
			}

			.subtitle {
				text-align: center;
				font-size: 1.2em;
				color: black;
			}

			.icons {
				font-size: 11px;
				text-align: center;
				margin-right: 0px;
				margin-left: 0px;
				color: #5c54e9;
				margin-bottom: 40px;
			}

			.location {
				text-align: center;
				color: white;
				font-size: 0.8em;
				display: block;
				background-color: cornflowerblue;
				padding: 10px;
				margin-left: 7%;
				margin-right: 7%;
				border-radius: 8px;
			}
		}

		@media (min-width: 100px) and (max-width: 728px) and (orientation:landscape) {
			body {
				width: 100%;
				margin: 0px;
				background-color: #5c54e9;
			}

			hr {
				width: 93%;
				height: 2px;
				background-color: #5c54e9;
				border: 0px;
			}

			.card {
				margin-top: 6%;
				margin-left: 9%;
				margin-right: 0px;
				background-color: white;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				transition: 0.3s;
				width: 80%;
				border-radius: 5px;
			}

			.card:hover {
				box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 1);
			}

			img {
				border: 15px solid white;
				margin-bottom: -15% !important;
				border-radius: 50%;
				width: 25%;
			}

			.name {
				padding-right: 4px;
				padding-left: 4px;
				text-align: center;
				font-size: 2.8em;
				color: #5c54e9;
				margin-top: 16%;
				margin-bottom: auto;
				text-transform: capitalize;
			}

			.subtitle {
				text-align: center;
				font-size: 1.9em;
				color: #5c54e9;
			}

			.location {
				text-align: center;
				color: white;
				font-size: 1.5em;
				display: block;
				background-color: cornflowerblue;
				padding: 10px;
				margin-left: 7%;
				margin-right: 7%;
				border-radius: 8px;
			}
		}

		@media only screen and (min-width: 728px) and (max-width: 1000px) {
			body {
				width: 100%;
				margin: 0px;
				background-color: #5c54e9;
			}

			hr {
				width: 93%;
				height: 2px;
				background-color: #5c54e9;
				border: 0px;
			}

			.card {
				margin-top: 4%;
				margin-left: 13%;
				align-content: center;
				background-color: white;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				transition: 0.3s;
				width: 75%;
				border-radius: 5px;
			}

			.card:hover {
				box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 1);
			}

			img {
				border: 15px solid white;
				margin-bottom: -18% !important;
				border-radius: 50%;
				width: 30%;
			}

			.name {
				text-align: center;
				font-size: 2.5em;
				color: #5c54e9;
				margin-top: 16%;
				margin-bottom: auto;
				text-transform: capitalize;
			}

			.subtitle {
				text-align: center;
				font-size: 2em;
				color: #5c54e9;
			}

			.location {
				text-align: center;
				color: white;
				font-size: 1.8em;
				display: block;
				background-color: cornflowerblue;
				padding: 10px;
				margin-left: 7%;
				margin-right: 7%;
				border-radius: 8px;
			}
		}
	</style>


</head>

<body>

	<div class="card animated fadeIn">
		<center><img class="center animated rollIn" src="img/p1.jpg" alt="avatar"></center>
		<hr>
		<div class="name">
			<?php echo 'Bienvenue ' . $_GET['Nom']  ?>
		</div>
		<p class="subtitle">fourmateur</p>
		<form action="insert.php" method="$_GET">

			<select class="location" name="MDL" id="">
				<?php foreach ($result as $row) : ?>
					<option value="<?= $row['num_model']  ?>"><?= $row['num_model'] ." : ". $row['Libelle']    ?></option>
				<?php endforeach ?>

			</select>

			<br>
			<input  type="hidden" name="MT" value="<?php echo $row['matricul'] ?>">
			<input class="location1"  type="text" name="Group" placeholder="Entrer le group"required>
			<input class="location1"  type="date" name="Jour" required>
			<input type="datetime" name="Debut" class="location1" placeholder="heure Début"  required>
			<input type="datetime" name="Fin" class="location1" placeholder="heure Fin">
<br>

			<button type="submit">submit</button>
		</form>



	</div>

</body>

</html>
