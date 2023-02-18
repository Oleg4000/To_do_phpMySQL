// Отримуємо кнопку з HTML
const addButton = document.getElementById('add-button');

// Додаємо обробник події для кнопки
addButton.addEventListener('click', () => {
  // Створюємо новий об'єкт XMLHttpRequest
  const xhr = new XMLHttpRequest();

  // Встановлюємо метод запиту та URL
  xhr.open('POST', '/update-data.php');

  // Встановлюємо заголовок запиту для передачі даних у форматі JSON
  xhr.setRequestHeader('Content-Type', 'application/json');

  // Створюємо об'єкт даних, який містить поточну дату
  const data = {
    submit_date: new Date().toISOString()
  };

  // Відправляємо запит на сервер з даними у форматі JSON
  xhr.send(JSON.stringify(data));
});
