"use strict";function _createForOfIteratorHelper(e,o){var t,n="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!n){if(Array.isArray(e)||(n=_unsupportedIterableToArray(e))||o&&e&&"number"==typeof e.length)return n&&(e=n),t=0,{s:o=function(){},n:function(){return t>=e.length?{done:!0}:{done:!1,value:e[t++]}},e:function(e){throw e},f:o};throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var c,l=!0,a=!1;return{s:function(){n=n.call(e)},n:function(){var e=n.next();return l=e.done,e},e:function(e){a=!0,c=e},f:function(){try{l||null==n.return||n.return()}finally{if(a)throw c}}}}function _unsupportedIterableToArray(e,o){if(e){if("string"==typeof e)return _arrayLikeToArray(e,o);var t=Object.prototype.toString.call(e).slice(8,-1);return"Map"===(t="Object"===t&&e.constructor?e.constructor.name:t)||"Set"===t?Array.from(e):"Arguments"===t||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t)?_arrayLikeToArray(e,o):void 0}}function _arrayLikeToArray(e,o){(null==o||o>e.length)&&(o=e.length);for(var t=0,n=new Array(o);t<o;t++)n[t]=e[t];return n}function goToSection__scroll(e,o,t,n,c){var l=$(window).scrollTop(),a=$(e).offset().top;a<l?setTimeout(function(){$("html, body").animate({scrollTop:a-o},n)},c):setTimeout(function(){$("html, body").animate({scrollTop:a-t},n)},c)}var openSubMenu,closeSubMenuReference,cSmartMenu=document.querySelectorAll(".c-smartMenu"),activeClass="is-active",cHamburguer=(cSmartMenu&&(cSmartMenu.forEach(function(e){e.classList.add("js-smartMenu"),Array.from(e.children[0].children).forEach(function(e){e.classList.add("js-smartMenu__firstSub")}),document.querySelectorAll(".c-smartMenu li").forEach(function(e){e.children[1]&&(e.classList.add("js-smartMenu__li"),e.children[0].classList.add("js-smartMenu__toggle"),e.children[1].classList.add("js-smartMenu__subMenu"))})}),(openSubMenu=document.querySelectorAll(".js-smartMenu__toggle")).forEach(function(o){o.closest(".c-smartMenu").classList.contains("--click")?o.addEventListener("click",function(e){e.preventDefault(),o.classList.toggle(activeClass),o.parentElement.classList.toggle(activeClass),o.nextElementSibling.classList.toggle(activeClass)}):o.addEventListener("mouseenter",function(e){e.preventDefault(),o.classList.toggle(activeClass),o.parentElement.classList.toggle(activeClass),o.nextElementSibling.classList.toggle(activeClass)})}),(closeSubMenuReference=document.querySelectorAll(".js-smartMenu__firstSub")).forEach(function(e){e.parentElement.parentElement.classList.contains("--vertical")||e.addEventListener("mouseleave",function(){cSmartMenu.forEach(function(e){e.classList.remove(activeClass),e.querySelectorAll("*").forEach(function(e){e.classList.remove(activeClass)})})})})),document.querySelectorAll(".c-hamburguer")),cleanClasses=(cHamburguer.forEach(function(e){e.addEventListener("click",function(){e.classList.contains("is-blocked")||e.classList.toggle("is-active")})}),function(e){for(var o=1;o<=12;o++)e.classList.remove("--col"+o);e.classList.remove("--colNaN"),e.classList.remove("u-jcc"),e.classList.remove("u-jcsb"),e.classList.remove("u-jcfs"),e.classList.remove("u-jcfe")}),managePadds=function(e,o){for(var t=1;t<=50;t++){var n,c=_createForOfIteratorHelper(e);try{for(c.s();!(n=c.n()).done;)n.value.classList.remove("u-pad"+t)}catch(e){c.e(e)}finally{c.f()}}var l,a=_createForOfIteratorHelper(e);try{for(a.s();!(l=a.n()).done;)l.value.classList.add("u-pad"+o)}catch(e){a.e(e)}finally{a.f()}},initResponsiveGrids=function(){cResponsiveGrid.forEach(function(e,o){var t={breakVW:e.getAttribute("data-break-vw").split(", ").map(Number),breakCols:e.getAttribute("data-break-cols").split(", ").map(Number),breakPaddings:e.getAttribute("data-break-padds").split(", ").map(Number),breakJC:e.getAttribute("data-break-jc").split(", ").map(String),initCols:parseInt(e.getAttribute("data-init-cols")),initPadding:e.getAttribute("data-init-padd"),initJC:e.getAttribute("data-init-jc"),vw:window.innerWidth,childrens:e.children.length},n=Array.prototype.slice.call(e.children,0),c=(e.classList.add("js-responsiveGrid"),t.breakCols.length);if(c===t.breakVW.length)for(var l=0;l<=c;l++)t.breakVW[l]>=t.vw&&(cleanClasses(e),managePadds(n,t.breakPaddings[l]),e.classList.add("--col"+t.breakCols[l]),e.classList.add(t.breakJC[l]),e.classList.add("u-calcPositionNegative"+t.breakPaddings[l])),t.vw>t.breakVW[0]&&(cleanClasses(e),managePadds(n,t.initPadding),e.classList.add("--col"+t.initCols),e.classList.add(t.initJC),e.classList.add("u-calcPositionNegative"+t.initPadding));else console.log("Erro na construção do grid responsivo")})},cResponsiveGrid=document.querySelectorAll(".c-responsiveGrid"),cForm=(window.addEventListener("load",initResponsiveGrids),window.addEventListener("resize",initResponsiveGrids),document.querySelectorAll(".cForm")),cForm__selects=document.querySelectorAll(".cForm select");function cForm__submit(e){e.preventDefault()}function cForm__selectPlaceholderColor(e){"selecione"===e.value.toLowerCase()?(e.closest(".cField").classList.add("is-placeholder-option-selected"),e.closest(".cField").classList.remove("isnt-placeholder-option-selected")):(e.closest(".cField").classList.add("isnt-placeholder-option-selected"),e.closest(".cField").classList.remove("is-placeholder-option-selected"))}function validationField(e,o){e?(o.closest(".cField").removeClass("--error"),o.closest(".cField").addClass("--validated")):(o.closest(".cField").addClass("--error"),o.closest(".cField").removeClass("--validated"))}function validationField__nome(e){3<e.val().length?validationField(!0,e):validationField(!1,e)}function validationField__assunto(e){5<e.val().length?validationField(!0,e):validationField(!1,e)}function validationField__msg(e){20<e.val().length?validationField(!0,e):validationField(!1,e)}function validationField__email(e){3<e.val().length&&e.val().includes("@")&&e.val().includes(".")?validationField(!0,e):validationField(!1,e)}function validationField__telefone(e){e.val().length<9&&e.val().length<13&&/[a-zA-Z]/g.test(e)?validationField(!1,e):validationField(!0,e)}function validationField__select(e){e.val()?validationField(!0,e):validationField(!1,e)}function validationField__terms(e){e.is(":checked")?validationField(!0,e):validationField(!1,e)}cForm__selects.forEach(function(e){e.addEventListener("focusin",function(){e.closest(".cField").classList.add("is-focus"),cForm__selectPlaceholderColor(e)}),e.addEventListener("change",function(){e.closest(".cField").classList.remove("is-focus"),cForm__selectPlaceholderColor(e)}),e.addEventListener("focusout",function(){e.closest(".cField").classList.remove("is-focus"),cForm__selectPlaceholderColor(e)})}),cForm.forEach(function(e){e.addEventListener("submit",cForm__submit)});var scheduleForm={form:$(".c-scheduleForm form"),nome:$("#cForm__schedule__nome"),genero:$("#cForm__schedule__genero"),email:$("#cForm__schedule__email"),telefone:$("#cForm__schedule__telefone"),procedimento:$("#cForm__schedule__procedimentos"),convenio:$("#cForm__schedule__convenio"),msg:$("#cForm__schedule__msg"),check_terms:$("#cForm__schedule__confirm"),cta:$(".c-scheduleForm .cBtn"),wppNumber:$(".c-scheduleForm .cBtn").attr("data-whatsapp")};function validationField__scheduleForm(){validationField__nome(scheduleForm.nome),validationField__email(scheduleForm.email),validationField__telefone(scheduleForm.telefone),validationField__select(scheduleForm.convenio),validationField__select(scheduleForm.procedimento),validationField__select(scheduleForm.genero),validationField__terms(scheduleForm.check_terms)}function makeWppMessage(){return"Olá, gostaria de agendar uma consulta, segue os meus dados: Nome: "+scheduleForm.nome.val()+" | E-mail: "+scheduleForm.email.val()+" | Telefone: "+scheduleForm.telefone.val()+" | Genero: "+scheduleForm.genero.val()+" | Procedimento: "+scheduleForm.procedimento.val()+" | Convenio: "+scheduleForm.convenio.val()+" | Mensagem: "+scheduleForm.msg.val()}function openWpp(){var e="https://wa.me/"+scheduleForm.wppNumber+"?text="+makeWppMessage();console.log(e),window.open(e,"_blank").focus()}scheduleForm.procedimento.select2({placeholder:"Selecione"}),scheduleForm.procedimento.on("change",function(){validationField__select(scheduleForm.procedimento)}),scheduleForm.convenio.on("change",function(){validationField__select(scheduleForm.convenio)}),scheduleForm.genero.on("change",function(){validationField__select(scheduleForm.genero)}),scheduleForm.telefone.on("focusout",function(){validationField__telefone(scheduleForm.telefone)}),scheduleForm.email.on("focusout",function(){validationField__email(scheduleForm.email)}),scheduleForm.nome.on("focusout",function(){validationField__nome(scheduleForm.nome)}),scheduleForm.check_terms.on("change",function(){validationField__terms(scheduleForm.check_terms)}),scheduleForm.form.on("submit",function(){validationField__scheduleForm();var e=!0;$(".cField").each(function(){if($(this).hasClass("--error"))return e=!1}),e&&openWpp()});var contactForm={form:$(".c-contactForm form"),nome:$("#cForm__contact__nome"),email:$("#cForm__contact__email"),telefone:$("#cForm__contact__telefone"),assunto:$("#cForm__contact__assunto"),msg:$("#cForm__contact__msg"),check_terms:$("#cForm__contact__confirm"),cta:$(".c-contactForm .cBtn"),feedback:$(".c-contactForm .cForm__feedback"),feedback_load:$(".c-contactForm .c-formFeedback__status.--load"),feedback_fail:$(".c-contactForm .c-formFeedback__status.--fail"),feedback_success:$(".c-contactForm .c-formFeedback__status.--success")};function validationField__contactForm(){validationField__nome(contactForm.nome),validationField__email(contactForm.email),validationField__telefone(contactForm.telefone),validationField__assunto(contactForm.assunto),validationField__msg(contactForm.msg),validationField__terms(contactForm.check_terms)}contactForm.assunto.on("focusout",function(){validationField__assunto(contactForm.assunto)}),contactForm.telefone.on("focusout",function(){validationField__telefone(contactForm.telefone)}),contactForm.email.on("focusout",function(){validationField__email(contactForm.email)}),contactForm.nome.on("focusout",function(){validationField__nome(contactForm.nome)}),contactForm.msg.on("focusout",function(){validationField__msg(contactForm.msg)}),contactForm.check_terms.on("change",function(){validationField__terms(contactForm.check_terms)}),contactForm.form.on("submit",function(){validationField__contactForm(),contactForm.form.find(".cField.--error").length||(contactForm.feedback_load.removeClass("u-dnone"),contactForm.feedback.removeClass("u-dnone"),setTimeout(function(){contactForm.feedback_load.addClass("u-dnone"),contactForm.feedback_fail.removeClass("u-dnone")},"1000"))}),$(".c-toggleItem__head").on("click",function(){$(this).closest(".c-toggleItem").toggleClass("is-active")}),Fancybox.bind("[data-fancybox]",{hideScrollbar:!1}),$(".c-scrollLink a").on("click",function(e){e.preventDefault(),goToSection__scroll($(this).attr("href"),110,110,700,10)});var swiper__medicalProcedures=new Swiper(".js-staffSlider",{slidesPerView:2,spaceBetween:10,navigation:{nextEl:".s-generalStaff .c-slideArrows__arrow.--r",prevEl:".s-generalStaff .c-slideArrows__arrow.--l"},autoplay:{delay:5e3},breakpoints:{1080:{slidesPerView:4,spaceBetween:20},780:{slidesPerView:3,spaceBetween:15}}}),manageNextSwipersEffect=function(){$(".js-swiperMedicalProcedures .swiper-slide").removeClass("swiper-next-next"),setTimeout(function(){$(".js-swiperMedicalProcedures .swiper-slide-next").nextAll().addClass("swiper-next-next")},"100")},btnSchedule=((swiper__medicalProcedures=new Swiper(".js-swiperMedicalProcedures",{slidesPerView:1,spaceBetween:0,navigation:{nextEl:".s-medicalProcedures__content__btns .c-slideArrows__arrow.--r",prevEl:".s-medicalProcedures__content__btns .c-slideArrows__arrow.--l"},breakpoints:{560:{slidesPerView:2},1130:{slidesPerView:3},1300:{slidesPerView:4}}})).on("slideChange",manageNextSwipersEffect),$(window).on("load",manageNextSwipersEffect),$(".s-medicalProcedure .cBtn")),lNav=(btnSchedule.on("click",function(e){e.preventDefault(),goToSection__scroll($(this).attr("href"),110,110,700,10)}),document.querySelector(".l-nav")),lNavScrollInitPosition=0;function scrollEffect(){0===document.body.getBoundingClientRect().top?(lNav.classList.remove("--scrolledDown"),lNav.classList.remove("--scrolledUp")):document.body.getBoundingClientRect().top>lNavScrollInitPosition?(lNav.classList.add("--scrolledUp"),lNav.classList.add("--scrolled"),lNav.classList.remove("--scrolledDown")):(lNav.classList.remove("--scrolledUp"),lNav.classList.add("--scrolledDown"),lNav.classList.add("--scrolled")),lNavScrollInitPosition=document.body.getBoundingClientRect().top}$(window).on("scroll",function(){scrollEffect()}),$(window).on("load",function(){scrollEffect()}),$(".js-toggleNavMobile").on("click",function(){$(".l-navMobile").toggleClass("is-active"),$(".js-closeNavMobile.c-hamburguer").toggleClass("is-active"),$("body").toggleClass("u-overflowBlocked")}),$(".js-openNavMobile").on("click",function(){$(".l-navMobile").addClass("is-active"),$(".js-closeNavMobile.c-hamburguer").addClass("is-active"),$("body").addClass("u-overflowBlocked")}),$(".js-closeNavMobile").on("click",function(){$(".l-navMobile").removeClass("is-active"),$(".lNav .c-hamburguer").removeClass("is-active"),$("body").removeClass("u-overflowBlocked")});