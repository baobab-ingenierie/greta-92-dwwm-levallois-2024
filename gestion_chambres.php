<?php
echo '<pre>';

// Chambres de l'hôtel dans tableau associatif
$rooms = [
    ['no' => 212, 'type' => 'Simple', 'free' => true, 'price' => 90, 'endDate' => '2024-01-20'],
    ['no' => 303, 'type' => 'Double', 'free' => true, 'price' => 210, 'endDate' => '2024-02-13'],
    ['no' => 425, 'type' => 'Suite', 'free' => true, 'price' => 420, 'endDate' => null]
];

// var_dump($rooms);

/**
 * Liste les chambres et renvoie celles disponibles
 * @author Lesly <lesly.lodin@baobab-ingenierie.fr>
 * @version 1.0.0
 * @param string $begin - Date de début de résa
 * @param int $duration - Nombre de nuits
 * @param array $rooms - Liste des chambres
 * @return array
 */
function verifierDisponibilite(string $begin, int $duration=1, array $rooms = []): array
{
    $availables = [];

    if (strtotime($begin) && $begin !== null) {
        foreach ($rooms as $room) {
            if ($room['endDate'] === null || strtotime($room['endDate']) <= strtotime($begin)) {
                array_push($availables, $room);
            }
        }
    } else {
        echo '<p>Date de début non valide !';
    }

    return $availables;
}

// var_dump(verifierDisponibilite('toto', 3, $rooms));
// var_dump(verifierDisponibilite(date('Y-m-d'), 3, $rooms));