$(document).ready(function () {
    const csrfToken = $('meta[name="csrf-token"]').attr("content");
    const heartFilled = "/img/like.png"; //corregido
    const heartEmpty = "/img/heart.png"; //corregid0

    $(".toggle-favorito").on("click", function () {
        const item = $(this);
        const libroId = item.data("id");

        $.ajax({
            url: `/libros/${libroId}/toggle-favorito`,
            method: "POST",
            contentType: "application/json",
            headers: {
                "X-CSRF-TOKEN": csrfToken,
            },
            data: JSON.stringify({}),
            success: function (data) {
                if (data.favorito) {
                    item.attr("src", heartFilled);
                } else {
                    item.attr("src", heartEmpty);
                }
            },
            error: function () {
                const alerta = $("#alerta-error");
                alerta.removeClass("hidden").addClass("opacity-100");

                setTimeout(() => {
                    alerta.addClass("opacity-0");
                    setTimeout(() => {
                        alerta.addClass("hidden").removeClass("opacity-0");
                    }, 300);
                }, 3000);
            },
        });
    });

    $(".btn-eliminar").on("click", function (e) {
        e.preventDefault();

        const form = $(this).closest("form");

        alertify.confirm(
            "Confirmar eliminación",
            "¿Estás seguro que quieres eliminar este libro?",
            function () {
                form.submit();
            },
            function () {
                alertify.error("Eliminación cancelada");
            }
        );
    });

    $(".btn-quit-fav").on("click", function (e) {
        e.preventDefault();

        const form = $(this).closest("form");

        alertify.confirm(
            "Confirmar acción",
            "¿Quieres quitar este libro de tus favoritos?",
            function () {
                form.submit();
            },
            function () {
                alertify.error("Acción cancelada");
            }
        );
    });

});
