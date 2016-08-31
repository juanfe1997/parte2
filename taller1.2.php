<?php
/**
*autor: juan felipe marin
* taller 1 parte 2 
*/
echo "<h1> haciendo uso de la sentencia IF - ELSE, realizar los siguientes ejercicios
 </h1><br>";

echo "<h1>a. Determinar si el numero es negativo.</h1<br>";

$numer=-5;

if ($numer>0) {
	echo "<br> el numero ".$numer.'<br> es positivo';
} else {
	if ($numer<0) {
		 echo "<br> el numero ".$numer.'<br>es negativo';	
	} else{
		echo "<br> el numero ".$numer.' <br> es neutro o es cero';
	}
}

echo "//------------------------------------------------------------------------------------------------<br>";


echo "<h1>b. Imprimir verdadero o falso de acuerdo al contenido de una variable.</h1><br>";

$jvar=false;

if($jvar==true){

echo "el contenido de la variable es verdadero";

}
else{

	echo "el contenido de la variable es falso";
}

echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>c. Determinar si un numero es primo.</h1><br>";
$numero=11;
if ($numero % 2==1) {
	echo "<br> el numero ".$numero.'<br> es primo';
} else {
	if ($numero % 2==0) {
		 echo "<br> el numero ".$numero.'<br> no es primo';	
	} else{
		echo "<br> el numero ".$numero.' <br> es neutro o es cero';
	}
}

echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>d. Determinar si un numero es mayor que 35.</h1><br>";
$nume=11;
if ($nume>35) {
	echo "<br> el numero ".$nume.'<br> es mayor que 35';
} else {
	if ($nume<35) {
		 echo "<br> el numero ".$nume.'<br> es menor que 35';	
	} else{
		echo "<br> el numero ".$nume.' <br> es neutro o es cero';
	}
}

echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>e. Determinar si un numero es positivo y menor que 100.</h1><br>";

$numero1=101;
if ($numero1>100 && $numero1>0) {
	echo "<br> el numero ".$numero.'<br> es mayor que 100 y positivo';
} else {
	if ($numero1<100 && $numero1>0) {
		 echo "<br> el numero ".$numero1.'<br> es menor que 100 y positivo';	
	} else{
		if($numero1<100 && $numero1<0){
		echo "<br> el numero ".$numero1.' <br> es menor que 100 y negativo';
	}else{
		echo "<br> el numero ".$numero1.' <br> es neutro o es cero';
	}
	}
}

echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>f. Determinar si un numero pertenece al intervalo [-3,27].</h1><br>";
$num=20;
if ($num>=-3 && $num<=27) {

	echo "<br> el numero".$num.'<br>si pertenece al intervalo [-3,27]';
}else{
	echo "<br> el numero".$num.'<br>no pertenece al intervalo [-3,27]';
}


echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>g. Determinar si un numero no pertenece al intervalo [25,50].</h1><br>";
$numo=15;
if ($numo>=25&& $numo<=50) {

	echo "<br> el numero".$numo.'<br>si pertenece al intervalo [25,50]';
}else{
	echo "<br> el numero".$numo.'<br>no pertenece al intervalo [25,50]';
}

echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>h. Determinar si el modulo de un numero es menor que 15.</h1><br>";

$nu=8;
	if ($nu % 1<15){
		echo "el modulo ".$nu."es menor que 15 <br>";
	}else{
		echo "el modulo".$nu."es igual a 15 <br>";
	}

echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>i. Determinar si un entero es impar (lo sera cuando el resto de su division (operador aritmetico '%') por 2 sea distinto de cero).</h1><br>";

$num=5;

if ($num%2!=0) {
	echo "<br> el numero ".$num.'<br>es impar';	
}else{
	echo"<br> el numero ".$num. '<br>es par';
}

echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>j. eleve al cuadrado un numero si es par y al cubo si es impar.</h1><br>";

$num=30;

if ($num%2==0){
 $cuadrado= $num*$num;
	echo "<br> el numero es par".$num.'<br>elevado al cuadrado es <br>',$cuadrado;
}else{
	   $cubo = $num*$num*$num;
	    echo "<br> el numero es impar".$num.'<br>elevado al cubo es',$cubo;
	}
}
echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>k. calcule el maximo de 2 numeros dados.</h1><br>";

$a=20;
    $b=35;
   
       if($a > $b){
            echo" el maximo es:<br> ",$a;
       } else {
       	if  ($a < $b){ 
       	      echo" el maximo es: <br> ",$b;
           } else{

       echo" Son iguales<br> ";
        }
    }


echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>l. calcule el maximo de 3 numeros</h1><br>";

 $j=3;
  $f=16;
  $m=19;
  if( $j > $f && $j > $m){
       echo"El numero mayor es<br> ",$j;
      }else{
          if($f >  $j && $f > $m){
          echo"El numero mayor es<br> ",$f;
          }else{
          echo "El numero mayor es <br>",$m;
        }
    }

echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>m. ordenar 2 numeros de menor a mayor </h1><br>";


    $num0=58;
	$num1=64;
	if ($num1>$num0) {
	echo "los numeros ordenados de menor a mayor son <br>",$num0,',',$num1;
		} else {
		if ($num0>$num1) {
			echo 'los numeros ordenados de menor a mayor son <br>',$num1,',',$num0;
		}	
	}



echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>n. ordenar 3 numeros de mayor a menor </h1><br>";

 $Num1=22;
	$Num2=8;
	$Num3=70;
	
 if ($Num1>$Num2) {
	if ($Num2>$Num3) {
		echo 'los numeros ordenados de mayor a menor son <br>',$Num1,'<br>',$Num2,'<br>',$Num3;
	} else {
		if ($Num1>$Num3) {
			echo 'los numeros ordenados de mayor a menor son <br>',$Num1,'<br>',$Num3,'<br>',$Num2;
			} else {
				echo 'los numeros ordenados de mayor a menor son <br>',$Num3,'<br>',$Num1,'<br>',$Num2;
			}	
		}
	} else {
if ($Num1>$Num3) {
		echo 'los numeros ordenados de mayor a menor son <br>',$Num2,'<br>',$Num1,'<br>',$Num3;
		}
 		else {
				if ($Num2>$Num3) {
					echo 'los numeros ordenados de mayor a menor son <br>',$Num2,'<br>',$Num3,'<br>',$Num1;
				} else {
						echo 'los numeros ordenados de mayor a menor son<br>',$Num3,'<br>',$Num2,'<br>',$Num1;
					}
			}
	}	

echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>o. determinar la longitud de una cadena y si es mayor a 5 caracteres indicar nombre largo, de lo contrario nombre corto</h1><br>";

$cadena = "juanfelipe";

echo strlen($cadena);
	
   if ($cadena <5) {
	echo "nombre largo<br>";
}else {
	echo "nombre corto<br>";
}

echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>p. Determinar si una variable existe</h1><br>";

$variable=0;

if(isset($variable)){
echo "<br> la variable existe";
}else{
echo(" la variable no existe");
}



echo "//------------------------------------------------------------------------------------------------<br>";

echo "<h1>q. Determinar si una variable esta vacia o tiene contenido</h1><br>";

$var = "juanfe";

if (empty($var)) {
    echo "<br> la variable esta vacía, o no se encuentra definida en absoluto";
}else{
	echo"<br> la variable tiene contenido";
}

