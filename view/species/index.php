<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>Species id</th>
				<th>Species description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php 
				foreach ($species as $specie) {
					echo "<tr>";
					echo "<td>" . $specie['species_id'] . "</td>";
					echo "<td>" . $specie['species_description'] . "</td>";
					echo "<td><a href=\"" . URL . "species/deleteSpecies/" . $specie['species_id'] . "\">Verwijderen</a></td>";
					echo "<td><a href=\"" . URL . "species/editSpecies/" . $specie['species_id'] . "\">Edit</a></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
	<a href="<?= URL ?>species/createSpieces">Spieces toevoegen</a>