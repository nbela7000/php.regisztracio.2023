<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autók regisztrálása</title>
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
        <h2 class="text-center m-3">Új autó felvétele</h2>
        <form action="adatfeldolgozas.php" method="POST" name="autoregist">
            <div class="mb-3 form-group">
                <label class="form-label" for="rendszam">Rendszám: </label>
                    <input name="rendszam" id="rendszam_input" class="form-control" type="text" placeholder="Rendszám"> 
            </div>
            <div class="mb-3 form-group">
                <label class="form-label" for="marka">Márka: </label>
                    <input name="marka" id="marka_input" class="form-control" type="text"> 
            </div>
            <div class="mb-3 form-group">
                <label class="form-label" for="model">Modell: </label>
                    <input name="model" id="model_input" class="form-control" type="text">
            </div>
            <div class="mb-3 form-group">
                <label class="form-label" for="gyarEv">Gyártási év: </label>
                    <input name="gyarEv" id="gyarEv_input" class="form-control" type="number">
            </div>
            <div class="mb-3 form-group">
                <label class="form-label" for="uzemanyag"> Üzemanyag típusa: </label>
                    <select name="uzemanyag" id="uzemanyag_input" class="form-select">
                        <option value="">Válassza ki!</option>
                        <option value="benzin">benzin</option>
                        <option value="diesel">gázolaj</option>
                        <option value="elektromos">elektromos</option>
                        <option value="hibrid">hibrid</option>
                    </select> 
            </div> 
            <input class="btn btn-outline-primary mb-3" type="submit" value="Felvesz"> 
        </form>
    </main>
</body>
</html>
