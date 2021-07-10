<?php
declare(strict_types=1);
require_once "Database.php";


class ReservationGetter
{
    public function getAllReservations () : PDOStatement
    {
        $database = new Database();
        try {
            $pdo = new PDO("mysql:host=".$database->getDbHost().";dbname=".$database->getDbName(), $database->getDbUser(), $database->getDbPassword());
            $query = 'SELECT * FROM reservations';
        } catch (PDOException $exception)
        {
            session_start();
            $_SESSION['message'] = "błąd bazy danych";
            header('Location: ../views/reservation_page.php');
        }

        return $pdo->query($query);
    }

}