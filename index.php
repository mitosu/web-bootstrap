<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Template in Bootstrap</title>
        <!--Styles Author-->
        <link href="css/styletags.css" rel="stylesheet">
        <!-- Bootstrap -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            $(document).ready(function(){   
            $('#name').focusout(function(){
                var name= $('#name').val();
                if(name == ""){
                    $('#nombre').addClass('has-error');
                }
                else{
                    $('#nombre').removeClass('has-error');
                }
                 });          
            });        
        </script>
    </head>
    <body>
        <div class="container">
        <h1>Hello, world!</h1>
        <div class="elements-contain table-responsive">
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Estado Civil</th>
                        <th>Edad</th>
                        <th>Documento</th>
                        <th>Aprovado</th>
                        <th>Alarma</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Miguel Angel Torres</td>
                        <td>miguel@gmail.com</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                    </tr>
                    <tr class="success">
                        <td>Cristian Enrique Torres</td>
                        <td>miguel@gmail.com</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                    </tr>
                    <tr>
                        <td>Miguel Enrique Torres</td>
                        <td>miguel@gmail.com</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                        <td>618204782</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="elements-contain">
            <form role="form">
                <div class="form-group" id="nombre">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="User name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        </div>
    </body>
</html>