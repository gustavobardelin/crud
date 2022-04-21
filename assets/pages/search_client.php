<?php

    require_once ("header.php");
    require_once ("../classes/ClienteDao.php");

    $clienteDao = new ClienteDao();

?>


    <main>
    
        <section class="container py-5">
            <h3>Clientes</h3>
            <p class="mb-5">Listagem de todos clientes cadastrados no sistema.</p>

            <div class="lista-clientes my-4">

                <table class="table table-bordered">

                    <?php

                        $dados = $clienteDao -> listar();
                        
                        if(count($dados) > 0){

                            echo "
                                <tr>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Email</th>
                                    <th>Celular</th>
                                    <th>Data de Nascimento</th>
                                </tr>
                            ";


                            for ($i=0; $i < count($dados); $i++) { 
                                
                                echo "<tr>";

                                if(isset($dados[$i])){

                                    echo "<td>".$dados[$i]["nome"]."</td>";
                                    echo "<td>".$dados[$i]["cpf"]."</td>";
                                    echo "<td>".$dados[$i]["email"]."</td>";
                                    echo "<td>".$dados[$i]["celular"]."</td>";    
                                    echo "<td>".$dados[$i]["data_nasc"]."</td>";    
                                    // echo "<td>".$dados[$i]["rua"]."</td>";    
                                    // echo "<td>".$dados[$i]["numero"]."</td>";    
                                    // echo "<td>".$dados[$i]["bairro"]."</td>";    
                                    // echo "<td>".$dados[$i]["cidade"]."</td>";    
                                    // echo "<td>".$dados[$i]["cep"]."</td>";    
                                    // echo "<td>".$dados[$i]["estado"]."</td>";    
                                }

                                echo "</tr>";

                            }

                        }else{

                            echo "<tr><td>Não há clientes cadastrados!!!</td></tr>";

                        }

                    ?>

                </table>

            </div>

        </section>

    </main>


<?php

    require ("footer.php");

?>
