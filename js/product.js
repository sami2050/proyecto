const $form = document.querySelector('#search');
const  mensaje = document.querySelector('#messenger');

async function buscar(event){

    event.preventDefault();

    const form = new FormData($form);

    const enviar = await fetch('server/product/search.php',{

        method: 'POST',
        body: form

    });

    const res = await enviar.json();

    console.log(res);

    if(res === 'o existe producto'){
        mensaje.innerHTML = `
        <span>${res}</span>
        `;
    }else{

        mensaje.innerHTML = `
        
        <table>
        <thead>
            <tr>
                <th>codigo producto</th>
                <th>nombre producto</th>
                <th>valor unitario</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>${res['codigo_producto']}</td>
            <td>${res['nombre_producto']}</td>
            <td>${res['valor_unitario']}</td>
            </td>
        </tr>
        <?php endforeach ?>

    </tbody>
    </table>
        
        `

    }

}


$form.addEventListener('submit', buscar);
