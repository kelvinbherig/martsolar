function comprar(produto){
    const linkWhatsApp = document.querySelector('.whatsapp');

    if (!linkWhatsApp) {
        throw new Error('Link do WhatsApp não encontrado.');
    }

    const mensagem = produto
        ? `Olá, gostaria de receber um orçamento para o ${produto}.`
        : 'Olá, gostaria de saber mais sobre os kits solares.';
    const urlWhatsApp = new URL(linkWhatsApp.href);
    urlWhatsApp.searchParams.set('text', mensagem);

    window.open(urlWhatsApp.toString(), '_blank', 'noopener,noreferrer');
}

const formOrcamento = document.querySelector('#form-orcamento');

if (formOrcamento) {
    formOrcamento.addEventListener('submit', (event) => {
        event.preventDefault();

        const linkWhatsApp = document.querySelector('.whatsapp');

        if (!linkWhatsApp) {
            throw new Error('Link do WhatsApp não encontrado.');
        }

        const dados = new FormData(formOrcamento);
        const mensagem = [
            'Olá, gostaria de solicitar um orçamento de energia solar.',
            '',
            `Nome: ${dados.get('nome')}`,
            `WhatsApp: ${dados.get('telefone')}`,
            `E-mail: ${dados.get('email') || 'Não informado'}`,
            `Cidade/UF: ${dados.get('cidade')}`,
            `Valor médio da conta: ${dados.get('conta')}`,
            `Tipo de imóvel: ${dados.get('imovel')}`,
            `Detalhes: ${dados.get('detalhes') || 'Não informado'}`
        ].join('\n');
        const urlWhatsApp = new URL(linkWhatsApp.href);
        urlWhatsApp.searchParams.set('text', mensagem);

        window.location.href = urlWhatsApp.toString();
    });
}