<?php

require(ROOT . "model/HospitalModel.php");

function index () {
	$patients = getAllPatients();

	render("home/index", array(
		'patients' => $patients
		)
	);
}

function createPatient () {
	render("home/create", array(
		'species' => getAllSpecies(),
		'clients' => getAllClients()
	));

}

function createPatientRequest () {
	post_createPatient();
	// header("Location: index");
}

function deletePatient ($id) {
	post_deletePatient($id);
	header("Location: /hospital/home/index");
}

function editPatient ($id) {
	render("home/edit", array(
		"species" => getAllSpecies(),
		"clients" => getAllClients(),
		"patient" => getPatient($id)
	));
}

function updatePatientRequest ($id) {
	post_updatePatientRequest ($id);
	header("Location: /hospital/home/index");
}
