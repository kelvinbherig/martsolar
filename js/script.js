function comprar(){
    const linkWhatsApp = document.querySelector('.whatsapp');

    if (!linkWhatsApp) {
        throw new Error('Link do WhatsApp não encontrado.');
    }

    window.open(linkWhatsApp.href, '_blank', 'noopener,noreferrer');
}