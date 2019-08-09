const formulario = document.getElementById('search');
const mensenger = document.getElementById('mesenger');


formulario.addEventListener('submit', validar);

async function validar(e){
    
    try{
        e.preventDefault();
        let data = new FormData(formulario);

        let enviar  = await fetch('server/client/searchClient.php', {

            method: 'POST',
            body: data

        })

        let response = await enviar.json();


        if(response === 'no existe cliente'){

            mensenger.innerHTML = `
            
            <span>${response}</span>
            `;
        }else{
            mensenger.innerHTML = `
            
            <table>
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Sede</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Ciudad</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>${response['cc_nit']}</td>
                    <td>${response['nombre']}</td>
                    <td>${response['apellido']}</td>
                    <td>${response['sede']}</td>
                    <td>${response['telefono']}</td>
                    <td>${response['direccion']}</td>
                    <td>${response['ciudad']}</td>
                    <td>${response['correo']}</td>
                    <td>
                    </td>
                </tr>
                <?php endforeach ?>

            </tbody>
            </table>
            `;
        }


        //console.log(response);

    }catch(err){
        console.log(err);
    }

}
