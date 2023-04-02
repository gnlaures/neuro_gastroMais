const cForm = document.querySelectorAll('.cForm');
const cForm__selects = document.querySelectorAll('.cForm select');

// feedbacks
function cForm__submit(e) {
    e.preventDefault();
}
function cForm__selectPlaceholderColor(select) {
    if (select.value.toLowerCase() === 'selecione') {
        select.closest('.cField').classList.add('is-placeholder-option-selected')
        select.closest('.cField').classList.remove('isnt-placeholder-option-selected')
    } else {
        select.closest('.cField').classList.add('isnt-placeholder-option-selected')
        select.closest('.cField').classList.remove('is-placeholder-option-selected')
    }
}

// select - text color
cForm__selects.forEach((select) => {
    select.addEventListener('focusin', () => {
        select.closest('.cField').classList.add('is-focus')
        cForm__selectPlaceholderColor(select)
    })
    select.addEventListener('change', () => {
        select.closest('.cField').classList.remove('is-focus')
        cForm__selectPlaceholderColor(select)
    })
    select.addEventListener('focusout', () => {
        select.closest('.cField').classList.remove('is-focus')
        cForm__selectPlaceholderColor(select)
    })
});

// validations
function validationField(response, element) {
    if (response) {
        element.closest('.cField').removeClass('--error');
        element.closest('.cField').addClass('--validated');
    } else {
        element.closest('.cField').addClass('--error');
        element.closest('.cField').removeClass('--validated');
    }
}
function validationField__nome(field) {
    if (field.val().length > 3) {
        validationField(true, field);
    } else {
        validationField(false, field);
    }
}
function validationField__assunto(field) {
    if (field.val().length > 5) {
        validationField(true, field);
    } else {
        validationField(false, field);
    }
}
function validationField__msg(field) {
    if (field.val().length > 20) {
        validationField(true, field);
    } else {
        validationField(false, field);
    }
}
function validationField__email(field) {
    if ((field.val().length > 3) &&
        (field.val().includes('@')) &&
        (field.val().includes('.'))) {
        validationField(true, field);
    } else {
        validationField(false, field);
    }
}
function validationField__telefone(field) {
    if ((field.val().length < 9) &&
        (field.val().length < 13) &&
        (/[a-zA-Z]/g.test(field))) {
        validationField(false, field);
    } else {
        validationField(true, field);
    }
}
function validationField__select(field) {
    if (field.val()) {
        validationField(true, field);
    } else {
        validationField(false, field);
    }
}
function validationField__terms(field) {if (field.is(":checked")){
    validationField(true, field);
} else {
    validationField(false, field);
}}

// submit
cForm.forEach((form) => {
   form.addEventListener('submit', cForm__submit);
});

