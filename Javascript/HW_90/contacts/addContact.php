<?php
require 'db.php';

$json = file_get_contents("php://input");
$newContact = json_decode($json);

echo $newContact['firstName'];

function getParam($param) {
    if(! empty($newContact[$param])) {
        return $newContact[$param];
    } 
    return "UNKNOWN";
}

$firstName = getParam("firstName");
$lastName = getParam("lastName");
$email = getParam("email");
$phone = getParam("phone");

$query = "INSERT INTO CONTACTS (firstName, lastName, email, phone) 
            VALUES (:firstName, :lastName, :email, :phone)";

$statement = $db->prepare($query);
$statement->bindParam("firstName", $firstName);
$statement->bindParam("lastName", $lastName);
$statement->bindParam("email", $email);
$statement->bindParam("phone", $phone);

$rowsInserted = $statement->execute();
if(!$rowsInserted) {
    http_response_code(500);
    exit("Unable to add contact");
}

http_response_code(201);