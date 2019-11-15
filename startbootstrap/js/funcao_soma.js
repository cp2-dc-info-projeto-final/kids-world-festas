function soma(id) {
    var preco = parseFloat($("input[name='preco" + id + "']").val());
    total = parseFloat($("#resultado").val());
    if ($("input[name='prod" + id + "']").prop('checked')) {
        total += preco;
    } else {
        total -= preco;
    }
    return $("#resultado").val(total);
}