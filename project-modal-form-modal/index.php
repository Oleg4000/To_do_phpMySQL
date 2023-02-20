<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project</title>
  <link rel="stylesheet" href="styles/style.css">
  <script src="scripts/script.js" defer></script>
</head>

<body>
  <!-- <section class="section">
    <h1 class="section__title">Модальное окно</h1>
    <button class="section__button section__button1">Открыть</button>
  </section> -->

  <section class="section">
    <h1 class="section__title">Редагувати завдання</h1>
    <button class="section__button section__button2">Редагувати завдання</button>
  </section>

  <div class="modal modal1">
    <div class="modal__main">
      <h2 class="modal__title">Модальное окно</h2>

      <!-- <div class="modal__container">
        <p>Сделаем правильно</p>
        <p>HTML CSS JavaScript</p>
      </div> -->

      <!--  <button class="modal__btn">Смотреть видео</button>
      <button class="modal__close">&#10006;</button> -->
    </div>
  </div>

  <div class="modal modal2">
    <div class="modal__main">
      <h2 class="modal__title">Редагувати завдання</h2>

      <div class="modal__container">
        <form id="editTaskForm" action="edit.php" method="POST">
          <input type="hidden" name="id_task" value="<?= $item[0] ?>">
          <p><span>Місто</span></p>
          <input type="text" name="city">
          <p><span>Компанія</span></p>
          <input type="text" name="company">
          <p><span>Адреса</span></p>
          <input type="text" name="adress">
          <p><span>Хто призначив </span></p>
          <input type="text" name="who">
          <p><span>Опис завдання</span></p>
          <textarea type="text" name="task"></textarea>
          <p><span>Розмір об'єкту</span></p>
          <input type="text" name="object_size">
          <p><span>Пріоритет</span></p>
          <input type="text" name="priority">
          <p><span>Що зробити</span></p>
          <input type="text" name="take_or_away">
          <p><span>Дата початку</span></p>
          <input type="date" name="date_start">
          <p><span>Дата закінчення</span></p>
          <input type="date" name="date_end">
          <button type="submit">Додати завдання</button>
        </form>
      </div>

      <button class="modal__close">&#10006;</button>
    </div>
  </div>
</body>

</html>