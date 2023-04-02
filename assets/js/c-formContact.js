const contactForm = {
    "form": $('.c-contactForm form'),
    "nome": $('#cForm__contact__nome'),
    "email": $('#cForm__contact__email'),
    "telefone": $('#cForm__contact__telefone'),
    "assunto": $('#cForm__contact__assunto'),
    "msg": $('#cForm__contact__msg'),
    "check_terms": $('#cForm__contact__confirm'),
    "cta": $('.c-contactForm .cBtn'),
    "feedback": $('.c-contactForm .cForm__feedback'),
    "feedback_load": $('.c-contactForm .c-formFeedback__status.--load'),
    "feedback_fail": $('.c-contactForm .c-formFeedback__status.--fail'),
    "feedback_success": $('.c-contactForm .c-formFeedback__status.--success'),
}

// validation
function validationField__contactForm() {
    validationField__nome(contactForm.nome);
    validationField__email(contactForm.email);
    validationField__telefone(contactForm.telefone);
    validationField__assunto(contactForm.assunto);
    validationField__msg(contactForm.msg);
    validationField__terms(contactForm.check_terms);
}

// actions - fields
contactForm.assunto.on('focusout', function() {
    validationField__assunto(contactForm.assunto);
});
contactForm.telefone.on('focusout', function() {
    validationField__telefone(contactForm.telefone);
});
contactForm.email.on('focusout', function() {
    validationField__email(contactForm.email);
});
contactForm.nome.on('focusout', function() {
    validationField__nome(contactForm.nome);
});
contactForm.msg.on('focusout', function() {
    validationField__msg(contactForm.msg);
});
contactForm.check_terms.on('change', function() {
    validationField__terms(contactForm.check_terms);
});

// submit
contactForm.form.on('submit', function() {
    validationField__contactForm();

    // feedback show
    if (!contactForm.form.find('.cField.--error').length) {
        contactForm.feedback_load.removeClass('u-dnone');
        contactForm.feedback.removeClass('u-dnone');
        let formSent = false;

        // inserir lógica de envio do form
        setTimeout(() => {
            if (formSent) {
                contactForm.feedback_load.addClass('u-dnone');
                contactForm.feedback_success.removeClass('u-dnone');
            } else {
                contactForm.feedback_load.addClass('u-dnone');
                contactForm.feedback_fail.removeClass('u-dnone');
            }
        }, "1000");
    }
});
