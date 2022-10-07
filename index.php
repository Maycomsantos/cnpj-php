<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buscar CNPJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="row">
        <div class="col-md-4">

        </div>
    <div class="col-md-4">
        <div class="form-group row">
            <div class="col-md-12"><br><br>
                <label for="cnpj">CNPJ:</label>
                <input type="text" class="form-control" onblur="checkCnpj(this.value)" data-mask="00.000.000/0000-00" id="cnpj" placeholder="Digite o CNPJ" class="form-control">
            </div>

            <button type="button" class="btn btn-primary col-md-4" style="margin-left:10px">Consultar CNPJ</button>

            <div class="col-md-12"><br><br>
                <label for="cnpj">Razão Social:</label>
                <input type="text" class="form-control" id="razaosocial" class="form-control">
            </div>
            
            <div class="col-md-12"><br><br>
                <label for="cnpj">Email:</label>
                <input type="text" class="form-control" id="email" class="form-control">
            </div>
        </div> 
        
        <div class="form-group row">
            <div class="col-md-6"><br><br>
                <label for="cnpj">Fantasia:</label>
                <input type="text" class="form-control" id="fantasia" class="form-control">
            </div>

            <div class="col-md-6"><br><br>
                <label for="cnpj">Data da abertura:</label>
                <input type="text" class="form-control" id="abertura" class="form-control">
            </div>

            <div class="col-md-6"><br><br>
                <label for="cnpj">Bairro:</label>
                <input type="text" class="form-control" id="bairro" class="form-control">
            </div>  
            
            <div class="col-md-6"><br><br>
                <label for="cnpj">Munícipio:</label>
                <input type="text" class="form-control" id="municipio" class="form-control">
            </div> 
            
            <div class="col-md-6"><br><br>
                <label for="cnpj">Número:</label>
                <input type="text" class="form-control" id="numero" class="form-control">
            </div> 
            
            <div class="col-md-6"><br><br>
                <label for="cnpj">Capital Social:</label>
                <input type="text" class="form-control" id="capital_social" class="form-control">
            </div> 
            
            <div class="col-md-12"><br><br>
                <label for="cnpj">Natureza Jurídica:</label>
                <input type="text" class="form-control" id="natureza_juridica" class="form-control">
            </div>
            
            <div class="col-md-6"><br><br>
                <label for="cnpj">Porte:</label>
                <input type="text" class="form-control" id="porte" class="form-control">
            </div>
            
            <div class="col-md-6"><br><br>
                <label for="cnpj">Situação:</label>
                <input type="text" class="form-control" id="situacao" class="form-control">
            </div>
            
            <div class="col-md-6"><br><br>
                <label for="cnpj">Telefone:</label>
                <input type="text" class="form-control" id="telefone" class="form-control">
            </div>
            
            <div class="col-md-6"><br><br>
                <label for="cnpj">Ultima Atualização:</label>
                <input type="text" class="form-control" id="ultima_atualizacao" class="form-control">
            </div> 

            <div class="col-md-6"><br><br>
                <label for="cnpj">Atividade Principal:</label>
                <!-- <input type="text" class="form-control" id="atividade_principal"> -->
                <h4><span class="badge bg-primary" id="atividade_principal"></span></h4>
                
            </div>
            
            <div class="col-md-6"><br><br>
                <label for="cnpj">Atividades Secundárias:</label>
                <!-- <input type="text" class="form-control" id="atividade_principal"> -->
                <h4><span class="badge bg-black" id="atividades_secundarias"></span></h4>
                
            </div>

        </div>

       
        
        

    </div>
    </div>
    
    
  </body>
</html>

<style>

body {
    background-color: #f5f5f5;
}

</style>

<script>
    function checkCnpj(cnpj) {
        $.ajax({
            'url': 'https://www.receitaws.com.br/v1/cnpj/' + cnpj.replace(/[^0-9]/g, ''), 
            'type': 'GET',
            'dataType': 'jsonp',
            'success': function(data) {
                // console.log(data)

                if(data.nome == undefined) {
                    alert(data.status + '' + data.message)
                        
                    }else {
                        document.getElementById('razaosocial').value = data.nome
                        document.getElementById('email').value = data.email
                        document.getElementById('abertura').value = data.abertura
                        document.getElementById('fantasia').value = data.fantasia
                        document.getElementById('bairro').value = data.bairro
                        document.getElementById('municipio').value = data.municipio
                        document.getElementById('numero').value = data.numero
                        document.getElementById('capital_social').value = data.capital_social
                        document.getElementById('natureza_juridica').value = data.natureza_juridica
                        document.getElementById('porte').value = data.porte
                        document.getElementById('situacao').value = data.situacao
                        document.getElementById('telefone').value = data.telefone
                        document.getElementById('ultima_atualizacao').value = data.ultima_atualizacao
                        document.getElementById('atividade_principal').innerHTML = data.atividade_principal[0].text
                        document.getElementById('atividades_secundarias').innerHTML = data.atividades_secundarias[0].text
                }
            }
        })
    }

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
