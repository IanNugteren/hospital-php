<form action="<?= URL ?>species/updateSpeciesRequest" method="post">
    <h3>Species Description</h3>
    <input type="text" name="description" value="<?= $specie['species_description'] ?>">
	<input type="submit" value="Submit">
</form>
