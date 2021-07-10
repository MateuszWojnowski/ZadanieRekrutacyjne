<?php
declare(strict_types=1);
require_once "Reservation.php";
require_once "Database.php";

class Reservator
{

    public function reserve (Reservation $reservation) : void
    {
        $name = $reservation->getName();
        $surname = $reservation->getSurname();
        $date = $reservation->getDate();

        $database = new Database();
        try {
            $pdo = new PDO("mysql:host=".$database->getDbHost().";dbname=".$database->getDbName(), $database->getDbUser(), $database->getDbPassword());
            $query = 'INSERT INTO reservations (name, surname, date)
        VALUES (:name, :surname, :date)';
            $statement = $pdo->prepare($query);
            $statement->execute(array(
                    ':name' => $name,
                    ':surname' => $surname,
                    ':date' => $date)
            );
        } catch (PDOException $exception)
        {
            session_start();
            $_SESSION['message'] = "błąd bazy danych";
            header('Location: ../views/reservation_page.php');
        }
    }
}