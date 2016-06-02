CREATE DATABASE PROMESSOMETRO;

USE PROMESSOMETRO;

CREATE TABLE ESTADO(
ID_ESTADO 	INT AUTO_INCREMENT 	NOT NULL,
NOME 		VARCHAR(30) 		NOT NULL,
SIGLA 		VARCHAR(2) 			NOT NULL,
UNIQUE		(NOME),
UNIQUE		(SIGLA),
PRIMARY KEY (ID_ESTADO)
);

CREATE TABLE CIDADE(
ID_CIDADE 	INT AUTO_INCREMENT	NOT NULL,
ID_ESTADO	INT 				NOT NULL,
NOME		VARCHAR(30)			NOT NULL,
AREAM2		FLOAT				NOT NULL,
POPULACAO	INT					NOT NULL,
END_PORTAL	VARCHAR(50)			NOT NULL,
PRIMARY KEY (ID_CIDADE),
FOREIGN KEY (ID_ESTADO) REFERENCES ESTADO (ID_ESTADO)
);

CREATE TABLE GESTAO(
ID_GESTAO 			INT AUTO_INCREMENT	NOT NULL,
DATA_INICIO			DATE				NOT NULL,
DURACAO				INT					NOT NULL,
DATA_FIM			DATE				NOT NULL,
PROMESSA_CAMPANHA	TEXT				NOT NULL,
ID_CIDADE			INT					NOT NULL,
PRIMARY KEY (ID_GESTAO),
FOREIGN KEY (ID_CIDADE) REFERENCES CIDADE (ID_CIDADE)
);

CREATE TABLE CARGO_MEMBRO(
ID_CARGO_MEMBRO	INT AUTO_INCREMENT	NOT NULL,
DESCRICAO		TEXT				NOT NULL,
PRIMARY KEY (ID_CARGO_MEMBRO)
);

CREATE TABLE COLIGACAO(
ID_COLIGACAO 	INT AUTO_INCREMENT	NOT NULL,
NOME			VARCHAR(50)			NOT NULL,
PRIMARY KEY (ID_COLIGACAO)
);

CREATE TABLE PARTIDO(
ID_PARTIDO	INT AUTO_INCREMENT	NOT NULL,
NOME		VARCHAR(30)			NOT NULL,
ID_COLIGACAO	INT				NOT NULL,
PRIMARY KEY (ID_PARTIDO),
FOREIGN KEY	(ID_COLIGACAO)	REFERENCES	COLIGACAO (ID_COLIGACAO)
);

CREATE TABLE MEMBRO(
ID_MEMBRO		INT AUTO_INCREMENT	NOT NULL,
NOME			VARCHAR(50)			NOT NULL,
ID_CARGO_MEMBRO	INT					NOT NULL,
ID_PARTIDO		INT					NOT NULL,
PRIMARY KEY (ID_MEMBRO),
FOREIGN KEY (ID_CARGO_MEMBRO)	REFERENCES CARGO_MEMBRO	(ID_CARGO_MEMBRO),
FOREIGN KEY (ID_PARTIDO) 		REFERENCES PARTIDO		(ID_PARTIDO)
);

CREATE TABLE EQUIPE_GOVERNO(
ID_EQUIPE_GOVERNO	INT AUTO_INCREMENT	NOT NULL,
ID_GESTAO			INT					NOT NULL,
ID_MEMBRO			INT					NOT NULL,
PRIMARY KEY	(ID_EQUIPE_GOVERNO),
FOREIGN KEY	(ID_GESTAO)	REFERENCES	GESTAO	(ID_GESTAO),
FOREIGN KEY	(ID_MEMBRO)	REFERENCES	MEMBRO	(ID_MEMBRO)
);

CREATE TABLE TIPO_OSA(
ID_TIPO_OSA	INT AUTO_INCREMENT	NOT NULL,
DESCRICAO	VARCHAR(40)			NOT NULL,
PRIMARY KEY (ID_TIPO_OSA)
);

CREATE TABLE OSA(
ID_OSA		INT AUTO_INCREMENT	NOT NULL,
SIGLA		VARCHAR(10)			NOT NULL,
NOME		VARCHAR(50)			NOT NULL,
ID_TIPO_OSA	INT					NOT NULL,
PRIMARY KEY	(ID_OSA),
FOREIGN KEY	(ID_TIPO_OSA)	REFERENCES	TIPO_OSA	(ID_TIPO_OSA)
);

CREATE TABLE TIPO_USUARIO(
ID_TIPO_USUARIO	INT AUTO_INCREMENT	NOT NULL,
DESCRICAO		VARCHAR(30)			NOT NULL,
PRIMARY KEY	(ID_TIPO_USUARIO)
);

