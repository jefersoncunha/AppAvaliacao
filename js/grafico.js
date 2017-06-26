



function geraGrafico()
{
    $('#GraficoLine').empty(); //Limpando grafico

    /*recebe valor 
    var idFuncionario = formDados.cbx_funcionario.value;
    var DataInicio = formDados.de.value;
    var DataFim = formDados.de.value;
    */
    var idFuncionario = $('#cbx_funcionario').val();	//Pega valor do campo cbx_funcionario
    var DataInicio = $('#de').val();	//Pega valor do campo data
    var DataFim = $('#ate').val();	//Pega valor do campo data

    $.ajax({
        type: 'post', //Definimos o método HTTP usado
        dataType: 'json', //Definimos o tipo de retorno
        data:{
            idFuncionario: idFuncionario,
            DataInicio: DataInicio,
            DataFim: DataFim
             },
        url: 'getDadosGrafico.php', //Definindo o arquivo onde serão buscados os dados
        success: //retorno
                function (dados) {
                    alert('aAcerto');
                    alert(dados);
                    //carregaGrafico(data);
                    //for (var i = 0; dados.length > i; i++) {
                    //Adicionando registros retornados na tabela
                    //  $('#tabela').append('<tr><td>' + dados[i].id + '</td><td>' + dados[i].nome + '</td><td>' + dados[i].email + '</td></tr>');
                    //}
                },
        error:
                function (dados) {
                    //$('#errolog').show();
                    alert('Erro:');
                                        alert(dados);

                }
    });

}

function carregaGrafico(DadosDao) {

//torna grafico responsivo
    var options = {
        responsive: true
    };

//INFORMAÇÕES DO GRAFICO
//data responsavel pelo valores dos itens e visual do grafico
    var data = {
        //cabeçalhos
        labels: ["1", "2", "3", "4", "5", "6"],
        datasets: [
            {
                label: "Semana 1",
                fillColor: "rgba(187, 222, 251, 1)",
                strokeColor: "rgba(0, 0, 0, 1)",
                pointColor: "rgba(33, 150, 243, 1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [2, 4, 3, 2]
            }
        ]
    };
    //Script JavaScript que chama o gráfico
    window.onload = function () {

        // ctx busca o elemento canvas através do ID que vai guardar as informações para renderizar o gráfico
        //Aqui também é utilizado o método getContext(“2d”) que informa ao elemento canvas que ali será renderizado gráficos 2d.
        var ctx = document.getElementById("GraficoLine").getContext("2d");

        //LineChart vai receber os valores do objeto Chart gerado com base na data 
        //e options declaradas. Aqui informamos o tipo do gráfico que será criado, neste caso, Line
        var LineChart = new Chart(ctx).Line(data, options);
    };
}