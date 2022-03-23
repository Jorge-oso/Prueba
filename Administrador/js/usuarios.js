function agregarusuario(){
    datos=$('#frmUsuario').serialize();
    console.log(datos);
    $.ajax({
        url:"../procesos/usuario/agregarusuario.php",
        type:"POST",
        data:datos,
        success:function(r){
            if(r==1){
                swal(":(", "Fallo al agregar!", "error");
            }else{
                $('#frmUsuario')[0].reset();
                $('#tabla').load("tablausuario/tablausuario.php");
                swal(":D", "Agregado con exito!", "success");
            }
        }
    });
}