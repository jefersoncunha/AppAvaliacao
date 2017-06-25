jQuery.noConflict();
	jQuery(document).ready(function ($) {

			var showProductContent = $('#showProductsID');
			var showProductContentBoxFab = $('#boxFab');
			var showProductContentBoxTam = $('#boxTam');
			showProductContent.css({'visibility': 'hidden', 'opacity': 0 });
			showProductContentBoxFab.css({'visibility': 'hidden', 'opacity': 0 });
			showProductContentBoxTam.css({'visibility': 'hidden', 'opacity': 0 });

			var AjaxIniciarCategorias = new Ajax.Updater(
					'buscar_categorias',
					'php/buscar_categorias_pneus.php',
					{ method: 'get '}
			);
	});

	function CarregarFabricantePneus(IDCategoria){
		document.getElementById("boxFab").style.visibility = "visible";
		document.getElementById("boxFab").style.opacity = "1";
		if(IDCategoria){
			var myAjax = new Ajax.Updater(
				'buscar_fabricantes',
				'php/buscar_fabricantes_pneus.php?IDCategoria='+IDCategoria,
				{ method : 'get',}
			);
			getNomeCategoria = jQuery('option:selected', jQuery("#categoria")).text();
			ga('send', 'event', 'Produtos_Pneus_Categoria', 'action', getNomeCategoria);
			console.log(getNomeCategoria);
		}
	}

	function CarregarTamanhoPneus(IDFabricante,cat){
		document.getElementById("boxTam").style.visibility = "visible";
		document.getElementById("boxTam").style.opacity = "1";
		if(IDFabricante){
			var myAjax = new Ajax.Updater(
				'buscar_tamanhos',
				'php/buscar_tamanhos_pneus.php?IDFabricante='+IDFabricante+'&IDCategoria='+cat,
				{ method : 'get',}
			);
			getNomeFabricante = jQuery('option:selected', jQuery("#fabricante")).text();
			ga('send', 'event', 'Produtos_Pneus_Fabricante', 'action', getNomeFabricante);
			console.log(getNomeFabricante);
		}
	}

	function CarregarPneus(IDGrupo,getFabricante){
		document.getElementById("showProductsID").style.visibility = "visible";
		document.getElementById("showProductsID").style.opacity = "1";
		if(IDGrupo){
			jQuery.get( 'php/carregar_pneus.php?IDGrupo='+IDGrupo+'&IDFabricante='+getFabricante,
			function( data ) {
				 jQuery( "#listar_produtos" ).html( data );
				 jQuery("div.holder").jPages({
							containerID : "listar_produtos",
								perPage : 6,
								previous    : "anterior",
								next        : "proximo"
						});
			});
		}
		getTamanhos = jQuery('option:selected', jQuery("#idTamanhos")).text();
		categoria   = jQuery('option:selected', jQuery("#categoria")).text();
		fabricante  = jQuery('option:selected', jQuery("#fabricante")).text();

		setTimeout(function(){
			ga('send', 'event', 'Produtos_Pneus_Tamanho', 'action', getTamanhos);
			console.log(getTamanhos);
		},200);

		setTimeout(function(){
			produtosNome = ( categoria + '-' + fabricante + '-' + getTamanhos );
			ga('send', 'event', 'Produtos_Pneus_Completo', 'action', produtosNome);
			console.log(produtosNome);
		},600);
	}