CREATE TABLE USUARIO(
ID_USUARIO			INT AUTO_INCREMENT	NOT NULL,
NOME				VARCHAR(50)			NOT NULL,
EMAIL				VARCHAR(50)			NOT NULL,
SENHA				VARCHAR(50)			NOT NULL,
ID_CIDADE			INT					NOT NULL,
ID_TIPO_USUARIO		INT					NOT NULL,
ID_OSA				INT							,
CARGO				VARCHAR(30)			NOT NULL,
STATUS_ATIVIDADE	BINARY				NOT NULL,	/*1 = ATIVO, 0 = INATIVO*/
PRIMARY KEY	(ID_USUARIO),
UNIQUE		(EMAIL),
FOREIGN KEY	(ID_CIDADE)			REFERENCES	CIDADE			(ID_CIDADE),
FOREIGN KEY	(ID_TIPO_USUARIO)	REFERENCES	TIPO_USUARIO	(ID_TIPO_USUARIO),
FOREIGN KEY	(ID_OSA)			REFERENCES	OSA				(ID_OSA)
);

CREATE TABLE TEMA(
ID_TEMA	INT AUTO_INCREMENT	NOT NULL,
SIGLA	VARCHAR(5)			NOT NULL,
NOME	VARCHAR(30)			NOT NULL,
PRIMARY KEY	(ID_TEMA),
UNIQUE		(NOME),
UNIQUE		(SIGLA)
);

CREATE TABLE POP_BENEFICIADA(
ID_POP_BENEFICIADA	INT AUTO_INCREMENT	NOT NULL,
TITULO				VARCHAR(50)			NOT NULL,
DESCRICAO			VARCHAR(60)			NOT NULL,
UNIQUE				(TITULO),
PRIMARY KEY	(ID_POP_BENEFICIADA)
);

CREATE TABLE META(
ID_META				INT AUTO_INCREMENT	NOT NULL,
OBJETIVO			TEXT				NOT NULL,
RESUMO				TEXT				NOT NULL,
DESCRICAO			TEXT				NOT NULL,
ID_POP_BENEFICIADA	INT 				NOT NULL,
DATA_INICIO			DATE				NOT NULL,
DATA_FIM			DATE				NOT NULL,
STATUS_META			VARCHAR(3)			NOT NULL, /*VERIFICAR NO MAPA PROMESSOMETRO AS SIGLAS DE STATUS*/
ID_GESTAO			INT					NOT NULL,
ID_TEMA				INT					NOT NULL,
PRIMARY KEY	(ID_META),
FOREIGN KEY	(ID_POP_BENEFICIADA)	REFERENCES	POP_BENEFICIADA	(ID_POP_BENEFICIADA),
FOREIGN KEY	(ID_GESTAO)				REFERENCES	GESTAO			(ID_GESTAO),
FOREIGN KEY	(ID_TEMA)				REFERENCES	TEMA			(ID_TEMA)
);

CREATE TABLE USUARIO_SEGUE_META(
ID_USUARIO_SEGUE_META	INT AUTO_INCREMENT	NOT NULL,
ID_USUARIO				INT					NOT NULL,
ID_META					INT					NOT NULL,
PRIMARY KEY	(ID_USUARIO_SEGUE_META),
FOREIGN KEY	(ID_USUARIO)	REFERENCES	USUARIO	(ID_USUARIO),
FOREIGN	KEY	(ID_META)		REFERENCES	META	(ID_META)
);

CREATE TABLE ACAO(
ID_ACAO					INT AUTO_INCREMENT	NOT NULL,
DESCRICAO				TEXT				NOT NULL,
ID_META					INT					NOT NULL,
DATA_INICIO				DATE				NOT NULL,
DATA_FIM				DATE				NOT NULL,
INVESTIMENTO_PREVISTO	DECIMAL(10, 2)		NOT NULL,
INVESTIMENTO_EXECUTADO	DECIMAL(10, 2)		NOT NULL,
PRIMARY KEY	(ID_ACAO),
FOREIGN KEY	(ID_META)	REFERENCES	META	(ID_META)
);

CREATE TABLE RESPONSAVEL_ACAO(
ID_RESPONSAVEL_ACAO	INT AUTO_INCREMENT	NOT NULL,
ID_USUARIO			INT					NOT NULL,
ID_ACAO				INT					NOT NULL,
PRIMARY KEY	(ID_RESPONSAVEL_ACAO),
FOREIGN KEY	(ID_USUARIO)	REFERENCES	USUARIO	(ID_USUARIO),
FOREIGN KEY	(ID_ACAO)		REFERENCES	ACAO	(ID_ACAO)
);

