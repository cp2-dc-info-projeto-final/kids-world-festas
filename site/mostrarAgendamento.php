<?php

    require_once "ConnectionFactory.php";

    function buscaAgendamentos() {
        $link = getConnection();
 
        $query = ("SELECT
        locacao.dia, usuario.email, usuario.nome, cliente.telefone,
        endereco.logradouro, endereco.numero, endereco.cep, endereco.complemento,
        endereco.cidade, locacao.horario, produto.nome AS nomeprod, locacao_produto.preco_pago

        FROM
        usuario

        INNER JOIN
        cliente ON usuario.id = cliente.id 

        INNER JOIN
        locacao ON locacao.id_cliente = cliente.id

        INNER JOIN
        endereco ON endereco.id = locacao.id_endereco

        INNER JOIN
        locacao_produto ON locacao_produto.id_locacao = locacao.id

        INNER JOIN
        produto ON produto.id = locacao_produto.id_produto

        ORDER BY
        locacao.dia");
 
        $result=mysqli_query($link, $query);
        if (!$result)
        {
            die(mysqli_error($link));
        }
        
        $agendamentos = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_close($link);
            return $agendamentos;
        
        if ($query)
        {
            $fetch = $query->fetchAll();
            return $fetch;
        } 

        else 
        {
            die($query->errorInfo());
        }
            return null;
        }
?>