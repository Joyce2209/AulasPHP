create database dbFuncionarios CHARACTER SET utf8 COLLATE utf8_general_ci;
use dbFuncionarios;

CREATE TABLE Funcionarios(
	CodFuncio INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	NomeFuncio VARCHAR(100) NOT NULL,
	CPFFuncio VARCHAR(14) NOT NULL,
	TelefoneFuncio VARCHAR(15) NOT NULL,
	EmailFuncio VARCHAR(100) NOT NULL
);