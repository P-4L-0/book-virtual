$(document).ready(function () {
    $(".btn-delete-author").on("click", function (e) {
        e.preventDefault();

        const form = $(this).closest("form");

        alertify.confirm(
            "Confirmar eliminación",
            "¿Estás seguro de que deseas eliminar este autor?",
            function () {
                form.submit();
            },
            function () {
                alertify.error("Eliminación cancelada");
            }
        );
    });
});
