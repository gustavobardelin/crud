<?php


    require ("../pages/header.php");


?>


    <main class="container">

        <section class="cadastro-cliente py-5">

            <h3>Cadastro de Clientes</h3>
            <p>Adicione informações de um cliente para cadastrar no banco.</p>
        
            <form method="post" class="form my-5">

                <div class="personal-informations my-5 d-flex flex-column">

                    <h4 class="mb-3">Dados Pessoais</h4>

                    <div class="form-group mb-3 d-flex justify-content-between">

                        <div class="input input-name me-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite aqui seu nome..." required>
                        </div>

                        <div class="input input-email">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="gustavo@exemplo.com" required>  
                        </div>

                    </div>
                    
                    <div class="form-group mb-3 d-flex">

                        <div class="input input-cpf me-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite aqui seu cpf..." data-js="cpf" required>
                        </div>

                        <div class="input input-dtNasc me-3">
                            <label for="dtNasc" class="form-label">Data de Nascimento</label>
                            <input type="date" name="dtNasc" id="dtNasc" class="form-control" required>
                        </div>

                        <div class="input input-numCel">
                            <label for="numCel" class="form-label">Número de Celular</label>
                            <input type="text" name="numCel" id="numCel" class="form-control" placeholder="(99) 9 9999-9999" data-js="numCel">
                        </div>

                    </div>

                </div>

                <div class="personal-address my-5 d-flex flex-column">

                    <h4 class="mb-3">Endereço</h4>

                    <div class="form-group mb-3 d-flex">

                        <div class="input input-rua me-3">
                            <label for="rua" class="form-label">Rua</label>
                            <input type="text" name="rua" id="rua" class="form-control" placeholder="Ex: Rua um dois três">
                        </div>

                        <div class="input input-numero me-3">
                            <label for="numCasa" class="form-label">Número da Casa</label>
                            <input type="text" name="numCasa" id="numCasa" class="form-control" placeholder="Ex: 99">
                        </div>

                        <div class="input input-bairro">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Ex: Jardim Botânico">
                        </div>

                    </div>

                    <div class="form-group mb-3 d-flex">
                        
                        <div class="input input-cidade me-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Ex: São Paulo">
                        </div>

                        <div class="input input-cep me-3">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" name="cep" id="cep" class="form-control" placeholder="Ex: 12345-123" data-js="cep">
                        </div>

                        <div class="input input-estado">
                            <label for="estado" class="form-label">Estado</label>
                            <select name="estado" id="estado" class="form-select" required>
                                <option selected value="na">Selecione um Estado</option>
                                <option value="AC">AC</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="form-group">
                    <button class="btn btn-success me-3" type="submit">Enviar</button>
                    <button class="btn btn-danger" type="reset">Limpar</button>
                </div>

            </form>

        </section>

    </main>



<?php

    require ("./footer.php");

    require_once ("../classes/Cliente.php");
    require_once ("../classes/ClienteDao.php");


    $cliente = new Cliente();
    $clienteDao = new ClienteDao();
    
    
    if($_POST){

        $nome = addslashes($_POST['nome']);
        $cpf = addslashes($_POST['cpf']);
        $email = addslashes($_POST['email']);
        $dtNasc = addslashes($_POST['dtNasc']);
        $numCel = addslashes($_POST['numCel']);
        $rua = addslashes($_POST['rua']);
        $numCasa = addslashes($_POST['numCasa']);
        $bairro = addslashes($_POST['bairro']);
        $cidade = addslashes($_POST['cidade']);
        $cep = addslashes($_POST['cep']);
        $estado = addslashes($_POST['estado']);

        $cliente -> setNome($nome);
        $cliente -> setCpf($cpf);
        $cliente -> setEmail($email);
        $cliente -> setDtnasc($dtNasc);
        $cliente -> setNumcel($numCel);
        $cliente -> setRua($rua);
        $cliente -> setNumcasa($numCasa);
        $cliente -> setBairro($bairro);
        $cliente -> setCidade($cidade);
        $cliente -> setCep($cep);
        $cliente -> setEstado($estado);

        if($clienteDao->cadastrar($cliente)){

            echo "<script>alert('Cliente Cadastrado com Sucesso!!!!')</script>";
            
        }else{
            
            echo "Cliente Não cadastrado!";

        }


        

    }


?>
