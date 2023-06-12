<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>СК Фаворит ЮГ-СТРОЙ</title>
  <link rel="stylesheet" href="css/style3.css">
</head>
<body>
<div id = "form2">
        <div id = "block2">
          <p><a href="index2.php">Назад</a></p>
        </div>
      </div>
<div class = form1>
<h1>Добавление сотрудников</h1>
<form action="addsotr.php" method="post">
    <div class="input-form">
    <input type="text" class="form-control" name="fio"\
    id="fio" placeholder="ФИО"><br>
  </div>
  <div class="input-form">
    <input type="date" class="form-control" name="data"
    id="data" placeholder="Дата рождения"><br>
  </div>
  <div class="input-form">
    <input type="integer" class="form-control" name="passport"
    id="passport" placeholder="Серия/номер пасспорта"><br>
  </div>
  <div class="input-form">
    <input type="text" class="form-control" name="dolj"
    id="dolj" placeholder="Должность"><br>
  </div>
  <div class="input-form">
    <input type="text" class="form-control" name="prorab"
    id="prorab" placeholder="Прораб"><br>
  </div>
  <div class="input-form">
			<input type="submit" value="Сохранить">
		</div>
</div>  
</body>