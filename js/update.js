const form = document.getElementById('form-update');
const btn = document.querySelector('#btn-update');
const container = document.querySelector('#update-container');    


const mostrar = (e) =>{
    e.preventDefault();
    console.log('click');
    container.classList.add('update-active');
}


// const buscarCliente = async (e) =>{

//     try{

//         e.preventDefault();
    
//         const data = new FormData();

//         const resquest = await fetch('server/client/update.php',{

//             method: 'POST',

//             body: data

//         })

//         const response = await resquest.json();

//         console.log(response);

//     }catch(err){
//         console.log(err);
//     }



// }


btn.addEventListener('click', mostrar);
// form.addEventListener('submit', buscarCliente);
