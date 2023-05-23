const menuIcon = document.querySelector('.menu-icon');
const menu_container = document.querySelector('.menu-container');

menuIcon.addEventListener('click', () => {
  menu_container.classList.toggle('open');
});
