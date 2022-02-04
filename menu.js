const menu = document.getElementById('menu');
const menuItems = document.getElementsByClassName('menuItem');
const hamburger = document.getElementById('hamburger');
const menuEscolhas = document.getElementsByClassName('menuEscolhas');
const menuFechar = document.getElementsByClassName('menuFechar');

function mexerMenu() {
    if (menu.classList.contains('mostrarMenu')) {
        menu.classList.remove('mostrarMenu');
        menuFechar.style.display = 'none';
        menuEscolhas.style.display = 'block';
    } else{
        menu.classList.add('mostrarMenu');
        menuFechar.style.display = 'block';
        menuEscolhas.style.display = 'none';
    }
}

hamburger.addEventListener("click", mexerMenu);