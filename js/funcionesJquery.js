function inicio(){
	
	//--------------------------------------Ciudades---------------------------

	$("#opciones #ciudades").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Ciudades");
                	$("#contenido" ).html(data);
        });
     });

	$("#contenido").on("click","button.btncerrar",function(){
		$("#contenedor").removeClass("show");
       	$("#contenedor").addClass("hide");
	});

	$("#contenido").on("click","button.btncerrar2",function(){
		$("#titulo").html("Listado de Ciudades");
		$( "#contenido" ).load("./php/ciudades/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_ciu",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_ciu'},
            	url: "./php/ciudades/controladorCiudad.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado Ciudades");
        		$( "#contenido" ).load("./php/ciudades/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_ciu",function(){
		$("#titulo").html("Editar Ciudad");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/ciudades/editarciudad.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_ciu",function(){
		$("#titulo").html("Listado Ciudades");
        var datos=$("#fciudad").serialize();
            $.ajax({
			type:"post",
			url:"./php/ciudades/controladorCiudad.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/ciudades/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_ciu",function(){
		$("#titulo").html("Nueva Ciudad");
		$( "#contenido" ).load("./php/ciudades/nuevaCiudad.php");	
	})

	$("#contenido").on("click","button#grabar_ciu",function(){
		var datos=$("#fciudad").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/ciudades/controladorCiudad.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Ciudades");
				$("#contenido" ).load("./php/ciudades/index.php");
			}
		})
		});
	//----------------------------------------Ciudad--------------------------------------

	//_--------------------------------------------Pais-----------------------------------

	$("#opciones #pais").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Paises");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar3",function(){
		$("#titulo").html("Listado de Paises");
		$( "#contenido" ).load("./php/pais/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_pais",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_pais'},
            	url: "./php/pais/controladorPais.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado Paises");
        		$( "#contenido" ).load("./php/pais/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_pais",function(){
		$("#titulo").html("Editar Pais");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/pais/editarPais.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_pais",function(){
		$("#titulo").html("Listado Paises");
        var datos=$("#fpais").serialize();
            $.ajax({
			type:"post",
			url:"./php/pais/controladorPais.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/pais/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_pais",function(){
		$("#titulo").html("Nuevo Pais");
		$( "#contenido" ).load("./php/pais/nuevoPais.php");	
	})

	$("#contenido").on("click","button#grabar_pais",function(){
		var datos=$("#fpais").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/pais/controladorPais.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Paises");
				$("#contenido" ).load("./php/pais/index.php");
			}
		})
		});


	//--------------------------------Paises----------------------------------
	//---------------------------------Role-----------------------------------

	$("#opciones #roles").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Roles");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar4",function(){
		$("#titulo").html("Listado de Roles");
		$( "#contenido" ).load("./php/roles/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_rol",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_rol'},
            	url: "./php/pais/controladorRol.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado Roles");
        		$( "#contenido" ).load("./php/roles/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_rol",function(){
		$("#titulo").html("Editar Rol");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/roles/editarRol.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_rol",function(){
		$("#titulo").html("Listado Roles");
        var datos=$("#frol").serialize();
            $.ajax({
			type:"post",
			url:"./php/roles/controladorRol.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/roles/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_rol",function(){
		$("#titulo").html("Nuevo Rol");
		$( "#contenido" ).load("./php/roles/nuevoRol.php");	
	})

	$("#contenido").on("click","button#grabar_rol",function(){
		var datos=$("#frol").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/roles/controladorRol.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Roles");
				$("#contenido" ).load("./php/roles/index.php");
			}
		})
		});


//_--------------------------------------Roles-----------------------------------------
//-------------------------------------Unidades-------------------------------------

	
	$("#opciones #unidades").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Unidades");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar5",function(){
		$("#titulo").html("Listado de Unidades");
		$( "#contenido" ).load("./php/unidades/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_uni",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_uni'},
            	url: "./php/unidades/controladorUnidad.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado Unidades");
        		$( "#contenido" ).load("./php/unidades/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_uni",function(){
		$("#titulo").html("Editar Unidad");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/unidades/editarUnidad.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_uni",function(){
		$("#titulo").html("Listado Unidades");
        var datos=$("#funi").serialize();
            $.ajax({
			type:"post",
			url:"./php/unidades/controladorUnidad.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/unidades/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_uni",function(){
		$("#titulo").html("Nueva Unidad");
		$( "#contenido" ).load("./php/unidades/nuevaUnidad.php");	
	})

	$("#contenido").on("click","button#grabar_uni",function(){
		var datos=$("#funi").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/unidades/controladorUnidad.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Unidades");
				$("#contenido" ).load("./php/unidades/index.php");
			}
		})
		});

//------------------------------------Unidades--------------------------------
//-----------------------------------Administrador-----------------------------

$("#opciones #administrador").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Administrador");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar6",function(){
		$("#titulo").html("Listado de Administradores");
		$( "#contenido" ).load("./php/administrador/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_admin",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_admin'},
            	url: "./php/administrador/controladorAdministrador.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado Administradores");
        		$( "#contenido" ).load("./php/administrador/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_admin",function(){
		$("#titulo").html("Editar Administrador");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/administrador/editarAdministrador.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_admin",function(){
		$("#titulo").html("Listado Administrador");
        var datos=$("#fadmi").serialize();
            $.ajax({
			type:"post",
			url:"./php/administrador/controladorAdministrador.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/administrador/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_admin",function(){
		$("#titulo").html("Nueva Administrador");
		$( "#contenido" ).load("./php/administrador/nuevoAdministrador.php");	
	})

	$("#contenido").on("click","button#grabar_admin",function(){
		var datos=$("#fadmi").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/administrador/controladorAdministrador.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Administradores");
				$("#contenido" ).load("./php/administrador/index.php");
			}
		})
		});

	//-------------------------Administrador-----------------------------------
	//-----------------------------PRocesos------------------------------------

	$("#opciones #procesos").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Procesos");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar7",function(){
		$("#titulo").html("Listado de Procesos");
		$( "#contenido" ).load("./php/procesos/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_proce",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_proce'},
            	url: "./php/procesos/controladorProcesos.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de Procesos");
        		$( "#contenido" ).load("./php/procesos/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_proce",function(){
		$("#titulo").html("Editar Procesos");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/procesos/editarProceso.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_proce",function(){
		$("#titulo").html("Listado de Procesos");
        var datos=$("#fproce").serialize();
            $.ajax({
			type:"post",
			url:"./php/procesos/controladorProcesos.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/procesos/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_proce",function(){
		$("#titulo").html("Nuevo Proceso");
		$( "#contenido" ).load("./php/procesos/nuevoProceso.php");	
	})

	$("#contenido").on("click","button#grabar_proce",function(){
		var datos=$("#fproce").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/procesos/controladorProcesos.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Procesos");
				$("#contenido" ).load("./php/procesos/index.php");
			}
		})
		});

	//----------------------------procesos--------------------------------
	//----------------------------Propietarios----------------------------
	$("#opciones #propietarios").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Propietarios");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar8",function(){
		$("#titulo").html("Listado de Propietarios");
		$( "#contenido" ).load("./php/propietarios/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_propi",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_propi'},
            	url: "./php/propietarios/controladorPropietario.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de Propietarios");
        		$( "#contenido" ).load("./php/propietarios/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_propi",function(){
		$("#titulo").html("Editar Propietarios");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/propietarios/editarPropietario.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_propi",function(){
		$("#titulo").html("Listado de Propietarios");
        var datos=$("#fpropi").serialize();
            $.ajax({
			type:"post",
			url:"./php/propietarios/controladorPropietario.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/propietarios/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_propi",function(){
		$("#titulo").html("Nuevo propietarios");
		$( "#contenido" ).load("./php/propietarios/nuevoPropietario.php");	
	})

	$("#contenido").on("click","button#grabar_propi",function(){
		var datos=$("#fpropi").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/propietarios/controladorPropietario.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado propietarios");
				$("#contenido" ).load("./php/propietarios/index.php");
			}
		})
		});
	//-------------------------------Propietarios----------------------------------
	//------------------------------ZonasPublicas--------------------------------

	$("#opciones #zonas").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Zonas");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar9",function(){
		$("#titulo").html("Listado de Zonas");
		$( "#contenido" ).load("./php/zonas/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_zonas",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_zona'},
            	url: "./php/zonas/controladorZonas.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de Zonas");
        		$( "#contenido" ).load("./php/zonas/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_zonas",function(){
		$("#titulo").html("Editar Zonas");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/zonas/editarZonas.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_zonas",function(){
		$("#titulo").html("Listado de Zonas");
        var datos=$("#fzona").serialize();
            $.ajax({
			type:"post",
			url:"./php/zonas/controladorZonas.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/zonas/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_zona",function(){
		$("#titulo").html("Nuevo Zonas");
		$( "#contenido" ).load("./php/zonas/nuevoZonas.php");	
	})

	$("#contenido").on("click","button#grabar_zona",function(){
		var datos=$("#fzona").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/zonas/controladorZonas.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Zonas");
				$("#contenido" ).load("./php/zonas/index.php");
			}
		})
		});
	//-----------------------------------Zonas Publicas------------------------------
	//-----------------------------------Apartamentos--------------------------------

	$("#opciones #apartamentos").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Apartamentos");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar10",function(){
		$("#titulo").html("Listado de Apartamentos");
		$( "#contenido" ).load("./php/apartamentos/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_apar",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_apar'},
            	url: "./php/apartamentos/controladorApartamentos.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de Apartamentos");
        		$( "#contenido" ).load("./php/apartamentos/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_apar",function(){
		$("#titulo").html("Editar Apartamentos");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/apartamentos/editarApartamentos.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_apar",function(){
		$("#titulo").html("Listado de Apartamentos");
        var datos=$("#fapar").serialize();
            $.ajax({
			type:"post",
			url:"./php/apartamentos/controladorApartamentos.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/apartamentos/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_apar",function(){
		$("#titulo").html("Nuevo Apartamentos");
		$( "#contenido" ).load("./php/apartamentos/nuevoApartamento.php");	
	})

	$("#contenido").on("click","button#grabar_apar",function(){
		var datos=$("#fapar").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/apartamentos/controladorApartamentos.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Apartamentos");
				$("#contenido" ).load("./php/apartamentos/index.php");
			}
		})
		});
	//----------------------------------------Apartamentos-------------------
	//---------------------------------Inquilinos----------------------------
	$("#opciones #inquilinos").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Inquilinos");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar11",function(){
		$("#titulo").html("Listado de Inquilinos");
		$( "#contenido" ).load("./php/inquilinos/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_inqui",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_inqui'},
            	url: "./php/inquilinos/controladorInquilinos.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de Inquilinos");
        		$( "#contenido" ).load("./php/inquilinos/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_inqui",function(){
		$("#titulo").html("Editar Inquilinos");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/inquilinos/editarInquilinos.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_inqui",function(){
		$("#titulo").html("Listado de Inquilinos");
        var datos=$("#finqui").serialize();
            $.ajax({
			type:"post",
			url:"./php/inquilinos/controladorInquilinos.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/inquilinos/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_inqui",function(){
		$("#titulo").html("Nuevo Inquilino");
		$( "#contenido" ).load("./php/inquilinos/nuevoInquilino.php");	
	})

	$("#contenido").on("click","button#grabar_inqui",function(){
		var datos=$("#finqui").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/inquilinos/controladorInquilinos.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado inquilinos");
				$("#contenido" ).load("./php/inquilinos/index.php");
			}
		})
		});
	//---------------------------------Inquilinos------------------------------------------
	//-------------------------------------Alquiler-----------------------------------------


	$("#opciones #alquiler").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Alquiler");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar12",function(){
		$("#titulo").html("Listado de Alquiler");
		$( "#contenido" ).load("./php/alquiler/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_alqui",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_alqui'},
            	url: "./php/alquiler/controladorAlquiler.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de Alquiler");
        		$( "#contenido" ).load("./php/alquiler/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_alqui",function(){
		$("#titulo").html("Editar Alquiler");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/alquiler/editarAlquiler.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_alqui",function(){
		$("#titulo").html("Listado de Alquiler");
        var datos=$("#falqui").serialize();
            $.ajax({
			type:"post",
			url:"./php/alquiler/controladorAlquiler.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/alquiler/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_alqui",function(){
		$("#titulo").html("Nuevo Alquiler");
		$( "#contenido" ).load("./php/alquiler/nuevoAlquiler.php");	
	})

	$("#contenido").on("click","button#grabar_alqui",function(){
		var datos=$("#falqui").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/alquiler/controladorAlquiler.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado alquiler");
				$("#contenido" ).load("./php/alquiler/index.php");
			}
		})
		});

	//---------------------------------------Alquiler-------------------------

	//-------------------------------------Vehiculo---------------------------

	$("#opciones #vehiculo").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Vehiculos");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar13",function(){
		$("#titulo").html("Listado de Vehiculo");
		$( "#contenido" ).load("./php/vehiculo/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_vehi",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_vehi'},
            	url: "./php/vehiculo/controladorVehiculo.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de Vehiculos");
        		$( "#contenido" ).load("./php/vehiculo/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_vehi",function(){
		$("#titulo").html("Editar Vehiculo");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/vehiculo/editarVehiculo.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_vehi",function(){
		$("#titulo").html("Listado de Vehiculos");
        var datos=$("#fvehi").serialize();
            $.ajax({
			type:"post",
			url:"./php/vehiculo/controladorVehiculo.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/vehiculo/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_vehi",function(){
		$("#titulo").html("Nuevo Vehiculo");
		$( "#contenido" ).load("./php/vehiculo/nuevoVehiculo.php");	
	})

	$("#contenido").on("click","button#grabar_vehi",function(){
		var datos=$("#fvehi").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/Vehiculo/controladorVehiculo.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Vehiculo");
				$("#contenido" ).load("./php/Vehiculo/index.php");
			}
		})
		});

	//------------------------ Vehiculo ----------------------------------

	//---------------------------- Registro ------------------------------

	$("#opciones #registro").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Registros");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar14",function(){
		$("#titulo").html("Listado de Registros");
		$( "#contenido" ).load("./php/registro/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_regis",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_regis'},
            	url: "./php/registro/controladorRegistro.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de Registros");
        		$( "#contenido" ).load("./php/registro/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_regis",function(){
		$("#titulo").html("Editar Registro");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/registro/editarRegistro.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_regis",function(){
		$("#titulo").html("Listado de Registros");
        var datos=$("#fregis").serialize();
            $.ajax({
			type:"post",
			url:"./php/registro/controladorRegistro.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/registro/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_regis",function(){
		$("#titulo").html("Nuevo Registro");
		$( "#contenido" ).load("./php/registro/nuevoRegistro.php");	
	})

	$("#contenido").on("click","button#grabar_regis",function(){
		var datos=$("#fregis").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/registro/controladorRegistro.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado registro");
				$("#contenido" ).load("./php/registro/index.php");
			}
		})
		});

	//----------------------------- Registro ------------------------------

	//--------------------------------- Notificacion ----------------------------------
	$("#opciones #notificacion").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Notificaciones");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar15",function(){
		$("#titulo").html("Listado de Notificaciones");
		$( "#contenido" ).load("./php/notificaciones/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_noti",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_noti'},
            	url: "./php/notificaciones/controladorNotificacion.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de Notificaciones");
        		$( "#contenido" ).load("./php/notificaciones/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_noti",function(){
		$("#titulo").html("Editar Notificaciones");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/notificaciones/editarNotificacion.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_noti",function(){
		$("#titulo").html("Listado de Notificaciones");
        var datos=$("#fnoti").serialize();
            $.ajax({
			type:"post",
			url:"./php/notificaciones/controladorNotificacion.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/notificaciones/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_noti",function(){
		$("#titulo").html("Nuevo Notificaciones");
		$( "#contenido" ).load("./php/notificaciones/nuevoNotificacion.php");	
	})

	$("#contenido").on("click","button#grabar_noti",function(){
		var datos=$("#fnoti").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/notificaciones/controladorNotificacion.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Notificaciones");
				$("#contenido" ).load("./php/notificaciones/index.php");
			}
		})
		});

	//----------------------------------Notificacion ----------------------------------


	//---------------------------- Notificacion Grupales ----------------------------------
	$("#opciones #notificaciong").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Notificaciones");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar16",function(){
		$("#titulo").html("Listado de Notificaciones");
		$( "#contenido" ).load("./php/notificacionesg/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_notig",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_notig'},
            	url: "./php/notificacionesg/controladorNotificacion.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de Notificaciones");
        		$( "#contenido" ).load("./php/notificacionesg/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_notig",function(){
		$("#titulo").html("Editar Notificaciones");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/notificacionesg/editarNotificacion.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_notig",function(){
		$("#titulo").html("Listado de Notificaciones");
        var datos=$("#fnotig").serialize();
            $.ajax({
			type:"post",
			url:"./php/notificacionesg/controladorNotificacion.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/notificacionesg/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_notig",function(){
		$("#titulo").html("Nuevo Notificaciones");
		$( "#contenido" ).load("./php/notificacionesg/nuevoNotificacion.php");	
	})

	$("#contenido").on("click","button#grabar_notig",function(){
		var datos=$("#fnotig").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/Notificacionesg/controladorNotificacion.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Notificaciones");
				$("#contenido" ).load("./php/Notificacionesg/index.php");
			}
		})
		});

	//------------------------------Notificaciones Grupales -------------------------------

	//---------------------------- Notificacion Unidad ----------------------------------
	$("#opciones #notificacionu").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Notificaciones");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar17",function(){
		$("#titulo").html("Listado de Notificaciones");
		$( "#contenido" ).load("./php/notificacionesu/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_notiu",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_notiu'},
            	url: "./php/notificacionesu/controladorNotificacion.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de Notificaciones");
        		$( "#contenido" ).load("./php/notificacionesu/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_notiu",function(){
		$("#titulo").html("Editar Notificaciones");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/notificacionesu/editarNotificacion.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_notiu",function(){
		$("#titulo").html("Listado de Notificaciones");
        var datos=$("#fnotiu").serialize();
            $.ajax({
			type:"post",
			url:"./php/notificacionesu/controladorNotificacion.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/notificacionesu/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_notiu",function(){
		$("#titulo").html("Nuevo Notificaciones");
		$( "#contenido" ).load("./php/notificacionesu/nuevoNotificacion.php");	
	})

	$("#contenido").on("click","button#grabar_notiu",function(){
		var datos=$("#fnotiu").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/notificacionesu/controladorNotificacion.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Notificaciones");
				$("#contenido" ).load("./php/notificacionesu/index.php");
			}
		})
		});

	//------------------------------Notificaciones Unidad -------------------------------

	//----------------------------Presupuestos -----------------------------------------

	$("#opciones #presupuesto").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Presupuestos");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar18",function(){
		$("#titulo").html("Listado de Presupuestos");
		$( "#contenido" ).load("./php/presupuestos/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_presu",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_presu'},
            	url: "./php/presupuestos/controladorPresupuesto.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de presupuestos");
        		$( "#contenido" ).load("./php/presupuestos/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_presu",function(){
		$("#titulo").html("Editar presupuestos");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/presupuestos/editarPresupuesto.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_presu",function(){
		$("#titulo").html("Listado de presupuestos");
        var datos=$("#fpresu").serialize();
            $.ajax({
			type:"post",
			url:"./php/presupuestos/controladorPresupuesto.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/presupuestos/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_presu",function(){
		$("#titulo").html("Nuevo presupuestos");
		$( "#contenido" ).load("./php/presupuestos/nuevoPresupuesto.php");	
	})

	$("#contenido").on("click","button#grabar_presu",function(){
		var datos=$("#fpresu").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/presupuestos/controladorPresupuesto.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Presupuestos");
				$("#contenido" ).load("./php/presupuestos/index.php");
			}
		})
		});

	//------------------------------------Presupuestos------------------------------------

	//----------------------------- Cobros -----------------------------------------
	$("#opciones #cobro").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Cobros");
                	$("#contenido" ).html(data);
        });
     });


	$("#contenido").on("click","button.btncerrar19",function(){
		$("#titulo").html("Listado de Cobros");
		$( "#contenido" ).load("./php/cobros/index.php");	
	});
	

	$("#contenido").on("click","a.borrar_cobro",function(){
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	data: {codigo: codigo, accion:'borrar_cobro'},
            	url: "./php/cobros/ControladorCobro.php",
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado de cobros");
        		$( "#contenido" ).load("./php/cobros/index.php");
        	});

		}
	});

	$("#contenido").on("click","a.editar_cobro",function(){
		$("#titulo").html("Editar Cobros");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/cobros/editarCobro.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

	$("#contenido").on("click","button#actualizar_cobro",function(){
		$("#titulo").html("Listado de Cobros");
        var datos=$("#fcobro").serialize();
            $.ajax({
			type:"post",
			url:"./php/cobros/ControladorCobro.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/cobros/index.php");
        	});
	});

	$("#contenido").on("click","button#nuevo_cobro",function(){
		$("#titulo").html("Nuevo cobros");
		$( "#contenido" ).load("./php/cobros/nuevoCobro.php");	
	})

	$("#contenido").on("click","button#grabar_cobro",function(){
		var datos=$("#fcobro").serialize();
	
		$.ajax({
			type:"post",
			url:"./php/cobros/ControladorCobro.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Cobros");
				$("#contenido" ).load("./php/cobros/index.php");
			}
		})
		});




	//----------------------------Cobros-----------------------------------------------------


	//------------Logeo-----------------------------------
	$('#login').click(function(){
      var usu_nomb = $('#usu_nomb').val();
      var pass = $('#pass').val();
      if($.trim(usu_nomb).length > 0 && $.trim(pass).length > 0){
        $.ajax({
          url:"loguear.php",
          method:"POST",
          data:{usu_nomb:usu_nomb, pass:pass},
          cache:"false",
          beforeSend:function() {
            $('#login').val("Conectando...");
          },
          success:function(data) {
            $('#login').val("Login");
            if (data=="1") {
              $(location).attr('href','index.php');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> las credenciales son incorrectas.</div>");
            }
          }
        });
      };
    });
    //--------------------------------------------------------------------
    //---------------------vistas----------------------------

    $("#opciones #cobrovista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Cobros");
                	$("#contenido" ).html(data);
        });
     });

    $("#opciones #presupuestovista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Presupuestos");
                	$("#contenido" ).html(data);
        });
     });

    $("#opciones #notificacionuvista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Notificaciones");
                	$("#contenido" ).html(data);
        });
     });

    $("#opciones #notificaciongvista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Notificaciones");
                	$("#contenido" ).html(data);
        });
     });


    $("#opciones #notificacionvista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Notificaciones");
                	$("#contenido" ).html(data);
        });
     });

    $("#opciones #zonavista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Zonas");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #vehiculovista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Vehiculos");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #unidadesvista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Unidades");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #rolesvista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Roles");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #registrovista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Registro");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #propietariovista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Propietarios");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #procesovista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Procesos");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #paisvista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Paises");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #inquilinovista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Inquilinos");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #ciudadesvista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Ciudades");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #apartamentosvista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Apartamentos");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #alquilervista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Alquiler");
                	$("#contenido" ).html(data);
        });
     });
    $("#opciones #administradorvista").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Administrador");
                	$("#contenido" ).html(data);
        });
     });
    //----------------------VISTAS-------------------------------
}
