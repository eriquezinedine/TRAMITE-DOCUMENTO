// const btn_expediente = document.querySelector('.btn_expediente');
// const btn_salirExpediente = document.querySelector('.btn_salirExpediente');

// const contenedorDetalle= document.querySelector('.contenedorDetalle');


// btn_expediente.addEventListener('click',()=>{

// })

const boton_detalle =document.querySelector('#boton_detalle');
const boton_salir =document.querySelector('#boton_salir');
const contenedorDetalle= document.querySelector('.contenedorDetalle');
const cerrar = document.querySelector('.detalle_icono .fas')

boton_detalle.addEventListener('click',()=>{
    contenedorDetalle.classList.toggle('efect')
})

cerrar.addEventListener('click',()=>{
    contenedorDetalle.classList.toggle('efect')
})