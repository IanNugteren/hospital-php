<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hospital</title>
	<link rel="stylesheet" href="public/css/style.css" type="text/css">
</head>
<body>
	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Client</th>
				<th>Status</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php 
				foreach ($patients as $patient) {
					echo "<tr>";
					echo "<td>" . $patient['patient_name'] . "</td>";
					echo "<td>" . $patient['species_description'] . "</td>";
					echo "<td>" . $patient['client_firstname'] . "</td>";
					echo "<td>" . $patient['patient_status'] . "</td>";
					echo "<td><a href=\"" . URL . "home/deletePatient/" . $patient['patient_id'] . "\">Verwijderen</a></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
	<a href="<?= URL ?>home/createPatient">Patient toevoegen</a>