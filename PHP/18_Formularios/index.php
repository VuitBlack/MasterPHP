<!--FORMULARIO:
    Permiten que el usuario introduzca información y la envíe al servidor.
 
--> 
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Formulario PHP y HTML</title>
    </head>
    <body>
        <h1>FORMULARIO</h1>
        <!-- El formulario tiene el atributo action->pagina donde se manda la información, 
            metoth->modo de envío de la información POST o GET, enctype="multipart/form-data" -->
        <form action="", method="POST", enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <p><input type="text" name="nombre" minlength="5" maxlength="20" required="required" placeholder="Nombre ..."/></p>
            
            <label for="apellido">Apellido 1:</label>
            <p><input type="text" name="apellido1" autofocus="autofocus" placeholder="Primer Apellido ..." /></p>
            
            <label for="apellido2">Apellido 2:</label>
            <p><input type="text" name="apellido2" disabled="disabled" placeholder="Segundo Apellido ..."/></p>
            
            <label for="boton">Botón:</label>
            <p><input type="button" name="boton" value="Haz CLICK"/></p>
            
            <label for="sexo">Sexo:</label>
            <p>
                Hombre <input type="checkbox" name="sexo" value="hombre"/>
                Mujer <input type="checkbox" name="sexo" value="mujer"/>
                No Definido<input type="checkbox" name="sexo" value="no_definido" checked="cheched"/>   
            </p>
            
            <label for="color">Color:</label>
            <p><input type="color" name="color" /></p>
            
            <label for="fecha">Fecha:</label>
            <p><input type="date" name="fecha" /></p>
            
            <label for="correo">Email:</label>
            <p><input type="email" name="email" /></p>
            
            <label for="archivo">Adjunta archivos:</label>
            <p><input type="file" name="archivo" multiple="multiple"/></p>
            
            <label for="fecha">Fecha:</label>
            <p><input type="date" name="fecha" /></p>
            
            <label for="numero">Numero:</label>
            <p><input type="number" name="numero" /></p>
            
            <label for="password">Password:</label>
            <p><input type="password" name="password" /></p>
            
            <label for="continente">Continente:</label>
            <p>
                America del Sur<input type="radio" name="continente" value="Ameria Sur" />
                Europa<input type="radio" name="continente" value="Europa"/>
                Asia <input type="radio" name="continente" value="Asia" />
            </p>
         
            <label for="web">WebSite:</label>
            <p><input type="url" name="web" /></p>
            
            <label for="areaTexto">Area de texto:</label>
            <p><textarea name="areaTexto"></textarea></p>
            
            <label for="peliculas">Peliculas:</label>
            <select name="peliculas">
                <option value="IronMan">IronMan</option>
                <option value="Dead Pool">Dead Pool</option>
                <option value="Batman">Batman</option>
                <option value="Spiderman">Spiderman</option>
            </select><br/><br/>
                        
            <input type="submit" value="Enviar" /><br/>
        </form>
        
    </body>
</html>
