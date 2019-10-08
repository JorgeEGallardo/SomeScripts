<?php

use PhpParser\Node\Stmt\Echo_;
/*
$raw = '
Día 1
Desayuno:
Mollete: pan integral, frijoles, 60 g deshebrada, 40 g queso, pico de gallo.
1 taza de té

Colación:
1 manzana
1 barra Stila

Comida:
240 g Deshebrada
1 tortilla
1 taza de verduras

Colación:
1 reb de piña
10 cacahuates

Cena:
Sándwich con ensalada de pollo (60g)
Agua de fruta









Día 2

Desayuno:
Huevo con espinacas  (8 claras)
1/2 taza frijoles de la olla
2 tortillas
1 taza de té

Colación:
1 manzana
1 barra Stila

Comida:
240 g Pollo asado
½ taza de espagueti con tomate
1 taza de ensalada

Colación:
1 reb de piña
10 cacahuates

Cena:
Chilaquiles con salsa de tomate (2 tortillas, 80 g queso)
Agua de fruta








Día 3
Desayuno:
1 taza Papas con tomate y queso (1 taza y 60 g queso)
1/2 taza de calabaza con queso (60g)
1 tortilla
1 taza de té

Colación:
1 taza de uvas
1 barra Stila

Comida:
240 g Falda (carne) al balsámico (ver receta)
1 tortilla
1 taza de verduras

Colación:
1 reb de melón
10 cacahuates

Cena:
80 g Tortitas de atún con huevo
2 tostadas
1/2 taza de ensalada
Agua de fruta




Día 4
Desayuno:
Sincronizada: 2 tortillas de harina integral, 80 g queso fresco, 2 reb jamón de pavo, aguacate.
1 taza de té

Colación:
1 taza de uvas
1 barra Stila

Comida:
240 g Pollo a la Belmont (ver receta)
1/4 taza de arroz
1 taza de ensalada

Colación:
1 reb de melón
10 cacahuates

Cena:
2 Enchiladas verdes (2 tortillas, salsa de tomatillo, 80 g queso)
Agua de fruta







Día 5

Desayuno:
3 reb pan tostado con 1 reb queso panela, aguacate y tomate
1 taza de té

Colación:
1 manzana
1 barra Stila

Comida:
320 g Pescado con hierbas
1 tostada
1 taza de verduras

Colación:
1 reb de piña
10 cacahuates

Cena:
2 Tortillas con queso gratinado (80g y espinacas
Agua de fruta









Día 6

Desayuno:
Huevo con nopales (6 claras)
1/2 taza frijoles de la olla
2 tortillas
1 taza de té

Colación:
1 manzana
1 barra Stila

Comida:
240 g Carne molida con calabaza
½ taza de papas
1 taza de ensalada

Colación:
1 reb de piña
10 cacahuates

Cena:
Tortitas de soya con huevo (3/4 taza soya texturizada)
1/2 taza de ensalada
2 tortillas
Agua de fruta







Día 7

Desayuno:
3 Waffles con 1 cdita de miel
1 taza de té

Colación:
1 taza de uvas
1 barra Stila

Comida:
240 g Pollo con mole
1 tortilla
1 taza de verduras

Colación:
1 reb de melón
10 cacahuates

Cena:
80 g queso fresco gratinado con champiñones (1/2 taza)
2 tortillas
Agua de fruta




















Día 8

Desayuno:
3 Tostadas con aguacate y pechuga de pavo picada (120g)
1/2 taza de verduras
1 taza de té

Colación:
1 taza de uvas
1 barra Stila

Comida:
240 g Lasaña de carne y calabaza (ver receta)
1 tostada
1 taza de verdura

Colación:
1 reb de melón
10 cacahuates

Cena:
Sándwich de atún (80g)
Agua de fruta



















Día 9

Desayuno:
1 taza frijoles de la olla
½ taza de chayote con queso
2 tortillas
1 taza de té

Colación:
1 naranja
1 barra Stila

Comida:
240 g Pechugas con salsa de cítricos y ensalada verde (ver receta)
¼ taza de arroz
1 taza de ensalada

Colación:
1 pza de fruta
10 cacahuates

Cena:
2 Tacos de pollo dorados (60g)
1/2 taza de ensalada
Agua de fruta



Día 10
Desayuno:
Huevo con verdura  (8 claras)
1/2 taza frijoles de la olla
2 tortillas
1 taza de té

Colación:
1 naranja
1 barra Stila

Comida:
320 g Filetes de pescado al horno (ver receta)
1 taza de ensalada

Colación:
1 pza de fruta
10 cacahuates

Cena:
2 Tostadas de queso (80g). lechuga y tomate
Agua de fruta






Día 11

Desayuno:
2 Burros de picadillo (120g), aguacate.
1 taza de té

Colación:
1 tuna
1 barra Stila

Comida:
240 g Bistec con nopales
1 tortilla
1 taza de verduras

Colación:
1 durazno
10 cacahuates

Cena:
Ensalada de pechuga de pavo (80 g queso)
2 tostadas
Agua de fruta






Día 12

Desayuno:
3 Tacos de frijoles guisados
1/2 taza de champiñones con queso
1 taza de té

Colación:
1 tuna
1 barra Stila

Comida:
240 g Pollo a la mexicana
1 tortilla
1 taza de verduras

Colación:
1 durazno
10 cacahuates

Cena:
Papa al horno con margarina
Agua de fruta







Día 13

Desayuno:
Sándwich de queso: 2 reb pan integral, 120 g queso fresco, aguacate, lechuga y tomate.
½ taza de espinacas con queso
1 taza de té

Colación:
1 naranja
1 barra Stila

Comida:
240 g Chuletas de cordero con pasta y espinacas  (ver receta) 1/2 taza de pasta
1 taza de verduras al horno

Colación:
1 pza de fruta
10 cacahuates

Cena:
1/2 Pimiento relleno de atún (80g)
2 tostadas
Agua de fruta














Día 14
Desayuno:
Huevo con tomate  (8 claras)
1/2 taza frijoles de la olla
2 tortillas
1 taza de té

Colación:
1 naranja
1 barra Stila

Comida:
240 g Muslitos de pollo al vino con patatas (ver receta) 1/2 taza de papas
1 taza de ensalada

Colación:
1 pza de fruta
10 cacahuates

Cena:
80 g Queso panela a la plancha con calabaza y tomate a las hierbas
2 tostadas
Agua de fruta



Día 15:

Desayuno:
3 Enfrijoladas (120g queso fresco)
1/2 taza de nopales con cebolla y tomate
1 taza de té

Colación:
1 tuna
1 barra Stila

Comida:
320 g Pescado con limón y mostaza (ver receta)
1/4  taza de arroz
1 taza de ensalada

Colación:
1 durazno
10 cacahuates

Cena:
Sándwich con crema de cacahuate
1 taza de fruta picada';
*/
$raw = $_POST['raw'];

