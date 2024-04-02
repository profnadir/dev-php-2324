<?php

if (isset($_POST['calculer'])) {
    $op1 = $_POST['op1'];
    $oper = $_POST['oper'];
    $op2 = $_POST['op2'];


    if($oper == "/" && $op2 ==0){
        $message = "operation impossible : division par 0";
    }
    else{
        switch ($oper) {
            case '+':
                $resultat = $op1 + $op2;
                break;
            case '-':
                $resultat = $op1 - $op2;
                break;
            case '%':
                $resultat = $op1 % $op2;
                break;
            case '*':
                $resultat = $op1 * $op2;
                break;
            case '/':
                $resultat = $op1 / $op2;
                break;
            default:
                $message = "Operation non valide";
                break;
        }
    
       $message = "Resultat du calcul ".$op1.$oper.$op2. " = ".$resultat;
    }
   
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>

<body>
    <fieldset>
        <legend>Calculatrice</legend>
        <form method="post">
            <div>
                <label for="op1">Opérande 1</label>
                <input type="text" id="op1" name="op1"
                value="<?php echo isset($op1) ? $op1 : ''; ?>"
                >
            </div>
            <br>
            <div>
                <label for="oper">Opérateur</label>
                <select name="oper" id="oper">
                    <option value="+">Addition</option>
                    <option value="-">Soustraction</option>
                    <option value="*">Multiplication</option>
                    <option value="/">Division</option>
                    <option value="%">Modulo</option>
                </select>
            </div>
            <br>
            <div>
                <label for="op2">Opérande 2</label>
                <input type="text" id="op2" name="op2"
                value="<?php echo isset($op2) ? $op2 : ''; ?>"
                >
            </div>
            <br>
            =
            <br>
            <br>
            <div>
                <label for="resultat">Résultat</label>
                <input type="text" id="resultat" name="resultat"
                value="<?php echo isset($resultat) ? $resultat : ''; ?>"
                >
            </div>
            <br>
            <p>
                <?php echo isset($message) ? $message : ''; ?>
            </p>
            <div>
                <button type="submit" name="calculer">Calculer</button>
            </div>
        </form>

    </fieldset>
</body>

</html>