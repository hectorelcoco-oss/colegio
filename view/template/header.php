<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>colegio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel='stylesheet' href='view/estilos.css'/>
</head>
<body>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <h3>Gestión de <?= $_GET["controller"] ?>s</h3>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3">
                            <?php if ($_GET["action"] == "list") { ?>
                                <a href="index.php?controller=<?= $_GET["controller"] ?>&action=edit"
                                    class="btn btn-outline-primary">➕Crear <?= $_GET["controller"] ?></a>
                            <?php } else {
                            ?> <a href="index.php?controller=<?= $_GET["controller"] ?>&action=list"
                                    class="btn btn-outline-primary">volver</a>                                   
                                <?php
                            }
                            foreach ($controllers as $txtBoton) {
                                if ($_GET["controller"] != $txtBoton) {
                                ?>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="index.php?controller=<?= $txtBoton ?>&action=list"
                                class="btn btn-outline-primary"><?= $txtBoton ?><?= $txtBoton =="rol" ? "e":"" ?>s</a>
                        <?php
                                } else {
                        ?>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="btn btn-outline-primary"><?= $txtBoton ?><?= $txtBoton =="rol" ? "e":"" ?>s</a>
                    <?php
                                }
                            }
                    ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr />
