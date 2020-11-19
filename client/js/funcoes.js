function exibirMensagemErro(titulo, texto) {
    var texto = texto.replace(/<p>/g, " ");
    var texto = texto.replace(/<\/p>/g, " ");
    Swal.fire({
            title: titulo,
            html: texto,
            icon: 'error',
            confirmButtonText: 'OK'
    })
};


function exibirMensagem(titulo, texto, tipo) {
    // tipos -> warning, error, success

    var texto = texto.replace(/<p>/g, " ");
    var texto = texto.replace(/<\/p>/g, " ");
    Swal.fire({
            title: titulo,
            html: texto,
            icon: 'warning',
            confirmButtonText: 'OK'
    })
};

function exibirMensagemSucesso(titulo, texto) {
    var texto = texto.replace(/<p>/g, " ");
    var texto = texto.replace(/<\/p>/g, " ");
    Swal.fire({
            title: titulo,
            html: texto,
            icon: 'success',
            confirmButtonText: 'OK'
    })
};