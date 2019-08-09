const menu = document.getElementById('menu');
const btnHeader = document.getElementById('button');

btnHeader.addEventListener('click', e=>{
    menu.classList.toggle('active');
})
