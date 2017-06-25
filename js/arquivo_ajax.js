//CRIA A VARI�VEL RETORNO
var retorno;
function CarregaArquivo(url, valor)
{
    retorno = null;
    //CRIA O OBJETO HttpRequest PARA O RESPECTIVO NAVEGADOR
    //Mozilla Fire Fox / Safari ...
    if (window.XMLHttpRequest) {
        retorno = new XMLHttpRequest();
        //SETA A FUN��O QUE SER� CHAMADA QUANDO O AJAX DER UM RETORNO
        retorno.onreadystatechange = processReqChange;
        //ABRE A REQUISI��O AJAX, PASSANDO O M�TODO DE ACESSO, URL E O PAR�METRO
        retorno.open("GET", url + '?grupo=' + valor, true);
        //INICIA O TRANSPORTA DOS OBJETOS NA REQUISI��O
        retorno.send(null);
    } else if (window.ActiveXObject) {
        //IE
        retorno = new ActiveXObject("Microsoft.XMLHTTP");
        if (retorno) {
            //SETA A FUN��O QUE SER� CHAMADA QUANDO O AJAX DER  UM RETORNO
            retorno.onreadystatechange = processReqChange;
            //ABRE A REQUISI��O AJAX, PASSANDO O M�TODO DE ACESSO, URL E O PAR�METRO
            retorno.open("GET", url + '?grupo=' + valor, true);
            //INICIA O TRANSPORTA DOS OBJETOS NA REQUISI��O
            retorno.send();
        }
    }
}
//FUN��O QUE TRATA O RETORNO DO AJAX
function processReqChange()
{
    //CASO O STATUS DO AJAX SEJA OK, CHAMA A FUN��O mudar()
    //A LISTA COMPLETA DOS VALORES readyState � A SEGUINTE:
    //0 (uninitialized) 
    //1 (a carregar) 
    //2 (carregado) 
    //3 (interactivo) 
    //4 (completo) 
    if (retorno.readyState == 4)
    {
        if (retorno.status == 200)
        {
            //PROCURA PELA DIV MOSTRACOMBO E INSERE O OBJETO
            document.getElementById('mostraCombo').innerHTML = retorno.responseText;
        } else
        {
            //MOSTRA UM ALERTA AO OBTER UM RETORNO DE OK.
            alert("Houve um problema ao obter os dados:\n" + retorno.statusText);
        }
    }
}
//FUN��O MUDAR, QUE CHAMA AS INFORMA��ES PASSADAS NO PAR�METRO E CARREGA O ARQUIVO EXTERNO
function mudar(valor)
{
    //CARREGA O ARQUIVO EXTERNO DO AJAX
    CarregaArquivo("list_funcionario_select.php", valor);
}