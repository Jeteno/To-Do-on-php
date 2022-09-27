<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
   <section class="body body-conteiner">
      <div class="body__share">
         <div class="body__title">
            <h1 class="title">
               Список дел
            </h1>
         </div>
         <div class="body__form form">
            <form class="form__task" action="/add.php" method="post">
               <input class="form-control" type="text" name="task" id="task" placeholder="Нужно сделать">
               <button class="btn-task btn btn-success" type="submit" name="seandTask">Отправить</button>
            </form>
         </div>
      </div>
      <div class="task__conteiner">
      <?php
         require 'configDB.php';

         echo '<ul class="ul-task">';
         $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
         while($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<li><b>'.$row->task.'</b><a href="delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
         }
         echo '</ul>';
      ?>
      </div>
   </section>
</body>
</html>