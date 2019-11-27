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


DROP PROCEDURE IF EXISTS sp_Faturamento;
Delimiter $$
    CREATE PROCEDURE sp_Faturamento (v_periodo VARCHAR(10))
    BEGIN
        IF () THEN
        END IF;
    END; $$
DELIMITER ;