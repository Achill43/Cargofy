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
    <form action="/testForm" method="post" class="form-horizontal">
    {{csrf_field()}}
        <div class="form-group">
            <label>Точка відправлення</label>
            <input type="text" class="form-control" name="APoint" required>
        </div>
        <div class="form-group">
            <label>Точка призначення</label>
            <input type="text" class="form-control" name="BPoint" required>
        </div>
        <div class="form-group">
            <label>Вантаж</label>
            <input type="text" class="form-control" name="product" required>
        </div>
        <div class="form-group">
        <label>Вага</label>
            <input type="number" class="form-control" name="weight" required>
        </div>
        <button type="submit" class="btn btn-primary">Створити</button>
    </form>
</div>
  <script src="<?=URL::asset('/public/js/app.js'); ?>"></script>
</body>
</html>