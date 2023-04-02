<div class="c-contactForm">
    <form action="#" class="cForm" id="">
        <div class="cForm__hero">

            <div class="cForm__group u-fw100">
                <div class="cField u-fw50 --default">
                    <div class="cField__head">
                        <label for="cForm__contact__nome">Nome Completo*</label>
                    </div>
                    <div class="cField__content">
                        <input type="text" id="cForm__contact__nome" placeholder="Nome Completo">
                    </div>
                </div>
                <div class="cField u-fw50 --default">
                    <div class="cField__head">
                        <label for="cForm__contact__email">E-mail*</label>
                    </div>
                    <div class="cField__content">
                        <input type="email" id="cForm__contact__email" placeholder="E-mail">
                    </div>
                </div>
                <div class="cField u-fw50 --default">
                    <div class="cField__head">
                        <label for="cForm__contact__telefone">Telefone*</label>
                    </div>
                    <div class="cField__content">
                        <input type="text" id="cForm__contact__telefone" placeholder="(__) _____-____">
                    </div>
                </div>
                <div class="cField u-fw50 --default">
                    <div class="cField__head">
                        <label for="cForm__contact__assunto">Assunto*</label>
                    </div>
                    <div class="cField__content">
                        <input type="text" id="cForm__contact__assunto" placeholder="">
                    </div>
                </div>
            </div>

            <div class="cForm__group u-fw100">
                <div class="cField u-fw100 --default">
                    <div class="cField__head">
                        <label for="cForm__contact__msg">Mensagem</label>
                    </div>
                    <div class="cField__content">
                        <textarea id="cForm__contact__msg" placeholder="Mensagem"></textarea>
                    </div>
                </div>
                <div class="cField u-fw100 --default --check">
                    <div class="cField__content">
                        <div class="cField__content__check">
                            <input type="checkbox" id="cForm__contact__confirm">
                            <label for="cForm__contact__confirm">Declaro que aceito os <a href="termos-de-uso" target="_blank">termos de uso</a>,
                                <a href="termos-de-privacidade" target="_blank">política de privacidade</a> e <a href="termos-de-cookies" target="_blank">política de cookies</a>. *</label>
                        </div>
                    </div>
                </div>
                <div class="cField u-fw100 --default">
                    <div class="cField__content">
                        <button class="cBtn --primary --l">
                            <div class="cBtn__hero">
                                <div class="cBtn__caption">Enviar</div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cForm__feedback u-dnone">
            <?php include('assets/parts/c-formFeedback.php'); ?>
        </div>
    </form>
</div>


