let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

let sections = document.querySelectorAll('section');
let navlinks = document.querySelectorAll('header .navbar a');

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    sections.forEach(sec => {
        let top = window.scrollY;
        let height = sec.offsetHeight;
        let offset = sec.offsetTop - 150;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navlinks.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`header .navbar a[href*="${id}"]`).classList.add('active');
        }
    });
};


let searchForm = document.querySelector('#search-form');
let searchLogo = document.querySelector('#search');
let closeLogo = document.querySelector('#close');

searchLogo.onclick = () => {
    searchForm.classList.add('activate');
}
closeLogo.onclick = () => {
    searchForm.classList.remove('activate');
}
