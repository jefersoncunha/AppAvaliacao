$(function () {

    //abrir modal
    $(document).ready(function () {

        $('.modal').modal();
        //now you can open modal from code
        $('#modal').modal('open');
    });

    
/*
    function CarregarFabricantePneus(IDCategoria) {
        document.getElementById("boxFab").style.visibility = "visible";
        if (IDCategoria) {
            var myAjax = new Ajax.Updater(
                    'buscar_fabricantes',
                    'php/buscar_fabricantes_pneus.php?IDCategoria=' + IDCategoria,
                    {method: 'get', }
            );
            getNomeCategoria = jQuery('option:selected', jQuery("#categoria")).text();
            ga('send', 'event', 'Produtos_Pneus_Categoria', 'action', getNomeCategoria);
            console.log(getNomeCategoria);
        }
    }

*/

});

