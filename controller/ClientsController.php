<?php

require(ROOT . "model/PatientModel.php");

function index () {
	$clients = getAllclients();

	render("clients/index", array(
		'clients' => $clients
		)
	);
}

function createClient () {
	render("clients/create");
}

function createClientRequest () {
	post_createClient();
	header("Location: index");
}

function deleteClient ($id) {
	post_deleteClient($id);
	header("Location: /hospital/clients/index");
}

