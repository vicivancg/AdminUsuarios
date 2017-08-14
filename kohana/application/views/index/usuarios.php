
<body>
    <div class="container">
        <h1 class='text-center'>Listado de usuarios</h1>
        <h2 class='text-center'><?=HTML::anchor('PersonaController/addUser','Nuevo usuario')?></h2>
        <table class='table'>
            <tr>
                <td>Email</td>
                <td>Pass</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
            <?php foreach($usuarios as $usuario) { ?>
            <tr>
                <td><?=$usuario->email?></td>
                <td><?=$usuario->pass?></td>
                <td><?=HTML::anchor('PersonaController/formulario/'.$usuario->idusuario,'Modificar')?></td>
                <td><?=HTML::anchor('PersonaController/borrar/'.$usuario->idusuario,'Eliminar usuario')?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
