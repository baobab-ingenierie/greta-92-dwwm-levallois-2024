<?php
echo "<pre>";
include_once "./class/Customer.class.php";

// Instanciation 
// $cust1 = new Customer("Nader", null, "32412", null, "0123456789", null);
$cust1 = new Customer("Nader", "23145", "0123456789");

// $cust1->name = "Guillaume";
$cust1->setName("Jérémy");
$cust1->email = "guigui@gmail.com";
$cust1->phone = "+33612345678";
// $cust1->zip = "toto mange du gateau";
try {
    $cust1->setZip("FR23Y");
} catch (\Throwable $e) {
    echo $e->getCode() . "\n";
    echo $e->getMessage() . "\n";
    echo $e->getFile() . "\n";
    echo $e->getLine() . "\n";
}
var_dump($cust1);

// Insertion
$post = [
    "name" => "Priscilla",
    "address" => "12 rue Joli Bois",
    "zip" => "23856",
    "city" => "Saint-Cucu",
    "phone" => "0645231876",
    "email" => "prisca@jolibois.com",
];

echo $cust1->create("clients", $post) . "\n";
echo $cust1->read("clients", "name", "Maryam") . "\n";
echo $cust1->readAll("clients") . "\n";