// Отримуємо форму за допомогою id
var form = document.getElementById("myForm");

// Додаємо обробник подій на подію submit
form.addEventListener("submit", function (event) {
  // Забороняємо стандартну поведінку форми
  event.preventDefault();

  // Отримуємо дані форми
  var formData = new FormData(form);

  // Створюємо XMLHttpRequest об'єкт
  var xhr = new XMLHttpRequest();

  // Встановлюємо метод та адресу запиту
  xhr.open("POST", "todo_car_db.php");

  // Встановлюємо обробник подій для завершення запиту
  xhr.addEventListener("load", function () {
    // Виводимо результат в консоль
    console.log(xhr.responseText);
  });

  // Відправляємо дані форми на сервер
  xhr.send(formData);
});
