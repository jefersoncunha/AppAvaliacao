
//torna grafico responsivo
var options = {
    responsive: true
};

//INFORMAÇÕES DO GRAFICO
    //data responsavel pelo valores dos itens e visual do grafico
var data = {
    //cabeçalhos
    labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
    datasets: [
        
        {
            label: "Semana 1",
            fillColor: "rgba(187, 222, 251, 1)",
            strokeColor: "rgba(0, 0, 0, 1)",
            pointColor: "rgba(33, 150, 243, 1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            //informar dados
            data: [2, 4, 5,3,3]
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
}
