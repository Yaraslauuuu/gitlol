<!-- calc.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $years = $_POST['years'];
    $interest = $_POST['interest'];

    // Расчет месячной выплаты
    $monthly_interest = $interest / 12 / 100;
    $total_payments = $years * 12;

    $monthly_payment = ($amount * $monthly_interest) / (1 - pow(1 + $monthly_interest, -$total_payments));

    // Вывод результата
    echo 'Miesięczna rata kredytu wynosi: ' . round($monthly_payment, 2);
}
