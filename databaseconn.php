<?php
        try{
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=dberpcontainer', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec('set names utf8');
            /*$stmt = ->prepare('INSERT INTO produto(id
                                                  ,descricao
                                                  ,valor
                                                  ,dtregistro
                                                  ,categoria_id
                                                  ,secao_id) values(default
                                                                  ,:descricao
                                                                  ,:valor
                                                                  ,:dtregistro
                                                                  ,:categoria_id
                                                                  ,:secao_id)');
            $stmt->execute(array(
                ':descricao'    => 'Bolo Anivers. Pequeno';
                ':valor'        => '35.80';
                ':dtregistro'   => current_timestamp();
                ':categoria_id' => '2';
                ':secao_id'     => '2';
            ));
            
            echo $stmt->rowCount();*/
            
        } catch(PDOEXception $e){
            echo 'Error na conexão ao banco de dados: ' . $e->getMessage();
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<main>
    <section>
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Data Registro</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Seção</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><input type="hidden" name="id"></th>
                    <td><input type="text" name="descricao"></td>
                    <td><input type="text" name="valor"></td>
                    <td><input type="text" name="dtregistro"></td>
                    <td><input type="text" name="categoria"></td>
                    <td><input type="text" name="secao"></td>
                  </tr>
                  
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </section>
</main>    
</body>
</html>