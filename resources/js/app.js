require('./bootstrap');


window.addEventListener("DOMContentLoaded", () => {
  $form = document.querySelector(".delete-form");

  $form.addEventListener("submit", (e) => {
    if (!confirm("Confermi di voler eliminare il post?")) {
      e.preventDefault();
    }
  })
});