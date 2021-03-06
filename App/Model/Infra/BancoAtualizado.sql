CREATE DATABASE encontreseupet DEFAULT CHARACTER SET utf8 ;

USE  encontreseupet;

CREATE TABLE POST (
  ID INT NOT NULL AUTO_INCREMENT,
  TipoPost INT NOT NULL,
  Titulo VARCHAR(45) NOT NULL,
  DtCriacao DATE NOT NULL,
  HrCriacao TIME(6) NOT NULL,
  Ativo INT NOT NULL,
  CaminhoPost VARCHAR(45) NOT NULL,
  PRIMARY KEY (ID)
  
  
)ENGINE = InnoDB;

CREATE TABLE TELEFONE (
  ID INT NOT NULL AUTO_INCREMENT,
  Ddd INT NOT NULL,
  Numero INT NOT NULL,
  PRIMARY KEY (ID)
  
)ENGINE = InnoDB;

CREATE TABLE ENDERECO (
  ID INT NOT NULL AUTO_INCREMENT,
  CEP INT NOT NULL,
  Endereco VARCHAR(45) NOT NULL,
  Complemento VARCHAR(45) NOT NULL,
  UF CHAR(2) NOT NULL,
  PRIMARY KEY (ID)
  
)ENGINE = InnoDB;


CREATE TABLE ACESSO (
  ID INT NOT NULL AUTO_INCREMENT,
  Usuario VARCHAR(45) NOT NULL,
  Senha VARCHAR(45) NOT NULL,
  PRIMARY KEY (ID)
  
)ENGINE = InnoDB;

CREATE TABLE ANUNCIO (
  ID INT NOT NULL AUTO_INCREMENT,
  DtCriacao DATE NOT NULL,
  HrCriacao TIME(6) NOT NULL,
  FotoAnuncio VARCHAR(45) NOT NULL,
  Ativo INT NOT NULL,
  Aprovado INT NOT NULL,
  
  PRIMARY KEY (ID)
  
)ENGINE = InnoDB;

CREATE TABLE TIPOPESSOA (
  ID INT NOT NULL AUTO_INCREMENT,
  Descricao VARCHAR(45) NOT NULL,
  Ativo INT NOT NULL,
  PRIMARY KEY (ID)

)ENGINE = InnoDB;

insert into tipopessoa(descricao , ativo) 
values ('UsuarioComum',true)
	  ,('Patrocinador',true)
	  ,('Administrador',true);

CREATE TABLE PESSOA (
  ID INT NOT NULL AUTO_INCREMENT,
  Nome VARCHAR(45) NOT NULL,
  Sobrenome VARCHAR(45) NOT NULL,
  DtNascimento DATE NOT NULL,
  Sexo CHAR(2) NOT NULL,
  Ativo INT NOT NULL,
  POST_ID INT NULL,
  TIPOPESSOA_ID INT NOT NULL,
  TELEFONE_ID INT NOT NULL,
  ENDERECO_ID INT NOT NULL,
  ACESSO_ID INT NOT NULL,
  ANUNCIO_ID INT NULL,
  
  PRIMARY KEY (ID),
  
    FOREIGN KEY (POST_ID) 
		REFERENCES POST(ID),

    FOREIGN KEY (TIPOPESSOA_ID)
		REFERENCES TIPOPESSOA(ID),
  
    FOREIGN KEY (TELEFONE_ID)
		REFERENCES TELEFONE(ID),

    FOREIGN KEY (ENDERECO_ID)
		REFERENCES ENDERECO(ID),

    FOREIGN KEY (ACESSO_ID)
		REFERENCES ACESSO(ID),

    FOREIGN KEY (ANUNCIO_ID)
		REFERENCES ANUNCIO(ID)

)ENGINE = InnoDB;


CREATE TABLE ANIMAL (
  ID INT NOT NULL AUTO_INCREMENT,
  TipoAnimal INT NOT NULL,
  NomePet VARCHAR(45) NULL,
  PortePet INT NOT NULL,
  RacaPet VARCHAR(45) NOT NULL,
  CorPet VARCHAR(15) NOT NULL,
  SexoPet CHAR(2) NOT NULL,
  IdadePet INT NOT NULL,
  FotoPet VARCHAR(1) NOT NULL,
  Ativo INT NULL,
  POST_ID INT NOT NULL,
  PESSOA_ID INT NOT NULL,
  
  PRIMARY KEY (ID),

    FOREIGN KEY (POST_ID)
		REFERENCES POST(ID),

    FOREIGN KEY (PESSOA_ID)
		REFERENCES PESSOA(ID)
        
)ENGINE = InnoDB;

CREATE TABLE LOCALIZACAO (
  ID INT NOT NULL AUTO_INCREMENT,
  Cidade VARCHAR(15) NOT NULL,
  Bairro VARCHAR(30) NOT NULL,
  PontoReferencia VARCHAR(100) NULL,
  POST_ID INT NOT NULL,
  PRIMARY KEY(ID),

    FOREIGN KEY (POST_ID)
		REFERENCES POST(ID)
        
)ENGINE = InnoDB;
