USE PROMESSOMETRO;
INSERT INTO estado (ID_ESTADO, NOME, SIGLA) VALUES (NULL, 'S�o Paulo', 'SP');
INSERT INTO tipo_usuario (ID_TIPO_USUARIO, DESCRICAO) VALUES (NULL, 'Administrador');
INSERT INTO tipo_osa (ID_TIPO_OSA, DESCRICAO) VALUES (NULL, 'Primeira OSA');
INSERT INTO osa (ID_OSA, SIGLA, NOME, ID_TIPO_OSA) VALUES (NULL, 'SA', 'SANASA', 1);
INSERT INTO tema (ID_TEMA, SIGLA, NOME) VALUES (NULL, 'SA', 'Sa�de');
INSERT INTO pop_beneficiada (ID_POP_BENEFICIADA, TITULO, DESCRICAO) VALUES (NULL, 'Cadeirantes', 'Cadeirantes');
INSERT INTO cidade (ID_CIDADE, ID_ESTADO, NOME, AREAM2, POPULACAO, END_PORTAL) VALUES (NULL, '1', 'S�o Paulo', '122313123', '20000', 'wwww');
INSERT INTO gestao (ID_GESTAO, DATA_INICIO, DURACAO, DATA_FIM, PROMESSA_CAMPANHA, ID_CIDADE) VALUES (NULL, '2016-06-01', '4', '2020-06-01', 'TESTE', '1');