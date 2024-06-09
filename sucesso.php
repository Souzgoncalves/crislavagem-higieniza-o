<?php
session_start();
if (!isset($_SESSION['username']))
{
   header('Location: ');
   exit;
}
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="generator" content="WYSIWYG Web Builder 18 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="Untitled1.css" rel="stylesheet">
<link href="sucesso.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="wb.stickylayer.min.js"></script>
<script>
$(document).ready(function()
{
   $("#Layer1").stickylayer({orientation: 5, position: [0, 0], delay: 500});
});
</script>
</head>
<body>
<div id="container">

</div>
<div id="Layer1">
</div>
</body>
</html>