<?php

require(ROOT . "model/PatientModel.php");

function index () {
	$patients = getAllPatients();

	render("home/index", array(
		'patients' => $patients
		)
	);
}

function createPatient () {
	render("home/create");
}

function createPatientRequest () {
	post_createPatient();
	header("Location: index");
}

function deletePatient ($id) {
	post_deletePatient($id);
	header("Location: /hospital/home/index");
}