$menu = array(); //Aqui se va a guardar $raw separado por palabras.
$day = array(); //Aqui van todas las comidas guardadas por dia.
$tempArray = array(); //Array temporal para separar las comidas de un mismo dia.
$mealList = array("Desayuno:", "Colación:", "Comida:", "Colación:", "Cena:", "owo"); //Lista de las comidas que tiene un dia ,a lista debe terminar con una palabra que no exista.
$dayCount = 1;//Dia que estamos buscando (1-15).
$temp = ""; //String antes de ser pusheado a un arrray.
$filter = ""; // Filtro para sacar las palabras no deseadas.
$masterArray = array(); //Aqui va todo ya ordenado.
$mealsArray = array(); //Comidas ya ordenadas listas para ser cargadas  al master.

$menu = preg_split('/\s+/', $raw);//Separamos el $raw en palabras.

//Separamos las comidas por día buscando la cadena "Día (número de día)"
for ($i = 0; $i < count($menu); $i++) {
    if ($menu[$i] == "Día" && $menu[$i + 1] == $dayCount) {
        $filter = "Día " . ($dayCount - 1);
        $temp = str_replace($filter, "", $temp);
        array_push($day, $temp);
        $dayCount++;
        $temp = "";
    }
    $temp = $temp . " " . $menu[$i];
}

$filter = "Día " . ($dayCount - 1);
$temp = str_replace($filter, "", $temp);
array_push($day, $temp);


//Separamos las comidas del día por su categoria (Desayuno:, Comida:, etc.)
for ($i = 1; $i < count($day); $i++) {
    $tempArray =  preg_split('/\s+/', $day[$i]);
    $temp = "";
    $currentMeal = 0;
    $mealsArray = array();
    for ($j = 0; $j < count($tempArray); $j++) {
        if ($tempArray[$j] == $mealList[$currentMeal]) {
            array_push($mealsArray, $temp);
            $temp = "";
            $j++;
            $currentMeal++;
        }
        $temp = $temp . " " . $tempArray[$j];
    }
    //Push al arreglo maestro
    array_push($mealsArray, $temp);
    array_shift($mealsArray);
    array_push($masterArray, $mealsArray);
}
//Imprimimos todo el arreglo
for ($i = 0; $i < count($masterArray); $i++) {
    echo "Dia " . ($i + 1) . ":<br>";
    for ($j = 0; $j < 5; $j++)
        echo $mealList[$j] . " " . $masterArray[$i][$j] . "<br>";
}
echo "<br>";
echo "Desayuno del día 15 print($ masterArray[14][0]); <br>";
print($masterArray[14][0]);
