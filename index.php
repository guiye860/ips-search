<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Consulta Nacional</title>
        <style>
            body {
                padding-top: 50px;
                //padding-bottom: 10px;
            }
        </style>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Bootstrap -->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body text-center">
                                Consulta de N&oacute;mina de Funcionarios - Instituto de Previsi&oacute;n Social.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-offset-4 col-md-offset-0 col-sm-offset-0 col-xs-offset-0 col-lg-3  col-md-12 col-sm-12 col-xs-12">
                        <form class="form-group">
                            <div class="col-lg-offset-0 col-md-offset-3 col-sm-offset-2 col-xs-offset-0 col-lg-10 col-md-3 col-sm-5 col-xs-7" style="padding-top: 1%;">
                                <input type="text" id="cod" onkeypress="return pulsar(event);" class="form-control">
                            </div>

                            <div class="col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0 col-lg-2 col-md-3 col-sm-2 col-xs-3" style="padding-top: 1%;">
                                <button type="button" class="btn btn-default" onclick="enviar_solicitud();">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-offset-5 col-lg-2 col-md-offset-4 col-md-3 col-sm-offset-4 col-sm-3 col-xs-offset-3 col-xs-12" style="padding-top: 1%;" id="resultado"></div>
                </div>
            </div>
        </div>
        <!--scripts-->
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!--scripts-->
        <script>
            function pulsar(e) {
                tecla = (document.all) ? e.keyCode : e.which;
                return (tecla != 13);
            }
            
            function open_window(url){
                window.open(url,"window","width=450,height=600,scrollbars=YES,menubar=NO,location=no");
            }
            

            function enviar_solicitud()
            {

                var cod = document.getElementById('cod').value;

                var parametros = "proceso=1&cod=" + cod;

                console.log(parametros);

                document.getElementById('resultado').innerHTML = "<p align='center'><img src='images/ajax-loader.gif' /></p>";

                var xmlhttp;

                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.open("POST", "procesos_ips.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.setRequestHeader("Content-length", parametros.length);
                xmlhttp.setRequestHeader("Connection", "close");

                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("resultado").innerHTML = xmlhttp.responseText;
                        
                    }
                }
                xmlhttp.send(parametros);
            }
        </script>
    </body>
</html>