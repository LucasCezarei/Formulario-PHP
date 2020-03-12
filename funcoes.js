$(function(){

	// grupos
	function grupos(){
		$.ajax({
			type: 'GET',
			url: 'funcoes.php',
			data: {
				acao: 'grupos'
			},
			dataType: 'json',
			success: function(data){
				console.log(data);
				
				for(i = 0; i < data.qtd; i++){
					$('select[name=grupos]').append('<option value="'+data.id[i]+'">'+data.grupos[i]+'</option>');
				}
			}
		});
	}
	grupos();

	// clientes
	function clientes(grupos){
		$.ajax({
			type: 'GET',
			url: 'funcoes.php',
			data: {
				acao: 'clientes',
				id: grupos
			},
			dataType: 'json',
			beforeSend: function(){
				$('select[name=clientes]').html('<option>Carregando...</option>');
			},
			success: function(data){
				$('select[name=clientes]').html('');
				$('select[name=clientes]').append('<option>Selecione o clientes</option>');
				for(i = 0; i < data.qtd; i++){
					$('select[name=clientes]').append('<option value="'+data.id[i]+'">'+data.clientes[i]+'</option>');
				}
			}
		});
	}


	// cnpj
	function cnpj(clientes){
		$.ajax({
			type: 'GET',
			url: 'funcoes.php',
			data: {
				acao: 'cnpj',
				id: clientes
			},
			dataType: 'json',
			beforeSend: function(){
				$('select[name=cnpj]').html('<option>Carregando...</option>');
			},
			success: function(data){
				$('select[name=cnpj]').html('');
				$('select[name=cnpj]').append('<option>Selecione a cnpj</option>');
				for(i = 0; i < data.qtd; i++){
					$('select[name=cnpj]').append('<option value="'+data.id[i]+'">'+data.cnpj[i]+'</option>');
				}
			}
		});
	}

	// cnpj
	function os(cnpj){
		$.ajax({
			type: 'GET',
			url: 'funcoes.php',
			data: {
				acao: 'os',
				id: cnpj
			},
			dataType: 'json',
			beforeSend: function(){
				$('select[name=os]').html('<option>Carregando...</option>');
			},
			success: function(data){
				$('select[name=os]').html('');
				$('select[name=os]').append('<option>Selecione a os</option>');
				for(i = 0; i < data.qtd; i++){
					$('select[name=os]').append('<option value="'+data.id[i]+'">'+data.os[i]+'</option>');
				}
			}
		});
	}


	$('select[name=grupos]').change(function(){
		$('select[name=cnpj]').val($("select[name=cnpj] option:first-child").val());
		var id = $(this).val();
		clientes(id);
	});

	$('select[name=clientes]').change(function(){
		var idclientes = $(this).val();
		cnpj(idclientes);
	});

	$('select[name=cnpj]').change(function(){
		var idcnpj = $(this).val();
		os(idcnpj);
	});
});