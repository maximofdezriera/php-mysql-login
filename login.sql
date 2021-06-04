CREATE DATABASE login;
USE login;

CREATE TABLE usuario (
    codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(12) NOT NULL UNIQUE,
    contrasenya VARCHAR(8) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    naccesos int,
    ultimoacceso DATETIME DEFAULT CURRENT_TIMESTAMP,
    rol int,
    FOREIGN KEY (rol) REFERENCES roles(codigorol)
);
CREATE TABLE roles (
    codigorol INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(15) NOT NULL UNIQUE
);
