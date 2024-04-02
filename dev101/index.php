<?php 

//echo "hi dev101 <br>";
#echo "hi dev101 <br>";
/* echo "hi dev101 <br>";
echo "hi dev101 <br>";
echo "hi dev101 <br>"; */


?>


<?php 

/* echo "text"; */

?>

<?php 

/* En PHP, les variables sont représentées par un signe dollar "$" suivi du nom de la variable.
Un nom de variable valide doit respecter les règles suivantes (après le symbole $ ) :
• Le nom est sensible à la casse : $a et $A sont deux variables distinctes.
• Le premier caractère doit être une lettre ou un souligné _
• À partir du deuxième caractère seul les lettres, chiffres ou soulignés sont acceptés. */

/* $test = 4;

$tab = [1,2,3];

//echo $test;

print_r($tab);
echo "<br>";

var_dump($tab);
echo "<br>";

var_export($tab);
echo "<br>"; */

?>

<?php
//$var; //nom de variable valide
//$Var; //nom de variable valide
//$4vars; //nom de variable invalide: commencer avec un nombre n’est pas autorisé
//$_var; //nom de variable valide
//$état; //nom de variable valide
//$éta+; //nom de variable invalide: les caractères spéciaux comme + ne sont pas autorisés
//$var Vat; //nom de variable invalide: l’espace n’est pas autorisé
?>

<?php 

/* $a = 5;

echo "<pre>";
print_r($_ENV);
echo "</pre>"; */

// projet : base de donnees 
// db : prod.db
// mail : reel

//test :  projet : base de donnees 
// bd : test.db
// email : fake

/* This feature has been DEPRECATED as of PHP 7.2.0. Relying on this feature is highly discouraged.
echo $php_errormsg; */

/* $a = 5;
echo $a;

echo "<pre>";
print_r(error_get_last());
echo "</pre>"; */

/* file_get_contents("https://www.ofppt.ma/");

echo "<pre>";
print_r($http_response_header);
echo "</pre>"; */

//echo 'hello world';

/* echo "<pre>";
print_r($argv);
echo "</pre>"; */



?>

<?php 

/* • Une variable globale doit être déclarée à l'intérieur de chaque fonction afin de pouvoir être utilisée dans cette fonction.
• Il suffit d’utiliser le mot clé global avant la variable pour l’utiliser.*/

/* $a = 5;

function test(){
    global $b;
    $b = 3;
}

test();

echo $a;

echo $b;
echo $GLOBALS['b'];

echo "<pre>";
print_r($GLOBALS);
echo "</pre>"; */

/*
• Une variable statique a une portée locale uniquement, mais elle ne perd pas sa valeur lorsque le script appelle la fonction.
• Il suffit d’utiliser le mot clé static avant la variable ou l’attribut ou la méthode pour l’utiliser.*/

/* function test() {
    static $a = 0;
    $a++;
    echo $a;
    echo "<br>";
} */

//echo $a;
/* 
test(); //1
test(); //2
test(); //3 */

/*
• Les propriétés statiques sont accédées en utilisant l'opérateur de résolution de portée ::
• Les variables statiques peuvent être assignées des valeurs qui sont issue d'expression constante, mais les expressions dynamiques, tel que les appels de fonctions,
résulteront en une erreur d'analyse. */


?>

<?php 
/* S2 */
?>

<?php 

/* $a = "5.2";
$b = 5;
$$a = "dev"; // $hi

$c = floatval($a);

echo $a;
echo "<br>";
echo gettype($a);
echo "<br>"; */

/* echo $c;
echo "<br>";
echo gettype($c);
echo "<br>";

echo $b;
echo "<br>";
echo gettype($b);

echo "<br>";
echo $$a;
echo "<br>";
echo $hi; */

/* echo '<pre>';
print_r(get_defined_vars());
echo '</pre>'; */
/* 
$fp = fopen("foo", "w");
echo get_resource_type($fp);
echo get_resource_id($fp); */

/* $tab = 0;//[1,2,3];
echo is_array($tab); */

$a="hi";
$b=5;

/* echo empty($a);
echo isset($a); */

/* unset($a);

echo '<pre>';
print_r($GLOBALS);
echo '</pre>'; */

/* • Une constante est un identifiant (un nom) qui représente une valeur simple.
• Les constantes sont sensibles à la casse.
• Par convention, les constantes sont toujours en majuscule.*/

/* const CENTRE = "cfpm";
define('PI',3.14);

echo CENTRE;

echo defined('CENTRE'); */

/*
• Les constantes peuvent être définies en utilisant le mot clé const ou en utilisant la fonction define().
• une constante n'est pas préfixée d'un $
• Pour vérifier qu'une constante est définie, utiliser la fonction defined().
• Si une constante indéfinie est utilisée une Error est renvoyée lancée.*/


/*
• Contrairement aux constantes définies en utilisant l'instruction define(), les constantes définies en utilisant le mot-clé const doivent être déclarées au plus haut niveau
du contexte, car elles seront définies au moment de la compilation. */

/* const CENTRE = "cfpm";

function test() {
    define('PI',3.14);
    echo __FUNCTION__;
}

test();*/

/* echo CENTRE; */

/*echo __DIR__; */



?>


<?php 
/* $a = 2; //$a est maintenant égal à 2
$b = 3; //$b est maintenant égal à 3
$c = $a % $b; //$c est maintenant égal à 5
echo $c;
$e = "Bonjour ";
$f = " les étudiants"; 

$h = $e . $f;
echo $h */;

/* echo (int)false; */
/* $a = "5";
echo gettype($a);
echo '<br>';
$b = (float)$a;
echo '<br>';
echo gettype($b); */

/* // un nombre décimal
$a = 1234;
// un nombre octal (équivalent à 83 en décimal)
$a = 0123;
// un nombre octal (à partir de PHP 8.1.0)
$a = 0o123;
// un nombre hexadecimal (équivalent à 26 en décimal)
$a = 0x1A;
// un nombre binaire (équivalent à 255 en decimal)
$a = 0b11111111;
// un nombre décimal (à partir de PHP 7.4.0)
$a = 1_234_567; 
$a = 1234567; 
 */

/* echo 'hi \$ aujourd\'hui\\';
echo "dev 101 & \n dev 102"; */

//$tab = array(1,2,3);
/* $tab = ['cc1'=> 17,'cc2' => "test", 'cc3' =>15.5];
echo $tab['cc3']; */

/* $s1 = new Cercle();
$s1->r = 5;
$s1->surface(); */

/* $a = null;
$b = NULL;
$c=5; */

//$d = (null)$c; obsolete

/* printf('hi %s %s jai %d ans','john','doe',50); */

/* $age = 10;
if($age<18):
    echo 'ko';
endif;


if($age<18){
    echo 'ko';
} */

$expression = false;

while($expression):
    echo 'commandes while';
endwhile;

do
echo 'commandes do';
while ($expression);

?>