<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autok validálása</title>
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
        <?php if (isset($_POST) && !empty($_POST)) : ?>
            <?php if (count($_POST) < 5) : ?>
                <h2 class="text-center m-3">Hiba az űrlap elküldésekor</h2>
                <ul>
                    <?php if (!isset($_POST['rendszam']) || empty($_POST['rendszam'])) : ?>
                        <li>A rendszám megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['marka']) || empty($_POST['marka'])) : ?>
                        <li>A márka megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['model']) || empty($_POST['model'])) : ?>
                        <li>A modell megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['gyarEv']) || empty($_POST['gyarEv'])) : ?>
                        <li>A gyártási év megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['uzemanyag']) || empty($_POST['uzemanyag'])) : ?>
                        <li>Az üzemanyag típusának megadása kötelező</li>
                    <?php endif; ?> 
                </ul>
            <?php else : ?>
                <?php 
                    $file = fopen("autok.txt", 'a');
                    $rendszam = $_POST['rendszam'];
                    $marka = $_POST['marka'];
                    $model = $_POST['model'];
                    $gyarEv = $_POST['gyarEv'];
                    $uzemanyag = "";
                    switch ($_POST['uzemanyag']) {
                        case "benzin":
                            $uzemanyag = "Benzines hajtású";
                            break;
                        case "diesel":
                            $uzemanyag = "gázolajjal működik";
                            break;
                        case "elektromos":
                            $uzemanyag = "elektromos hajtású";
                            break;
                        case "ohibridkj":
                            $uzemanyag = "hibrid változat";
                            break;
                    }

                    $sor = "$rendszam;$marka;$model;$gyarEv;$uzemanyag". PHP_EOL;
                    fwrite($file, $sor);
                    fclose($file);
                ?>
                <section id="megadott_adatok">
                    <h2 class="text-center m-3">Megadott adatok</h2>
                    <ul>
                        <li>Rendszám: <?php echo $rendszam ?> </li>
                        <li>Márka: <?php echo $marka ?> </li>
                        <li>Modell: <?php echo $model ?> </li>
                        <li>Gyártási év: <?php echo $gyarEv ?> </li>
                        <li>Üzemanyag típusa: <?php echo $uzemanyag ?></li>
                    </ul>
                </section>
            <?php endif; ?>
        <?php endif; ?>
    </main>
</body>

</html>
