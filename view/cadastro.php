<!DOCTYPE HTML>
<html>

<?php include("head.php") ?>

<script language="javascript" type="text/javascript">
    function formatarMoeda(){
        var elemento = document.getElementById('preco');
        var valor = preco.value;

        valor = valor + '';
        valor = parseInt(valor.replace(/[\D]+/g, ''));
        valor = valor + '';
        valor = valor.replace(/([0-9]{2})$/g, ",$1");

        if (valor.length > 6){
            valor=valor.replace(/([0-9]{3}),([0-9]{2}$)/g,".$1,$2");
        }

        elemento.value = valor;
    }
    
    function validar(formulario){
        var quantidade = form.quantidade.value;
        var preco = form.preco.value;
        for (i = 0; i <= formulario.length - 2; i++){
            if ((formulario[i].value == "")){
                alert("Preencha o campo " + formulario[i].name);
                formulario[i].focus();
                return false;
            }
        }
        if (quantidade <= 0){
            alert('A quantidade de páginas não pode ser iguao ou inferior a 0');
            form.quantidade.focus();
            return false;
        }
        if(preco <= 0){
            alert('O preço do livro não pode ser igual ou inferior a 0');
            form.preco.focus();
            return false;
        }
        formulario.submit();
    }
</script>

<body>
    <?php include("menu.php") ?>

    <div classe="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form);
        return false;" class="col-10">
            <div class="form-group">
                <div class="form-group">
                    <div class="mx-auto" style="width: 500px;">
                        <label for="nome">Nome do Livro</label>
                        <input class="form-controll" type="tezt" id="nome" name="nome" placeholder="Nome do Livro" 
                        required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mx-auto" style="width: 500px;">
                        <label for="autor">Nome do Autor</label>
                        <input class="form-controll" type="tezt" id="autor" name="autor" placeholder="Nome do Autor" 
                        required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mx-auto" style="width: 500px;">
                        <label for="quantidade"> Quantidade de páginas </label>
                        <input class="form-control" type="number" id="quantidade" name="quantidade" 
                        placeholder="Quantidade de páginas" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mx-auto" style="width: 500px;">
                        <label for="number">Valor unitário do livro</label>
                        <input class="form-control" type="text" id="preco" name="preco" placeholder="Preço do Livro"
                        onekeypress="formatarMoeda();" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mx-auto" style="width: 500px;">
                        <label for="date">Data de lançamento do livro</label>
                        <input class="form-control" type="date" id="data" name="data" placeholder="Data de publicação"
                    required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10" style="text-align: right;">
                        <button type="submit" class="btn btn-sucess" id="cadastrar">Cadastrar</button>
                    </div>
                </div>
        </form>
    </div>
            
</body>

</html>