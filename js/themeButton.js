const themeButton = document.getElementById('theme-button');
const body = document.body;

themeButton.addEventListener('click', function() {
  body.classList.toggle('light-theme');
  body.classList.toggle('dark-theme');
});
