<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<style>
</style>
</head>
<body>
<h1>Client side</h1>
<h3>POST XML data to <?php print_r($_SERVER['SERVER_NAME'] . "/rest/api/postXML/") ?></h3>
<form name="form" action="/rest/client/" method="post">
<textarea name="xml" rows="10" cols="100">
<?php print_r('<?xml version="1.0" encoding="utf-8"?><XML>Test XML</XML>') ?>
</textarea><br>
<input type="submit" value="POST Data">
</form>
</body>
</html>