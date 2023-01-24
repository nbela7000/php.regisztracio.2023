<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztrált autók</title>
        <!-- Latest compiled and minified CSS -->
        <link href="bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="style.css">
</head>

<body>
<header>
        <nav class="navbar navbar-dark bg-dark justify-content-center">
            <form class="form-inline">
              <button class="btn btn-outline-success" type="button"><a href="index.php">Új autó felvétele</a></button>
              <button class="btn btn-sm btn-outline-secondary" type="button"><a href="regisztraltAutok.php">Regisztrált autók</a></button>
            </form>
          </nav>
    </header>

    <main class="container">
        <h2 class="text-center m-3">Regisztrált autók adatbázisa</h2>
        <table  class="table table-hover">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Rendszám</th>
                <th scope="col">Márka</th>
                <th scope="col">Modell</th>
                <th scope="col">Gyártási év</th>
                <th scope="col">Üzemanyag típusa</th>
            </tr>
            <?php
            $file = fopen("autok.txt", "r");
            $i = 0;
            while ($sor = fgets($file)) {
                $i++;
                $adatok = explode(";", $sor);
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $adatok[0] ?></td>
                    <td><?php echo $adatok[1] ?></td>
                    <td><?php echo $adatok[2] ?></td>
                    <td><?php echo $adatok[3] ?></td>
                    <td><?php echo $adatok[4] ?></td>
                </tr>
            <?php
            }
            fclose($file);
            ?>
        </table>
    </main> 
</body>
</html>
