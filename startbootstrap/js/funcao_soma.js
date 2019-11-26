function soma(id) {
    var preco = parseFloat($("input[name='preco" + id + "']").val());
    total = parseFloat($("#resultado").html());
    if ($("input[name='prod" + id + "']").prop('checked')) {
        total += preco;
    } else {
        total -= preco;
    }
    $("#resultado").html(total);
}