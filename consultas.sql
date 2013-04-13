select Sigla,nodocumento,nombretercero from terceros inner join identificacion;
select Sigla,nodocumento,nombretercero from terceros inner join identificacion where tipodocumento = IdTipoidentificacion && estado = 1;

SELECT * FROM  identificacion;

ALTER TABLE identificacion ADD Sigla VARCHAR(5);

ALTER TABLE terceros ADD Estado VARCHAR(5);


1 conexion
2 clase que la maneja
3 la que muestralos datos//ajax

/*parametrizacion_contador.html
	tipodocumento--->identificacion
	cargo--->cargos	
*/

INSERT INTO funcionarios (idfuncionarios, tipodocumento, nodocumento, nombres, apellidos, rutnit, telefono, celular, direccion, cargo) VALUES
(1, 1, 80188262, 'Ernesto Andrés', 'Álvarez lópez', '69235842-21', '5489263', '310  5263984', 'Cll 34 No 58- 26 cuadrante 8 bloque 6', 2);

*tarea --> codificacion utf8 para tildez

