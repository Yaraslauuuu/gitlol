<!-- calc_view.php -->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator Kredytowy</title>
</head>
<body>

<form action="calc.php" method="post">
    <label for="amount">Kwota kredytu: </label>
    <input type="text" name="amount" required><br>

    <label for="years">Ilość lat: </label>
    <input type="text" name="years" required><br>

    <label for="interest">Oprocentowanie: </label>
    <input type="text" name="interest" required><br>

    <input type="submit" value="Oblicz">
</form>

</body>
</html>
