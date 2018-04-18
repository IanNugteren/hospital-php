<form action="<?= URL ?>clients/updateClientRequest/<?= $client['client_id'] ?>" method="post">
    <h3>First Name</h3>
    <input type="text" name="firstname" value="<?= $client['client_firstname'] ?>">
    <h3>Last Name</h3>
    <input type="text" name="lastname" value="<?= $client['client_lastname'] ?>">
	<input type="submit" value="Submit">
</form>
