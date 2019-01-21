<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Miette - Made With Love</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto');
        </style>
        <style>
            body{
                font-family: 'Roboto', sans-serif;
                background-color: #84d8d1;
                width: 1024px;
                height: 768px;
            }
            
            #contenedor{
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                -webkit-transform: translate(-50%, -50%);
                width: 500px;
            }
            
            #logo{
                width: 200px;
                margin: 0 auto;
                clear:both;
            }
            
            #logo img{
                height: 200px;
            }
            #contenido{
                width: 500px;
            }
            
            #en_con{
                font-size: 30px;
                color:white;
                font-weight: bold;
                letter-spacing: 4px;
                text-align: center;
            }
            
            #facebook, #whatsapp{
                height: 40px;
                vertical-align: middle;
            }
            
            #contactos{
                color:#3f2a2e;
            }
            
            #contactos p{
                padding-left: 60px;
            }
            a{                
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        
        <div id="contenedor">
            
            <div id="logo">
                <img src="{{ asset('img/logo_webmiette_sinfondo.png') }}">
            </div>

            <div id="contenido">
                <p id="en_con">
                    EN CONSTRUCCIÓN
                </p>
                
                <div id="contactos">
                    <p>síguenos en <a href="https://www.facebook.com/miettebakery/?fref=ts" target="_blank"><img src="img/icono_facebook.png" id="facebook" alt="facebook"></a> contáctanos <img src="img/icono_whatsapp.png" id="whatsapp" alt="whatsapp"/> +56 9 8440 0710</p>
                    
                </div>
               
            </div>
                   
        </div>
        
    </body>
</html>
