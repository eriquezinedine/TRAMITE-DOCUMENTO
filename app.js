let fromFut =document.getElementById('fromFut')
let btn_fut = document.getElementById('btn_fut')
let intpuFile = document.getElementById('ruta');
let ruta = '';
let respuesta

intpuFile.addEventListener('change',(e)=>{
    ruta = e.target.files[0];
    console.log(ruta);
})
const tiempoTranscurrido = Date.now();
const hoy = new Date(tiempoTranscurrido);
let fecha = `${hoy.getFullYear()}-${hoy.getMonth()}-${hoy.getDate()}`;

let codfut ='';
let passfut ='';

btn_fut.addEventListener('click', async (e)=>{
    e.preventDefault();
    codfut =hoy.getFullYear()+`-${getRandomInt(0,1001)}`
    let formulario = new FormData(fromFut);
            formulario.append('ruta',ruta);
            formulario.append('fecha',fecha);
            formulario.append('codfut',codfut);
            // formulario.append('id',intid);
            e.preventDefault(); //evito la recarga por defecto del formulario
            let resp = await fetch("http://localhost/tramite/TRAMITE-DOCUMENTO/optener.php",{
                method:'POST',
                body: formulario
            })
            let dato = await resp.text(); // para comprobar que se registro solo devuelvo la ID
            Swal.fire(dato)

})


function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}
