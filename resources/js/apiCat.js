$(document).on("click", "img[data-id]", function () {
    const id = $(this).data("id");
    const element = this;
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    alertify.confirm(
        "¿Deseas eliminar la categoría?",
        function () {
            $.ajax({
                url: `/categoria/${id}`,
                type: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                    Accept: "application/json",
                },
                success: function (data) {
                    $(element).closest("div.relative").remove();
                    alertify.success(data.message || "Categoría eliminada");
                },
                error: function () {
                    alertify.error("Ha ocurrido un error");
                },
            });
        },
        function () {
            alertify.error("Cancelado");
        }
    );
});
