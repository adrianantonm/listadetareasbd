CREATE DATABASE practica05;
USE practica05;

CREATE TABLE usuarios(
                         id_usuario INT AUTO_INCREMENT,
                         usuario VARCHAR(30) not null ,
                         contraseña VARCHAR(30) NOT NULL ,
                         constraint usuarios_pk PRIMARY KEY (id_usuario)
);

CREATE TABLE lista(
                      id_tarea INT AUTO_INCREMENT,
                      tarea VARCHAR(100) NOT NULL ,
                      id_usuario INT,
                      constraint lista_fk1 FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
                      CONSTRAINT lista_pk PRIMARY KEY (id_tarea)
);

CREATE USER usuarios@localhost IDENTIFIED BY '12345';

GRANT SELECT,INSERT,DELETE,UPDATE on usuarios.* TO usuarios@localhost;

INSERT INTO usuarios (usuario,contraseña) VALUES ('Ana','123456');
INSERT INTO usuarios (usuario,contraseña) VALUES ('Marta','123456');
INSERT INTO usuarios (usuario,contraseña) VALUES ('Jose','123456');
INSERT INTO usuarios (usuario,contraseña) VALUES ('Sergio','123456');

SELECT * FROM usuarios;



