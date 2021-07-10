<?php
declare(strict_types=1);
require_once "Database.php";

class DateChecker
{
    public function isDateFree (string $date) : bool
    {
        $database = new Database();
        try
        {
            $pdo = new PDO("mysql:host=".$database->getDbHost().";dbname=".$database->getDbName(), $database->getDbUser(), $database->getDbPassword());
            $query = 'SELECT * FROM reservations WHERE date = :date';
            $statement = $pdo->prepare($query);
            $statement->execute(array(
                    "date" => $date)
            );
        } catch (PDOException $exception)
        {
            session_start();
            $_SESSION['message'] = "błąd bazy danych";
            header('Location: ../views/reservation_page.php');
        }
        $pdo = new PDO("mysql:host=".$database->getDbHost().";dbname=".$database->getDbName(), $database->getDbUser(), $database->getDbPassword());
        $query = 'SELECT * FROM reservations WHERE date = :date';
        $statement = $pdo->prepare($query);
        $statement->execute(array(
                "date" => $date)
        );
        if ($statement->rowCount() == 0)
        {
            return true;
        } else
        {
            return false;
        }
    }

}