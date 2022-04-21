<?php

    require ("header.php");
    require_once ("../classes/ClienteDao.php");

    $clienteDao = new ClienteDao();

?>


<main>
    
    <section class="container py-5">
        
        <h3>Apagar Clientes</h3>
        <p>Opção de exclusão de clientes do sistema.</p>


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
                                <th>Ação</th>
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
                            }

                            echo "<td><a href='delete_client.php?id={$dados[$i]["codCliente"]}' class='btn btn-danger' >Excluir</a></td>";

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


    if(isset($_GET["id"])){

        $codCliente = addslashes($_GET["id"]);
        $clienteDao -> deletar($codCliente);
        
        header("location: delete_client.php");

        exit;
        

    }

?>