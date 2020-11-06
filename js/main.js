// Variables

let nav = document.getElementById('nav');
let menu = document.getElementById('enlaces');
let openNav = document.getElementById('open');
let botones = document.getElementsByClassName('btn-header');
let close = true;

function menus(){
    let Desplazamiento_Actual = window.pageYOffset;

    if(Desplazamiento_Actual <= 300){
        nav.classList.remove('nav2');
        nav.className = ('nav1');
        nav.style.transition = '1s';
        menu.style.top = '80px';
        openNav.style.color = '#fff';
    }else{
        nav.classList.remove('nav1');
        nav.className = ('nav2');
        nav.style.transition = '1s';
        menu.style.top = '100px';
        openNav.style.color = '#000';
    }
}

function apertura(){
    if(close){
        menu.style.width = '70vw';
        close = false;
    }else{
        menu.style.width = '0%';
        menu.style.overflow = 'hidden';
        close = true;
    }
}

window.addEventListener('load', function(){
    $('#onload').fadeOut();
    $('body').removeClass('hidden');
    menus();
});
window.addEventListener('click',function(e){
    console.log(e.target);
    if(close==false){
        let span = document.querySelector('span');
        if(e.target !== span && e.target !== openNav){
            menu.style.width = '0%';
            menu.style.overflow = 'hidden';
            close = true;
        }
    }
});
window.addEventListener('scroll', function(){
    console.log(window.pageYOffset);
    menus();
});
window.addEventListener('resize', function(){
    if(screen.width>= 700){
        close = true;
        menu.style.removeProperty('overflow');
        menu.style.removeProperty('width');
    }
});
openNav.addEventListener('click', function(){
    apertura();
});