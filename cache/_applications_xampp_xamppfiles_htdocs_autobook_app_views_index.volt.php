<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- -->
        <title>AutoBook</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <?= $this->tag->stylesheetLink('css/ie10-viewport-bug-workaround.css') ?>
        <?= $this->tag->stylesheetLink('css/dashboard.css') ?>
        <?= $this->tag->stylesheetLink('css/styles.css') ?>
        <?= $this->tag->stylesheetLink('css/dataTables.bootstrap.min.css') ?>

    </head>
    <body>
        <div class="container">
            <?= $this->getContent() ?>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?= $this->tag->javascriptInclude('js/jquery.dataTables.min.js') ?>
        <?= $this->tag->javascriptInclude('js/dataTable.bootstrap.min.js') ?>
        <?= $this->tag->javascriptInclude('js/holder.min.js') ?>
        <?= $this->tag->javascriptInclude('js/main.js') ?>
        <?= $this->tag->javascriptInclude('js/cars.js') ?>

    </body>
</html>
