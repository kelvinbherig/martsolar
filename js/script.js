function comprar(produto, valor){

    fetch('api/criar-pagamento.php', {
        method: 'POST',
        headers:{
            'Content-Type':'application/json'
        },
        body: JSON.stringify({
            produto: produto,
            valor: valor
        })
    })
    .then(response => response.json())
    .then(data => {

        if(data.link){
            window.location.href = data.link;
        }

    })
    .catch(error => {
        console.log(error);
    });

}