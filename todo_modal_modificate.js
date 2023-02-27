// Отримання елементів DOM
/* var modal = document.getElementById("editForm");
var btn = document.getElementById("btn-open-modal");
var span = document.getElementsByClassName("modal-close")[0]; */

// Дії, які відбуваються при кліку на кнопку
/* btn.onclick = function() {
  modal.style.display = "block";
}
 */
// Дії, які відбуваються при кліку на хрестик
/* span.onclick = function() {
  modal.style.display = "none";
}
 */
// Дії, які відбуваються при кліку поза вікном
/* window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
 */
// отримуємо необхідні елементи зі сторінки
const modalWrapper = document.querySelector('.modal-wrapper');
const openEditFormBtn = document.querySelector('#openEditFormBtn');
const closeEditFormBtn = document.querySelector('#closeEditFormBtn');

// відкриття модального вікна
openEditFormBtn.addEventListener('click', function() {
  modalWrapper.style.display = 'block';
});

// закриття модального вікна
closeEditFormBtn.addEventListener('click', function() {
  modalWrapper.style.display = 'none';
});
