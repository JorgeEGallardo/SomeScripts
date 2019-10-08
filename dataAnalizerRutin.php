<?php
echo "<table border=1>";
$data = $_POST['raw'];
$menu = preg_split('/\r+/', $data);
$isFirst=true;

class rutine{
    public $name;
    public $exer;
    public $series;
    public $repetitions;
    public $intensity;
    public $rest;
    public $zelda;
}
$name="";
$series="";
$repetitions="";
$intensity="";
$rest="";
$zelda="";
for ($i=0;$i<count($menu);$i++){
    echo "<tr>";
    $cells = preg_split('/\t+/', $menu[$i]);

    for ($j=0;$j<count($cells);$j++){
        if (strpos($cells[$j],"Día")!==false){
            echo "<td><b>".$cells[$j]."</b></td>";
        }else {
        if (strpos($cells[0],"Ejerci")!==false && strpos($cells[1],"Seri")!==false){
            echo "<td color:'red'>".$cells[$j]."</td>";
        }
        else if (strlen($cells[0])>10)
        echo "<td>".$cells[$j]."</td>";
    }}
    echo "</tr>";
}
echo "</table>";
$routines = array();
$namae = "";
for ($i=0;$i<count($menu);$i++){
   $rutine = new rutine;
    $cells = preg_split('/\t+/', $menu[$i]);

    for ($j=0;$j<count($cells);$j++){
        if (strpos($cells[$j],"Día")!==false){
            $namae = $cells[$j];
        }else {
        if (strlen($cells[0])>10&&!(strpos($cells[0],"Ejerci")!==false && strpos($cells[1],"Seri")!==false)){
            $limit = count($cells);
            if ($limit>0)
            $rutine->exer = $cells[0];
            if ($limit>1)
            $rutine->series = $cells[1];
            if ($limit>2)
            $rutine->repetitions = $cells[2];
            if ($limit>3)
            $rutine->intensity = $cells[3];
            if ($limit>4)
            $rutine->rest = $cells[4];
            if ($limit>5)
            $rutine->zelda = $cells[5];
            $j = 40;
            $rutine->name = $namae;
            array_push($routines, $rutine);
        }
    }}
    echo "</tr>";
}
echo "</table>";
print(json_encode($routines));
