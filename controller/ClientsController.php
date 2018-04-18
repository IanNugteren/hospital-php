<?php

require(ROOT . "model/HospitalModel.php");

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

function editClient ($id) {
	$client = getClient($id);

	render("clients/edit", array(
		"client" => $client
	));
}

function updateClientRequest ($id) {
	post_updateClientRequest($id);
	header("Location: /hospital/clients/index");
}

