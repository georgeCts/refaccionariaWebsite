<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notificación</title>
</head>
<body>
    <div>
        <div class="sufee-login d-flex align-content-center flex-wrap">
            <div class="container">
                <div class="login-content">
                    <div class="login-form">
                        <form class="form-horizontal was-validate" >
                            {{ csrf_field()}}
                            <div class="login-content"> 
                                <div class="login-form">
                                    
                                    <div class="frmRegistro">
                                        <div class="form-group">
                                            <body>
                                                <h2>{!! $titulo !!}</h2>                                            
                                                {!! $contenido !!}                                            
                                            </body>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>