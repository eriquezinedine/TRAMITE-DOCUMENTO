const btn_admin = document.querySelector('.btn_admin');
const admin_despliegue= document.getElementById('admin_despliegue');
const detalle_icono = document.querySelector('.detalle_icono');

btn_admin.addEventListener('click', ()=>{
    admin_despliegue.classList.toggle('efect')
})

// detalle_icono.addEventListener('click', ()=>{admin_despliegue.classList.toggle('efect')})

// setTimeout(() => {

// }, 500);

const estado_pintar = document.querySelectorAll('.estado_pintar');
console.log(estado_pintar)

estado_pintar.forEach(element=>{
    let puntero = (element.textContent);
    switch (puntero) {
        case 'RECIBIDO':
            element.parentElement.style.background= '#D0F0D6'
            element.parentElement.style.color= '#23233C'
            element.parentElement.children[7].children[0].style.color= '#23233C'
            break;

        case 'FINALIZADO':
            element.parentElement.style.background='#8A1625'
            element.parentElement.style.color= '#F2F6FF'
            element.parentElement.children[7].children[0].style.color= '#F2F6FF'
            break;
    
        default:
            element.parentElement.style.background='#F2F6FF'
            break;
    }
})

console.log('hola aqui estamos aaa;x')