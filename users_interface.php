<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Zarządzanie użytkownikami</title>
</head>
<body>
    <P> Wyświetl wszystkich użytkowników:</P>
   <?php
    require "connection.php";
    connection();
    echo "<table id='table1' class='fixed_headers' style='width:100%;' border='1'>
    <thead>
        <tr style='width:98%;'>
            <th>id </th>
            <th>sesa</th>
            <th>name</th>
            <th>surname</th>
            <th>password</th>

        </tr>
    </thead>";
    echo "<tbody>";
        if($result = mysqli_query($link,"select DISTINCT * from spl_users WHERE 1 ")){
        while($row = mysqli_fetch_assoc($result)) {
            $val1 = $row['id'];
            $val2 = $row['name'];
            $val3 = $row['surname'];
            $val4 = $row['password'];
            $val5=$row['sesa'];


            echo "<tr><td  style='width:20%;'>";
            echo $val1;
            echo "</td>";
            echo "<tr><td  style='width:20%;'>";
            echo $val5;
            echo "</td>";
            echo "<td  style='width:20%;'>";
            echo "$val2";
            echo "</td>";
            echo "<td  style='width:20%;'>";
            echo "$val3";
            echo "</td>";
            echo "<td style='width:20%;'>";
            echo "$val4";
            echo "</td>";
            echo "</tr>" ;
        }
    }
    mysqli_free_result($result);
    mysqli_close($link);
    echo "</tbody>
         </table>";
         echo '<br>';
   ?>
   
    <div class="">
    <br>
    <p> Dodaj nowego użytkownika</p>
    <form action="add_new_user.php" class ="login" method="post">
        SESA:<br>
        <input type="text" name="sesa" value="">
        <br>
        Imię:<br>
        <input type="text" name="name" value="">
        <br>
        Nazwisko:<br>
        <input type="text" name="surname" value="">
        <br>
        Hasło:<br>
        <input type="password" name="password" value="">
        <br><br>
        <input type="submit" value="Dodaj">
      </form>
      <p class="status">

      </p>

    </div>
    <div class="content">

    </div>
</body>
</html>