<?php
declare(strict_types=1);
session_start();
require_once "../models/Reservator.php";
require_once "../models/DateChecker.php";
require_once "../models/Reservation.php";

$name = $_POST['name'];
$surname = $_POST['surname'];
$date = $_POST['date'];
$dateChecker = new DateChecker();

if ($dateChecker->isDateFree($date))
{
    $reservator = new Reservator();
    $reservation = new Reservation($name, $surname, $date);
    $reservator->reserve($reservation);
    $_SESSION['message'] = 'Zarezerwowano!';
    header('Location: ../views/reservation_page.php');

} else
{
    $_SESSION['message'] = 'termin niedostępny';
    header('Location: ../views/reservation_page.php');
}
