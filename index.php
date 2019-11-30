<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Clima Brusque e Região</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="js/clima.js"></script>
    
        
        <!-- Tags Gerais -->
    <meta NAME="DESCRIPTION" CONTENT="Site de informações climáticas de Brusque e região "/>
    <meta NAME="ABSTRACT" CONTENT="Informaões climáticac"/>
    <meta name="keywords" content="Clima, temperatura, temperatura para Brusque, tempo para brusque, previsão para brusque, municipiu, chuva para o vale do itajai, chuva final de semana, brusque, itajai, vale do itajai "/>
    <meta NAME="title" CONTENT="Clima Brusque e Região" />
    <meta NAME="identifier-url" content="https://diozecaps-clima.herokuapp.com/" />
    <meta NAME="author" content="José Victor" />
    <meta NAME="ROBOTS" CONTENT="All" />
    <meta NAME="RATING" CONTENT="general" />
    <meta NAME="DISTRIBUTION" CONTENT="global" />
    <meta NAME="LANGUAGE" CONTENT="pt-br" />
    <meta name="content-language" content="portuguese" />
    <meta name="doc-class" content="Completed" /> 
    <meta name="reply-to" content="jose.brusque25@gmail.com"/>
    
        <!-- Tags Para rede social Facebook -->
    <meta property="og:url" content="https://diozecaps-clima.herokuapp.com/" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Clima Brusque e Região" />
    <meta property="og:title" content="Clima Brusque e Região" />
    <meta property="og:description" content="Site de informações climáticas de Brusque e região" />
    <meta property="og:image" content="https://www.google.com/url?sa=i&url=https%3A%2F%2Ffindlogovector.com%2Fclima-com-logo-vector-svg%2F&psig=AOvVaw2eh7Q3Ncn7m65IDeQdcArW&ust=1575153338435000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMDaoe3lkOYCFQAAAAAdAAAAABAD" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="120" />
    <meta property="fb:app_id" content="" />
    
        <!-- Tags Para rede social Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Site de informações climáticas de Brusque e região" />
    <meta name="twitter:title" content="Clima Brusque e Região" />

    </head>
    <body>
        <div class="row">
            
            <div class="col-md-12">
                
                <div class="jumbotron">
                    <h1>Tempo para Brusque-SC | <span id="temperatura"> </span> </h1>
                    <p>
                        <span id="situacao">Parcialmente nublado</span>
                        <img id="icone" src="img/icones/02d.png"/>  
                    </p>                     
                </div>                                 
            </div>
         </div>
        
        <div class="row">
            
            <div class="col-md-12">
                
                <div class="jumbotron">
                    <h1>Umidade do ar atual</h1>
                    <p>
                        <span id="umidade"> </span>
                        <img src="img/icones/umidade.png"
                             width="100"/>
                    </p>                     
                </div>                                 
            </div>
         </div>
        
         <div class="row">
            
            <div class="col-md-12">
                
                <div class="jumbotron">
                    <h1>Pressão do ar </h1>
                    <p>
                       <span id="pressaoAr"> </span>
                        <img src="img/icones/pressao.png"
                             width="100"/>
                    </p>                     
                </div>                                 
            </div>
         </div>
        
         <div class="row">
            
            <div class="col-md-12">
                
                <div class="jumbotron">
                    <h1>Temperatura máxima </h1>
                    <p>
                      <span id="temp_max"></span>
                       <img src="img/icones/sc.png"
                            width="100"/>
                    </p>  
                </div>                                 
            </div>
         </div>
        
         <div class="row">
            
            <div class="col-md-12">
                
                <div class="jumbotron">
                    <h1>Temperatura mínima  </h1>
                    <p>
                      <span id="temp_min"></span>
                       <img src="img/icones/sb.png"
                            width="100"/>
                    </p>                     
                </div>                                 
            </div>
         </div>
        
         <div class="row">
            
            <div class="col-md-12">
                
                <div class="jumbotron">
                    <h1>Velocidade do vento </h1>
                    <p>
                       <span id="wind"> </span>
                        <img src="img/icones/vento.png"
                             width="100"/>
                    </p>                     
                </div>                                 
            </div>
         </div>
        
        <div class="row">
            
            <div class="col-md-12">
                
                <div class="jumbotron">
                    <h1>Amanhacer</h1>
                    
                    <p>
                       <span id="amanhacer"> </span>
                        <img src="img/icones/sunrise.png"
                             width="100"/>
                    </p>                     
                </div>                                 
            </div>
         </div>
        
        <div class="row">
            
            <div class="col-md-12">
                
                <div class="jumbotron">
                    <h1>Por do sol</h1>
                    
                    <p>
                       <span id="porDoSol"> </span>
                        <img src="img/icones/sunset.png"
                             width="100"/>
                    </p>                     
                </div>                                 
            </div>
         </div>
        
        
        
             
    </body>
</html>


