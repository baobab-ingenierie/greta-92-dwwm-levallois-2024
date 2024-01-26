<?php
include_once('gestion_chambres.php');
// enum RoomType
// {
//     case Simple;
//     case Double;
//     case Suite;
// }
function reserverChambre(string $type, string $begin, array &$rooms, int $duration = 1): array
{
    $end = date('Y-m-d', strtotime($begin . ' +' . $duration . ' days'));

    foreach ($rooms as &$room) {
        if ($type === $room['type'] && (/*$room['free'] ||*/ strtotime($room['endDate']) <= strtotime($begin))) {
            $room['free'] = false;
            return ['no' => $room['no'], 'cost' => $room['price'] * $duration, 'beginDate' => $begin, 'endDate' => $end, 'nights' => $duration];
        }
    }
    throw new Exception('Aucune chambre de ce type n\'est disponible pour cette période.');
}

// TEST
$result = reserverChambre('Simple', '2024-01-27', $rooms, 5);
$result = reserverChambre('Simple', '2024-03-27', $rooms, 15);
echo '<pre>';
var_dump($result);