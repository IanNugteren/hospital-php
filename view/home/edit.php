<form action="<?= URL ?>home/updatePatientRequest/<?= $patient['patient_id'] ?>" method="POST">
		<h3>Naam</h3>
		<input type="text" name="name" placeholder="Name" value="<?= $patient['patient_name'] ?>">
		<h3>species</h3>
		<select type="text" placeholder="species" name="species" required>
            <?php
                foreach($species as $specie)
                {
                    echo "<option value=" . $specie['species_id'] .">" . $specie['species_description'] ."</option>";
				}
            ?>
        </select>
		<h3>Status</h3>
		<input type="text" name="status" placeholder="Status" value="<?= $patient['patient_status'] ?>">
		<h3>Client</h3>
		<select type="text" placeholder="client" name="client" required>
            <?php
                foreach($clients as $client)
                {
                    echo "<option value=" . $client['client_id'] .">" . $client['client_firstname'] . " " . $client['client_lastname'] ."</option>";
                }
            ?>
		<input type="submit">
	</form>
	