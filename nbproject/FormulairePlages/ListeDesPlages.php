<!DOCTYPE html>
<?php
include_once "Plages.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des Plages</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1>Liste des Plages</h1>
        <table class="table">
            <tr>
                <th>Plage </th>
                <th>Voir </th>
                <th>Modifier </th>
                <th>Supprimer </th>
            </tr>
            <?php
            $plages = Plage::getAllPlages();
            if ($plages != null) {
                foreach ($plages as $pla) {
                    ?>
                    <tr>

                        <td>Plage N°<?php echo $pla->id ?></td>
                        <td>
                            <a href="VoirPlage.php?id=<?php echo $pla->id ?>">
                                Voir
                            </a>

                        </td>
                        <td>
                            <a href=ModifierTriangle.php?id=<?php echo $tri->id ?>">
                                Modifier
                            </a>
                        </td>
                        <td>
                            <a href=SupprimerTriangle.php?id=<?php echo $tri->id ?>">
                                Supprimer
                            </a>
                        </td>

                    </tr>       

                    <?php
                }
            }
            ?>
    </body>
</html>
