<?php
/**
 * Created by PhpStorm.
 * User: steph
 * Date: 10/4/17
 * Time: 6:06 PM
 */
include_once 'dbh.php';

$searchName = mysqli_real_escape_string($conn, $_POST['name']);

$sql = "SELECT * FROM friend WHERE name LIKE '" . $searchName. "%';";
$result = mysqli_query($conn, $sql);
echo "<table>";
echo "<tr> <td>Name</td> <td>Phone Number</td> <td>Age</td> </tr>";
while ($row = mysqli_fetch_row($result)) {
    echo "<tr>";
    echo "<td>".$row[1]."</td>";
    if(strlen($row[2])==10){
        $areaCode = substr($row[2],0,3);
        $firstDig = substr($row[2],3,3);
        $lastDig = substr($row[2],6);
        $strPN = "(".$areaCode.")".$firstDig."-".$lastDig;
        echo "<td>".$strPN."</td>";
    }else{
        $firstDig = substr($row[2],0,3);
        $lastDig = substr($row[2],3);
        $strPN = $firstDig."-".$lastDig;
        echo "<td>".$strPN."</td>";
    }
    echo "<td>".$row[3]."</td>";
    echo "</tr>";
}
echo "</table>";