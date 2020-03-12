
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="min.css"/>
        <link rel="stylesheet" href="select.css"/>


        <link href="xpto010.css" rel="stylesheet"/>
	</head>
	</body>

		<form>
            <div class="form-row" >

                <div class="form-group col-md-12">
                    <label>GRUPO: </label>
                        <select class="form-control" name="grupos">
		                    <option></option>
	                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label>CLIENTE: </label>
                        <select class="form-control" name="clientes">
		                    <option></option>
	                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label>CNPJ: </label>
                        <select class="form-control" name="cnpj">
		                    <option></option>
	                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label>OS: </label>
                        <select class="form-control" name="os">
		                    <option></option>
	                    </select>
                </div>
            </div>

                <hr>

				<div class="form-row">

				<div class="form-group col-md-6">
                    <label for="Produtos">Produtos</label>
                    <input type="text" class="form-control" id="Produtos" name=Produtos>
                </div>

                <div class="form-group col-md-6">
                    <label for="AE">AE</label>
                    <input type="text" class="form-control" id="AE" name=AE>
                </div>

                <div class="form-group col-md-6">
                    <label for="Gestor_Rel">Gest Relacionamento</label>
                    <input type="text" class="form-control" id="Gestor_Rel" name="Gestor_Rel">
                </div>

            </div>


            <div class="form-row">


                <div class="form-group col-md-6">
                    <label for="Delivery_Man">Deliv Men</label>
                    <input type="text" class="form-control" id="Delivery_Man" name="Delivery_Man">
                </div>


                <div class="form-group col-md-6">
                    <label for="GR">GR</label>
                    <input type="text" class="form-control" id="GR" name="GR">
                </div>

            </div>

            <div class="form-row">


                <div class="form-group col-md-6">
                    <label for="Contato_Cli">Contato Cliente</label>
                    <input type="text" class="form-control" id="Contato_Cli" name="Contato_Cli">
                </div>


                <div class="form-group col-md-6">
                    <label for="Dta_Insercao">Data</label>
                    <input type="date" class="form-control" id="Dta_Insercao" name="Dta_Insercao">
                </div>

            </div>

            <div class="form-row"></div>
                <div class="form-group col-md-13">
                    <label for="Obs">Observações</label>
                    <textarea class="form-control" id="Obs" rows="3" name="Obs"></textarea>
                </div>
            </div>
			
			<center><input type="submit" value="Cadastrar"></center>
		</div>
	</form>

    <script src="jquery.js"></script>
	<script src="funcoes.js"></script>
	
		
	</body>
</html>