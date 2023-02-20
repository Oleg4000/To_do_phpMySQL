<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificate</title>
</head>

<body>
    <button id="editBtn">Редагувати</button>

    <div id="editForm" class="modal">
        <h2>Змінити завдання</h2>
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
    <script src="/todo_modal_modificate.js"></script>
</body>

</html>