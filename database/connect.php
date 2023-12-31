<!DOCTYPE html>
<html lang="nl">
<body>


<?php
echo "Hoi wij zijn Bo en Daan";

$servername = "srv997.hstgr.io";
$username = "u72961251O_BoVisker";
$password = "zllc/*R6";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
//
//$con = mysqli_connect("45.87.81.153","u729612510_BoVisker","DatabaseVoorS0fie");//srv997.hstgr.io
//
//if (!$con)
//{
//  die('Could not connect: ' . mysql_error());
//}
//
//mysqli_select_db("U729612510_slSieradenDB", $con);
//
//$article_id = 1;// $_GET['id'];
//
//if( ! is_numeric($article_id) )
//  die('invalid article id');
//
//$query = "SELECT * FROM `Sieraden` WHERE `id` = $article_id LIMIT 0 , 30";
//
//$sieraden = mysqli_query($query);
//
//echo "<h1>User Comments</h1>";
//
//// Please remember that  mysql_fetch_array has been deprecated in earlier
//// versions of PHP.  As of PHP 7.0, it has been replaced with mysqli_fetch_array.
//
//while($row = mysqli_fetch_array($sieraden, MYSQL_ASSOC))
//{
//  $prijs = $row['prijs'];
//  $naam = htmlspecialchars($row['naam'],ENT_QUOTES);
//
//  echo "  <div style='margin:30px 0px;'>
//      Name: $naam<br />
//      Prijs: $prijs<br />
//    </div>
//  ";
//}
//
//mysqli_close($con);
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <section>
        <h1>Sieraden</h1>
        <!-- TABLE CONSTRUCTION -->
<!--        <table>-->
<!--            <tr>-->
<!--                <th>Naam</th>-->
<!--                <th>Prijs</th>-->
<!--            </tr>-->
<!--            <!-- PHP CODE TO FETCH DATA FROM ROWS -->-->
<!--            --><?php
//                // LOOP TILL END OF DATA
//                while($rows=$sieraden->fetch_assoc())
//                {
//            ?>
<!--            <tr>-->
<!--                <!-- FETCHING DATA FROM EACH-->
<!--                    ROW OF EVERY COLUMN -->-->
<!--                <td>--><?php //echo $rows['naam'];?><!--</td>-->
<!--                <td>--><?php //echo $rows['prijs'];?><!--</td>-->
<!--            </tr>-->
<!--            --><?php
//                }
//            ?>
<!--        </table>-->
    </section>
</body>

</html>


</body>
</html>
