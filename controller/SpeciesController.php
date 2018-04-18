<?php

require(ROOT . "model/HospitalModel.php");

function index () {
	$species = getAllSpecies();

	render("species/index", array(
		'species' => $species
		)
	);
}

function createSpieces () {
	render("species/create");
}

function createSpeciesRequest () {
	post_createSpecies();
	header("Location: index");
}

function deleteSpecies ($id) {
	post_deleteSpecies($id);
	header("Location: /hospital/species/index");
}

function editSpecies ($id) {
	$specie = getSpecie($id);

	render("species/edit", array(
		"specie" => $specie
	));
}

function updateSpeciesRequest ($id) {
	post_updateSpeciesRequest($id);
	header("Location: /hospital/clients/index");
}
