function creatabla(){
	var db = openDatabase("numero", "1.0", "dbnumovimientos", '5*1024*1024');
var sql = "CREATE TABLE auxilar(id REAL UNIQUE, name numero, price numero)";
db.transaction(
  function(tx){
    tx.executeSql(sql, [],
      function(tx, result){
        alert('Tabla creada');
      },
      function(tx, error){
        alert('Error: ' + error.message);
      }
    );
  }
);
}
function inserta(contador,nurmerodoc){

var name = contador;
var price = nurmerodoc;
if (!!name && !!price){
  var sql = "INSERT INTO productos (name, price) values (?,?)";
  db.transaction(
    function(tx){
      tx.executeSql(sql, [name, price, new Date().getTime()],
        function(tx, result){
         // alert('Ejecución correcta.\n' + result.rowsAffected + ' productos afectados');
        },
        function(tx, error){
          alert('Error: ' + error.message);
        }
      );
    }
  );
}else{
  alert("Los valores no son correctos, no puede crearse el producto.");
}

}