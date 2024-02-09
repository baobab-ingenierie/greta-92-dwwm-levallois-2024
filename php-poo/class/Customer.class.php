<?php
/**
 * Classe Customer
 */
class Customer
{
    // Constantes de classe
    const PATTERN_NAME = "/^[A-Za-zÀ-ÖØ-öø-ÿ\- ']{1,30}$/";
    const PATTERN_ZIP = "/^[0-9]{5}$/";

    // Variables de classe : propriétés ou attributs
    private string $name;
    public string $address;
    private string $zip; // 5 chiffres
    public string $city;
    public string $phone; // 15 caractères
    public string $email;

    /**
     * Constructeur de la classe Customer
     * 
     * @author Lesly <lesly@lodin.org>
     * @param string $newName - Nom (uniquement caractères alphabétiques)
     * @param ?string $newCity - Ville de résidence du client
     * @param string $newZip - Code postal
     */
    public function __construct(string $newName, string $newZip, string $newPhone, string|null $newAddress = "", string|null $newCity = "", string|null $newEmail = "")
    {
        $this->setName($newName);
        $this->address = $newAddress;
        $this->setZip($newZip);
        $this->city = $newCity;
        $this->phone = $newPhone;
        $this->email = $newEmail;
    }

    // Accesseurs ou Getters
    public function getName(): string
    {
        return $this->name;
    }
    public function getZip(): string
    {
        return $this->zip;
    }

    // Mutateurs ou Setters
    public function setName(string $newName): void
    {
        if (preg_match(self::PATTERN_NAME, $newName)) {
            $this->name = $newName;
        } else {
            throw new Exception(__CLASS__ . " : Nom incorrect.", 1001);
        }
    }
    public function setZip(string $newZip): void
    {
        if (preg_match(self::PATTERN_ZIP, $newZip)) {
            $this->zip = $newZip;
        } else {
            throw new Exception(__CLASS__ . " : Code postal incorrect.", 1002);
        }
    }

    // CRUD
    public function create(string $table, array $post = array()): string
    {
        //Créer une connexion via PDO au préalable !!!
        $sql = "INSERT INTO $table(" . implode(",", array_keys($post)) . ") VALUES('" . implode("','", array_values($post)) . "')";
        return $sql;
    }

    public function read(string $table, string $col, string|int $id): string
    {
        //Créer une connexion via PDO au préalable !!!
        $sql = "SELECT * FROM $table WHERE $col='$id'";
        return $sql;
    }
    public function readAll(string $table): string
    {
        //Créer une connexion via PDO au préalable !!!
        $sql = "SELECT * FROM $table";
        return $sql;
    }
}
