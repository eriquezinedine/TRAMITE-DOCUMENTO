const btnMovil = document.querySelector('.nav-movil__menu')
const content_rotate_movil = document.querySelector('.content-line__background');
const content_line = document.querySelector('.content-line');
const nav = document.querySelector('.nav_contenedor')

btnMovil.addEventListener('click',()=>{
    // header.classList.toggle('efectHeader');
    nav.classList.toggle('desplegar');
    /* Con este codigo lo tranformo en X*/
    content_rotate_movil.classList.toggle('efect-rotate'); //Rota los cuadros del menu
    content_line.classList.toggle('dis-block'); //Posiciona los cuadros al momento de rotar
})



///////////////////////// Efecto de click Curso //////////////////////////////////////////
const element_list =document.querySelectorAll('.list_item');

const select_e= (e)=>{
    puntero = e.target;
    remover_e();
    puntero.classList.add('element_list--efect')
}

const remover_e =()=>{
    console.log('gaaaa');
    element_list.forEach(elemt =>{
        elemt.classList.remove('element_list--efect');
    })
}

element_list.forEach(element => {
    element.addEventListener('click', select_e)
});
