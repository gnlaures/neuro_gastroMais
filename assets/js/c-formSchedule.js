const scheduleForm = {
    "form": $('.c-scheduleForm form'),
    "nome": $('#cForm__schedule__nome'),
    "genero": $('#cForm__schedule__genero'),
    "email": $('#cForm__schedule__email'),
    "telefone": $('#cForm__schedule__telefone'),
    "procedimento": $('#cForm__schedule__procedimentos'),
    "convenio": $('#cForm__schedule__convenio'),
    "msg": $('#cForm__schedule__msg'),
    "check_terms": $('#cForm__schedule__confirm'),
    "cta": $('.c-scheduleForm .cBtn'),
    "wppNumber": $('.c-scheduleForm .cBtn').attr('data-whatsapp')
}

// select2 - procedimentos
scheduleForm.procedimento.select2({
    placeholder: "Selecione"
});


// validation
function validationField__scheduleForm() {
    validationField__nome(scheduleForm.nome);
    validationField__email(scheduleForm.email);
    validationField__telefone(scheduleForm.telefone);
    validationField__select(scheduleForm.convenio);
    validationField__select(scheduleForm.procedimento);
    validationField__select(scheduleForm.genero);
    validationField__terms(scheduleForm.check_terms);
}

// actions - fields
scheduleForm.procedimento.on('change', function() {
    validationField__select(scheduleForm.procedimento);
});
scheduleForm.convenio.on('change', function() {
    validationField__select(scheduleForm.convenio);
});
scheduleForm.genero.on('change', function() {
    validationField__select(scheduleForm.genero);
});
scheduleForm.telefone.on('focusout', function() {
    validationField__telefone(scheduleForm.telefone);
});
scheduleForm.email.on('focusout', function() {
    validationField__email(scheduleForm.email);
});
scheduleForm.nome.on('focusout', function() {
    validationField__nome(scheduleForm.nome);
});
scheduleForm.check_terms.on('change', function() {
    validationField__terms(scheduleForm.check_terms);
});

// whatsapp
function makeWppMessage() {
    const messaage =
        'Olá, gostaria de agendar uma consulta, segue os meus dados:' +
        ' Nome: ' + scheduleForm.nome.val() +
        ' | E-mail: ' + scheduleForm.email.val() +
        ' | Telefone: ' + scheduleForm.telefone.val() +
        ' | Genero: ' + scheduleForm.genero.val() +
        ' | Procedimento: ' + scheduleForm.procedimento.val() +
        ' | Convenio: ' + scheduleForm.convenio.val() +
        ' | Mensagem: ' + scheduleForm.msg.val();
    return messaage;
}
function openWpp() {
    const baseUrl = 'https://wa.me/' +
        scheduleForm.wppNumber +
        '?text=' +
        makeWppMessage();
    console.log(baseUrl)
    window.open(baseUrl, '_blank').focus();
}

// submit
scheduleForm.form.on('submit', function() {
    validationField__scheduleForm();

    let wppPermission = true;
    $('.cField').each(function() {
        if ($(this).hasClass('--error')) {
            wppPermission = false;
            return wppPermission;
        }
    });
    if (wppPermission) {
        openWpp();
    }
});
