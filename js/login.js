const formulario = document.getElementById('form');
const mensaje = document.getElementById('mesenger');

formulario.addEventListener('submit',validacion);

async function validacion(e){
    e.preventDefault();

    let data = new FormData(formulario);

    try{
        let enviar = await fetch('server/login/login.php',{

            method: 'POST',
            body: data

        })  

        let res = await enviar.json();

        if(res === 'conectando'){
            location.href = 'profile.php';
        }
        //console.log(res);
        mensaje.innerHTML = `
        <span>${res}</span>
        `

    }catch(e){
        console.log(e);
    }

}