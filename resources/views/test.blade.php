<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="<?=URL::asset('/public/css/app.css'); ?>" rel="stylesheet">
  <title>Cargofy</title>
</head>
<body>
<br><br>
<div class="container">
    <h1>Form Request</h1>
    <p>{{$validationData}}</p>
</div>
  <script src="<?=URL::asset('/public/js/app.js'); ?>"></script>
</body>
</html>