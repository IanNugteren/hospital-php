	<h2>Clients</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php 
				foreach($clients as $client) {
					echo "<tr>";
					echo "<td>" . $client['client_firstname'] . "</td>";
					echo "<td>" . $client['client_lastname'] . "</td>";
					echo "<td><a href=\"" . URL . "clients/deleteClient/" . $client['client_id'] . "\">Verwijderen</a></td>";
					echo "<tr>";
				}
			?>
		</tbody>
	</table>
	<a href="<?= URL ?>clients/createClient">Client toevoegen</a>