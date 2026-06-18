function calcularEconomia() {

    let conta =
    parseFloat(document.getElementById('conta').value);

    let economia = conta * 0.90;

    document.getElementById('resultado').innerHTML = `
        <h3>Economia Mensal: R$ ${economia.toFixed(2)}</h3>
    `;
}