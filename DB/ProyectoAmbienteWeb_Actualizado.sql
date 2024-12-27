drop database if exists shidalgo;
create database shidalgo;
use shidalgo;


CREATE TABLE usuarios (
  idUsuarios int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  Cedula int(11) NOT NULL,
  Nombre varchar(45) NOT NULL,
  priApe varchar(45) NOT NULL,
  segApe varchar(45) NOT NULL,
  Usuario varchar(45) NOT NULL,
  Pass varchar(45) NOT NULL); 
  
INSERT INTO usuarios (Cedula, Nombre, priApe, segApe, Usuario, Pass) VALUES
(112670352, 'Sergio', 'Hidalgo', 'Granados', 'Shidalgo', '1234'),
(112670351, 'Karen', 'Chinchilla', 'Segura', 'KrenChi', '1234'),
(145, 'Gabo', 'lopez', 'chinchilla', 'Gabo123', '1234'),
(111, 'Alonso', 'Chaves', 'Carrillo', 'Achaves', '123');


CREATE TABLE barcos (
  idbarcos int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  Nombre varchar(45) NOT NULL,
  Id int(11) NOT NULL,
  CantidadContenedores int(10) NOT NULL,
  Peso double NOT NULL,
  TipoDeProducto varchar(45) NOT NULL);

INSERT INTO barcos (Nombre, Id, CantidadContenedores, Peso, TipoDeProducto) VALUES
('Prueba', 1234, 12, 12368, 'Electrodomesticos'),
('GraciasDiosOtraVez', 987654, 1000, 70, 'Textiles'),
('Armagedon', 303, 20, 300, 'Comidas'),
('Libertad', 404, 30, 10, 'Textiles'),
('BlaHi', 33445566, 12350, 824587895, 'Electrodomesticos');


 
