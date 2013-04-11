select Sigla,nodocumento,nombretercero from terceros inner join identificacion;
select Sigla,nodocumento,nombretercero from terceros inner join identificacion where tipodocumento = IdTipoidentificacion && estado = 1;

SELECT * FROM  identificacion;

ALTER TABLE identificacion ADD Sigla VARCHAR(5);

ALTER TABLE terceros ADD Estado VARCHAR(5);


1 conexion
2 clase que la maneja
3 la que muestralos datos//ajax