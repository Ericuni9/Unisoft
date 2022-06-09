function funcao1() {
    alert("Sua conta foi criada com sucesso!!");
}

//ANIMAÇÕES

const target = document.querySelectorAll('[data-anime]');
const animationClass = "animate";

function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    target.forEach(function (element) {
        if ((windowTop) > element.offsetTop) {
            element.classList.add(animationClass)
        } else {
            element.classList.remove(animationClass)
        }
    })
}

animeScroll();

window.addEventListener('scroll', function () {
    animeScroll();
});

$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });

    //SLIDE UP

    $('.scroll-up-btn').click(function () {
        $('html').animate({ scrollTop: 0 });
    });
});

// Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.

(function () {
    'use strict';
    window.addEventListener('load', function () {

        // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.

        var forms = document.getElementsByClassName('needs-validation');

        // Faz um loop neles e evita o envio

        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();