$(document).ready(function () {
    //obtener numero de autores
    $.get("getAuthors", function (response) {
        $("#authorTotal").text(response.authors);
    }).fail(function () {
        $("#total").text("Error al cargar");
    });

    //obtener numero de libros
    $.get("getBooks", function (response) {
        $("#booksTotal").text(response.books);
    }).fail(function () {
        $("#total").text("Error al cargar");
    });

    //obtener numero de libros deseados
    $.get("getWishBooks", function (response) {
        $("#whishBooksTotal").text(response.total);
    }).fail(function () {
        $("#total").text("Error al cargar");
    });

    //obtener numero de categorias
    $.get("getCategorys", function (response) {
        $("#categorysTotal").text(response.total);
    }).fail(function () {
        $("#total").text("Error al cargar");
    });
});
