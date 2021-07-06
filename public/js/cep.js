$("#postcode").on("blur", (event) => {
    const value = event.target.value.replace(/\D/g, "");

    if (value.length != 8) {
        alert("CEP inválido");
        return;
    }

    $.ajax({
        type: "GET",
        url: `https://viacep.com.br/ws/${value}/json/`,
        dataType: "json",
        success: function (data) {
            if (data.erro) {
                alert("CEP não encontrado");
                return;
            }
            $("#address").val(data.logradouro);
            $("#complement").val(data.complemento);
            $("#district").val(data.bairro);
            $("#city").val(data.localidade);
            $("#state").val(data.uf);
        },
        error: function (data) {
            alert("CEP não encontrado");
        },
    });
});
