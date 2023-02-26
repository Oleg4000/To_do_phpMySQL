/* // Отримайте модальне вікно*/

// Отримуємо посилання на модальне вікно та кнопку відкриття форми
const modal = document.getElementById("myModal");
const btn = document.getElementById("myBtn");

// Отримуємо елемент, що закриває модальне вікно
const span = document.getElementsByClassName("close")[0];

// Додаємо обробник подій на кнопку відкриття форми
btn.onclick = function () {
  modal.style.display = "block";
};

// Додаємо обробник подій на елемент, що закриває модальне вікно
span.onclick = function () {
  modal.style.display = "none";
};

// Додаємо обробник подій на відступ модального вікна, який закриває вікно, якщо користувач клікає на нього
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
