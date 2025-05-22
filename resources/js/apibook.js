$(document).ready(function () {
    $(".btn-delete-libro").on("click", function (e) {
        e.preventDefault();

        const form = $(this).closest("form");

        alertify.confirm(
            "Confirmar eliminación",
            "¿Seguro que quieres eliminar este libro?",
            function () {
                form.submit();
            },
            function () {
                alertify.error("Eliminación cancelada");
            }
        );
    });
});
