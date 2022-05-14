let userBox = document.querySelector('.header .navbar .user-box');

document.querySelector('#user-btn').onclick = () => {
    userBox.classList.toggle('active');
    navvbar.classList.remove('active');
}

let navvbar = document.querySelector('.header .navbar .navvbar');

document.querySelector('#menu-btn').onclick = () => {
    navvbar.classList.toggle('active');
    userBox.classList.remove('active');
}

window.onscroll = () => {
    userBox.classList.remove('active');
    navvbar.classList.remove('active');

    if (window.scrollY > 60) {
        document.querySelector('.header .navbar').classList.add('active');
    } else {
        document.querySelector('.header .navbar').classList.remove('active');
    }
}