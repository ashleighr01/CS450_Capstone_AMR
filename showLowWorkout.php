<!DOCTYPE html>
<html>
    <head>
    <style>
        table {
        width: 100%;
        border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid grey;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
    </head>
    <body>

        <?php
            $value = intval($_GET['value']);

            $con = mysqli_connect('localhost','root','Keeper!1028','teamelite');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            $sql = "SELECT exerciseName, repetition, `sets`, coreSet, cardioSet FROM `lower` WHERE exerciseName = $value;";
            $result = mysqli_query($con, $sql);
            



            echo "<table>
            <tr>
                <th>exerciseName</th>
                <th>Repetition</th>
                <th>Sets</th>
                <th>Core</th>
                <th>Cardio</th>
            </tr>";

            while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['exerciseName'] . "</td>";
                  echo "<td>" . $row['repetition'] . "</td>";
                  echo "<td>" . $row['sets'] . "</td>";
                  echo "<td>" . $row['coreSet'] . "</td>";
                  echo "<td>" . $row['cardioSet'] . "</td>";
                  echo "</tr>";
                }   
            
            
            echo "</table>";
            mysqli_close($con);
        ?>
    </body>
</html>