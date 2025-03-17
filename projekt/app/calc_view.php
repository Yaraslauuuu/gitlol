<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator Kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
    <label for="id_loanAmount">Kwota kredytu: </label>
    <input id="id_loanAmount" type="text" name="loanAmount" value="<?php if(isset($loanAmount)) print($loanAmount); ?>" /><br />
    <label for="id_loanPeriod">Okres kredytowania (lata): </label>
    <input id="id_loanPeriod" type="text" name="loanPeriod" value="<?php if(isset($loanPeriod)) print($loanPeriod); ?>" /><br />
    <label for="id_interestRate">Oprocentowanie (%): </label>
    <input id="id_interestRate" type="text" name="interestRate" value="<?php if(isset($interestRate)) print($interestRate); ?>" /><br />
    <input type="submit" value="Oblicz" />
</form>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
    if (count($messages) > 0) {
        echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
        foreach ($messages as $key => $msg) {
            echo '<li>'.$msg.'</li>';
        }
        echo '</ol>';
    }
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result.' zł miesięcznie'; ?>
</div>
<?php } ?>

</body>
</html>