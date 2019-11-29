DROP PROCEDURE IF EXISTS sp_PedidosPorData;
Delimiter $$
    CREATE PROCEDURE sp_PedidosPorData (v_dataInicial DATE, v_dataFinal DATE)
    BEGIN 
        SELECT p.*, u.nome AS 'usuario'
        FROM pedido p 
        INNER JOIN cadastrocliente u
        ON p.idCliente = u.idCliente
        WHERE p.datacompra BETWEEN 'v_dataInicial' AND 'v_dataFinal';
    END; $$
DELIMITER ;

        
		DROP PROCEDURE IF EXISTS sp_PedidosPorCliente;
		DELIMITER $$
			CREATE PROCEDURE sp_PedidosPorCliente (v_idCliente BIGINT(11))
			BEGIN
				SELECT *
				FROM pedido
				WHERE idCliente = v_idCliente
				ORDER BY dataCompra;
			END; $$
		DELIMITER ;


		DROP PROCEDURE IF EXISTS sp_PedidosPorMunicipio;
		DELIMITER $$
			CREATE PROCEDURE sp_PedidosPorMunicipio (v_cidade VARCHAR(30))
			BEGIN
				SELECT pedido.*
				FROM pedido
				INNER JOIN cadastrocliente
				ON pedido.idCliente = usuario.idCliente
				INNER JOIN endereco
				ON usuario.idCliente = endereco.idCliente
				WHERE endereco.cidade = v_cidade;
			END; $$
		DELIMITER ;

