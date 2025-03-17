<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze nie wysyłamy odpowiedzi do klienta.
// Odpowiedź będzie wysyłana przez odpowiedni widok.
// Parametry przekazujemy do widoku przez zmienne.

// 1. Pobieranie parametrów wejściowych z formularza
$loanAmount = isset($_REQUEST['loanAmount']) ? $_REQUEST['loanAmount'] : ''; // Kwota kredytu
$loanPeriod = isset($_REQUEST['loanPeriod']) ? $_REQUEST['loanPeriod'] : ''; // Okres kredytowania
$interestRate = isset($_REQUEST['interestRate']) ? $_REQUEST['interestRate'] : ''; // Oprocentowanie

// 2. Walidacja przekazanych parametrów przed dalszym przetwarzaniem
$messages = array(); // Tablica komunikatów o błędach

// Sprawdzenie, czy wszystkie wymagane parametry zostały przekazane
if (!(isset($loanAmount) && isset($loanPeriod) && isset($interestRate))) {
    // Ta sytuacja wystąpi, gdy kontroler zostanie wywołany bezpośrednio, a nie z formularza
    $messages[] = 'Błąd w wywołaniu aplikacji. Brak jednego z wymaganych parametrów.';
}

// Sprawdzenie, czy wszystkie wymagane parametry są niepuste
if ($loanAmount == "") {
    $messages[] = 'Kwota kredytu nie została podana.';
}
if ($loanPeriod == "") {
    $messages[] = 'Okres kredytowania nie został podany.';
}
if ($interestRate == "") {
    $messages[] = 'Oprocentowanie nie zostało podane.';
}

// Walidacja danych tylko wtedy, gdy wszystkie parametry są obecne
if (empty($messages)) {

    // Sprawdzenie, czy parametry są liczbami
    if (!is_numeric($loanAmount)) {
        $messages[] = 'Kwota kredytu musi być liczbą.';
    }

    if (!is_numeric($loanPeriod)) {
        $messages[] = 'Okres kredytowania musi być liczbą.';
    }

    if (!is_numeric($interestRate)) {
        $messages[] = 'Oprocentowanie musi być liczbą.';
    }

    // Sprawdzenie, czy wartości są większe od zera
    if (is_numeric($loanAmount) && $loanAmount <= 0) {
        $messages[] = 'Kwota kredytu musi być większa od zera.';
    }

    if (is_numeric($loanPeriod) && $loanPeriod <= 0) {
        $messages[] = 'Okres kredytowania musi być większy od zera.';
    }

    if (is_numeric($interestRate) && $interestRate < 0) {
        $messages[] = 'Oprocentowanie nie może być liczbą ujemną.';
    }
}

// 3. Obliczenia, jeżeli brak błędów w danych
if (empty($messages)) { // Jeśli brak błędów

    // Konwersja parametrów na wartości numeryczne (float)
    $loanAmount = floatval($loanAmount); // Kwota kredytu jako liczba zmiennoprzecinkowa
    $loanPeriod = floatval($loanPeriod); // Okres kredytowania jako liczba zmiennoprzecinkowa
    $interestRate = floatval($interestRate); // Oprocentowanie jako liczba zmiennoprzecinkowa

    // Obliczenie całkowych odsetek przez cały okres kredytowania
    $totalInterest = ($loanAmount * $interestRate / 100); // Procent od całkowitej kwoty kredytu

    // Obliczenie całkowitej kwoty do zapłaty (kwota kredytu + odsetki)
    $totalAmount = $loanAmount + $totalInterest; // Całkowita kwota do zapłaty

    // Obliczenie miesięcznej raty (całkowita kwota do zapłaty / liczba miesięcy)
    $months = $loanPeriod * 12; // Liczba miesięcy w okresie kredytowania
    $monthlyPayment = $totalAmount / $months; // Miesięczna rata

    // Formatowanie wyniku do dwóch miejsc po przecinku
    $result = number_format($monthlyPayment, 2, '.', ' '); // Formatowanie liczby na 2 miejsca po przecinku
}

// 4. Wywołanie widoku i przekazanie zmiennych do widoku
// Zainicjowane zmienne ($messages, $loanAmount, $loanPeriod, $interestRate, $result)
// będą dostępne w załączonym pliku widoku
include 'calc_view.php';
?>
