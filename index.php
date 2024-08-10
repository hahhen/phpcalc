<!DOCTYPE html>
<html>

<head>
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <form method="POST">
        <label for="num1">Numero 1:</label>
        <input type="number" name="n1" id="n1" required><br><br>

        <label for="num2">Numero 2:</label>
        <input type="number" name="n2" id="n2" required><br><br>

        <label for="operator">Operador:</label>
        <select name="operator" id="operator">
            <option value="+">Adição</option>
            <option value="-">Subtração</option>
            <option value="*">Multiplicação</option>
            <option value="/">Divisão</option>
        </select><br><br>

        <input type="submit" value="Calculadora">
    </form>
</body>

</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once 'Calc.php';
    $calc = new Calc();
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operator = $_POST['operator'];

    switch($operator){
        case '+':
            echo "Resultado: ".$calc->somar($n1, $n2);
            break;
        case '-':
            echo "Resultado: ".$calc->subtrair($n1, $n2);
            break;
        case '*':
            echo "Resultado: ".$calc->multiplicar($n1, $n2);
            break;
        case '/':
            echo "Resultado: ".$calc->dividir($n1, $n2);
            break;
    }
}