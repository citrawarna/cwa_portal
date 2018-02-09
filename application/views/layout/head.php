<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $description ?>">
    <meta name="author" content="Refo Junior">
    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/jquery-ui.css') ?>">
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/jquery-1.12.4.js') ?>"></script>
    <script src="<?= base_url('assets/jquery-ui.js') ?>"></script>

</head>
<script>
    $( function() {
     $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    
    } );
    </script>
<style>
	a:hover {
		text-decoration: none;
		color:blue;
	}
</style>