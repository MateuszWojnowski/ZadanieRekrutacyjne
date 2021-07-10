<html>
<head>
    <title>rejestracja noclegu</title>
    <link rel="stylesheet" href="reservation_page.css" type="text/css" />
</head>
<body>
<div class="wrapper">
    <form action="../controllers/ReservationController.php" method="post">
        <input name="name" type="text" placeholder="imię"/> </br>
        <input name="surname" type="text" placeholder="nazwisko"/> </br>
        <input name="date" type="date"/> </br>
        <input class="submit_button" value="rezerwuj" type="submit"/> </br>
    </form>
    <div class="message">
        <?php
        session_start();
        if (isset($_SESSION['message']) && $_SESSION['message'])
        {
            echo $_SESSION['message'];
        }
        ?>
    </div>
    <div class="reservations">
        <div>wszystkie rezerwacje:</div></br>
        <?php
        require_once "../models/ReservationGetter.php";
        $reservationGetter = new ReservationGetter();
        $statement = $reservationGetter->getAllReservations();
        while($row = $statement->fetch())
        {
            echo $row['name']." ".$row['surname']." - ".$row['date']."</br>";
        }

        ?>
    </div>
</div>
</body>
</html>