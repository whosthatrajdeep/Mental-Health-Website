const form = document.querySelector('form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const messageInput = document.querySelector('#message');
const articles = document.querySelectorAll('ul')[0];
const resources = document.querySelectorAll('ul')[1];

form.addEventListener('submit', (event) => {
  event.preventDefault();
  
});


articles.addEventListener('click', (event) => {
  event.preventDefault();
  
});


resources.addEventListener('click', (event) => {
  event.preventDefault();
  
  window.open(event.target.href, '_blank');
});