CREATE TABLE PRESTACAO_CONTA_ACAO(
ID_PRESTA_CONTA_ACAO	INT AUTO_INCREMENT	NOT NULL,
ID_RESPONSAVEL_ACAO		INT					NOT NULL,
PERCENTUAL_ACAO			FLOAT				NOT NULL,
CONSIDERACAO			TEXT				NOT NULL,
PRIMARY KEY	(ID_PRESTA_CONTA_ACAO),
FOREIGN KEY	(ID_RESPONSAVEL_ACAO)	REFERENCES	RESPONSAVEL_ACAO	(ID_RESPONSAVEL_ACAO)
);

CREATE TABLE INDICADOR(
ID_INDICADOR	INT AUTO_INCREMENT	NOT NULL,
NOME			VARCHAR(40)			NOT NULL,
DESCRICAO		TEXT				NOT NULL,
PROTOCOLO		INT					NOT NULL,
FONTE			VARCHAR(100)		NOT NULL,
UND_MEDIDA		VARCHAR(5)			NOT NULL,
PRIMARY KEY	(ID_INDICADOR)
);

CREATE TABLE META_INDICADOR(
ID_META_INDICADOR	INT AUTO_INCREMENT	NOT NULL,
ID_INDICADOR		INT					NOT NULL,
ID_GESTAO			INT					NOT NULL,
VALOR_META			DECIMAL(10, 2)		NOT NULL,
PRIMARY KEY	(ID_META_INDICADOR),
FOREIGN KEY	(ID_INDICADOR)	REFERENCES	INDICADOR	(ID_INDICADOR),
FOREIGN KEY	(ID_GESTAO)		REFERENCES	GESTAO		(ID_GESTAO)
);

CREATE TABLE RESPONSAVEL_INDICADOR(
ID_RESPONSAVEL_INDICADOR	INT AUTO_INCREMENT	NOT NULL,
ID_USUARIO					INT					NOT NULL,
ID_INDICADOR				INT					NOT NULL,
PRIMARY KEY	(ID_RESPONSAVEL_INDICADOR),
FOREIGN KEY	(ID_USUARIO)	REFERENCES	USUARIO		(ID_USUARIO),
FOREIGN KEY	(ID_INDICADOR)	REFERENCES	INDICADOR	(ID_INDICADOR)
);

CREATE TABLE PRESTACAO_INDICADOR(
ID_PRESTACAO_INDICADOR		INT AUTO_INCREMENT	NOT NULL,
ID_RESPONSAVEL_INDICADOR	INT					NOT NULL,
DATA_REFERENCIA				DATE				NOT NULL,
VALOR						DECIMAL(10, 2)		NOT NULL,
CONSIDERACAO				TEXT				NOT NULL,
PERCENTUAL_INDICADOR		FLOAT				NOT NULL,
PRIMARY KEY	(ID_PRESTACAO_INDICADOR),
FOREIGN KEY	(ID_RESPONSAVEL_INDICADOR)	REFERENCES	RESPONSAVEL_INDICADOR	(ID_RESPONSAVEL_INDICADOR)
);

CREATE TABLE PROJETO(
ID_PROJETO				INT AUTO_INCREMENT	NOT NULL,
DESCRICAO				TEXT				NOT NULL,
INVESTIMENTO_PREVISTO	DECIMAL(10, 2)		NOT NULL,
DATA_INICIO				DATE				NOT NULL,
DATA_FIM				DATE				NOT NULL,
ID_GESTAO				INT					NOT NULL,
PRIMARY KEY	(ID_PROJETO),
FOREIGN KEY	(ID_GESTAO)	REFERENCES	GESTAO	(ID_GESTAO)
);

CREATE TABLE RESPONSAVEL_PROJETO(
ID_RESPONSAVEL_PROJETO	INT AUTO_INCREMENT	NOT NULL,
ID_USUARIO				INT					NOT NULL,
ID_PROJETO				INT					NOT NULL,
PRIMARY KEY	(ID_RESPONSAVEL_PROJETO),
FOREIGN KEY	(ID_USUARIO)	REFERENCES	USUARIO	(ID_USUARIO),
FOREIGN KEY	(ID_PROJETO)	REFERENCES	PROJETO	(ID_PROJETO)
);

CREATE TABLE PRESTACAO_PROJETO(
ID_PRESTACAO_PROJETO	INT AUTO_INCREMENT	NOT NULL,
ID_RESPONSAVEL_PROJETO	INT					NOT NULL,
DATA_REFERENCIA			DATE				NOT NULL,
PERCENTUAL_PROJETO		FLOAT				NOT NULL,
PRIMARY KEY	(ID_PRESTACAO_PROJETO),
FOREIGN KEY	(ID_RESPONSAVEL_PROJETO)	REFERENCES	RESPONSAVEL_PROJETO	(ID_RESPONSAVEL_PROJETO)
);

