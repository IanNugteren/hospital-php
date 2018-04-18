<?php
// All patients, clients, spieces out of the database

function getAllPatients () {
	$db = openDatabaseConnection();
	$sql = "SELECT patients.patient_name, species.species_description, clients.client_firstname, patients.patient_status, patients.patient_id FROM patients
	INNER JOIN species 
	ON patients.species_id = species.species_id 
	INNER JOIN clients
	ON patients.client_id = clients.client_id" ;

	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function getAllClients () {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function getAllSpecies() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// get 1 specie , client or patient

function getSpecie ($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$db = null;
	return $query->fetch();
}


// Post create functions
function post_createSpecies () {
	$speciesDescription = $_POST["description"];
	$db = openDatabaseConnection();
	$sql = "INSERT INTO species (species_description) VALUES (:speciesDescription)";
	$query = $db->prepare($sql);
	$query->execute(array(
		":speciesDescription" => $speciesDescription
	));
	$db = null;
}

function post_createClient () {
	$clientFirstName = $_POST["firstname"];
	$clientLastName = $_POST["lastname"];
	$db = openDatabaseConnection();
	$sql = "INSERT INTO clients (client_firstname, client_lastname) VALUES (:clientFirstName, :clientLastName)";
	$query = $db->prepare($sql);
	$query->execute(array(
		":clientFirstName" => $clientFirstName,
		":clientLastName" => $clientLastName
	));
	$db = null;
}

function post_createPatient () {
	$patientName = $_POST["name"];
	$patientSpieces = $_POST["species"];
	$patientStatus = $_POST["status"];
	$patientClient = $_POST["client"];
	$db = openDatabaseConnection();
	$sql = "INSERT INTO patients (patient_name, species_id, client_id, patient_status) VALUES (:patientName, :patientSpieces, :patientStatus, :patientClient)";
	$query = $db->prepare($sql);
	$query->execute(array(	
		":patientName" => $patientName,
		":patientSpieces" => $patientSpieces,
		":patientStatus" => $patientStatus,
		":patientClient" => $patientClient				
	));
	$db = null;
}

// Delete functions

function post_deletePatient ($id) {
    $db = openDatabaseConnection();
    $sql = "DELETE FROM patients WHERE patient_id = :id";
    $query = $db->prepare($sql);
    $query->execute(array(
		":id" => $id
	));
    $db = null;
}

function post_deleteClient ($id) {
	$db = openDatabaseConnection();
    $sql = "DELETE FROM clients WHERE client_id = :id";
    $query = $db->prepare($sql);
    $query->execute(array(
		":id" => $id
	));
    $db = null;
}

function post_deleteSpecies ($id) {
	$db = openDatabaseConnection();
    $sql = "DELETE FROM species WHERE species_id = :id";
    $query = $db->prepare($sql);
    $query->execute(array(
		":id" => $id
	));
    $db = null;
}

// post update

function post_updateSpeciesRequest ($id) {
	$speciesDescription = $_POST["description"];
	$db = openDatabaseConnection();
    $sql = "UPDATE species SET species_description = :speciesDescription WHERE species_id = :id";
    $query = $db->prepare($sql);
    $query->execute(array(
		":id" => $id,
		":speciesDescription" => $speciesDescription
	));
    $db = null;
}



