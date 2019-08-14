<html>

<head>
    <title>Minhas Figurinha</title>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
    <script src="js/html2canvas.js"></script>
    <script src="js/jspdf.min.js"></script>
    <script src="js/kendo.all.min.js"></script>
    <script src="js/angular.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <script>$('.draggable').draggable();</script>
</head>

<body>
    <div ng-app="">
        <div class="app">

            

            <!-- <h2>Minha Figurinha</h2> -->
            <div class="middleBar">
                <div class="figurinha1 figu">
                    <div class="figurinha__drag draggable">
                        <img class="figurinha__foto" src="imgs/avatar.jpg" style="width:{{ figSize }}%; transform:rotate({{figRoda/4}}deg);"/>
                        <!-- <img class="figurinha__foto" src="imgs/avatar.jpg" ng-src="{{ uploadme1.src }}" style="width:{{ figSize }}%; transform:rotate({{figRoda/4}}deg);"/> -->
                    </div>
                    <div class="figurinha__mascara" style="background-image: url('figurinhas/figurinha_{{figTipo}}.png');"></div>
                    <span class="figurinha__data">{{ figData }}</span>
                    <span class="figurinha__nome">{{ figNome }}</span>
                    <span class="figurinha__dados">{{ figDados }}</span>
                </div>
            
                <!-- <label>Time:</label>
                <select ng-model="figTipo" id="tipo">
                    <option value="brasil">Brasil</option>
                    <option value="argentina">Argentina</option>
                    <option value="internacional" selected>Internacional</option>
                    <option value="gremio">Grêmio</option>
                </select>

                <label>Foto:</label>
                <input id="file" onchange='readURL(this)' type="file">

                <label>Tamanho:</label>
                <input type="range" ng-model="figSize" min="1" max="200" />

                <label>Rotação:</label>
                <input type="range" ng-model="figRoda" min="-100" max="100" /> -->

                <!-- <label>Horizontal:</label>
                <input type="range" ng-model="figHoriz" min="-200" max="200" />

                <label>Vertical:</label>
                <input type="range" ng-model="figVerti" min="-200" max="200" /> -->

                <!-- <label>Nome:</label>
                

                <!-- <label>Data:</label>
                <input type="text" ng-model="figData" value="27/11/1986"> -->

                <!-- <label>Time - Cidade:</label>
                <input type="text" ng-model="figDados" value="Inter - Porto Alegre RS"> -->

                <!-- <label>&nbsp;</label> -->
                
                <!-- <div class="col-md-12">
                    <input id="btn-Preview-Image" type="button" value="PNG" />
                </div> -->
                
                
                <!-- <input id="save_image_locally" type="button" value="Salvar Figurinha" />
                <a id="download"></> -->
                
                
                <!-- <div class="col-md-12">
                    <input id="pdfDown1" type="button" value="Gerar Figurinhas - PDF Tamanho A3" /> 
                </div> -->

            </div>
            
            <div class="bottomBar">
                <div class="bottomItem itemTeam"></div>
                <div class="bottomItem itemPhoto"></div>
                <div class="bottomItem itemRotate"></div>
                <div class="bottomItem itemSize"></div>
                <div class="bottomItem itemMove"></div>
                <div class="bottomItem itemText"></div>
            </div>

            <div class="topBar">
                <!-- <input id="save_image_locally" type="button" value="Salvar Figurinha" />
                <a id="download"></>  -->
            </div>
        
        </div>


        <div class="actions">
            <div class="action actTeam">
                <select ng-model="figTipo" id="tipo">
                    <option value="brasil">Brasil</option>
                    <option value="argentina">Argentina</option>
                    <option value="internacional" selected>Internacional</option>
                    <option value="gremio">Grêmio</option>
                </select>
            </div>
            <div class="action actText">
                <input id="nome" type="text" maxlength="16" style="text-transform:uppercase;" ng-model="figNome" placeholder="Nome" value="">
            </div>
            <div class="action actMove">
                <input type="range" ng-model="figHoriz" min="-200" max="200" />
                <input type="range" ng-model="figVerti" min="-200" max="200" />
            </div>
            <div class="action actSize">
                <input type="range" ng-model="figSize" min="50" max="200" value="20" />
            </div>
            <div class="action actRotate">
                <input type="range" ng-model="figRoda" min="-1200" max="1200" />
            </div>
            <div class="hiddenfile">
                <input id="file" onchange='readURL(this)' type="file">                
            </div>
        </div>

        <!-- <div class="figurinha1x1">
            <div class="figurinha2 figu">
                <div class="figurinha__drag draggable draggable_copy" >
                    <img class="figurinha__foto" src="imgs/avatar.jpg" style="width:{{ figSize }}%; transform:rotate({{figRoda/4}}deg);"/>
                </div>
                <div class="figurinha__mascara" style="background-image: url('figurinhas/figurinha_{{figTipo}}.png');"></></div>
                <span class="figurinha__data">{{ figData }}</span>
                <span class="figurinha__nome">{{ figNome }}</span>
                <span class="figurinha__dados">{{ figDados }}</span>
            </div>
        </div> -->

        
        
        <!-- <div class="a3">
            <p>
                Desenvolvido por Bruno Bozzetti<br>
                www.brunobozz.com<br>
                Instagram: @brunobozz<br>
                E-mail: brunobozz@gmail.com</p> -->
            <?php
                //for($i=1; $i<=32; $i++){
            ?>
            <!-- <div class="figurinha">
                    <div class="figurinha__drag draggable draggable_copy" >
                        <img class="figurinha__foto" src="avatar.jpg" style="width:{{ figSize }}%; transform:rotate({{figRoda/4}}deg);" />
                    </div>
                    <div class="figurinha__mascara" style="background-image: url('figurinhas/figurinha_{{figTipo}}.png');"></></div>
                    <span class="figurinha__data">{{ figData }}</span>
                    <span class="figurinha__nome">{{ figNome }}</span>
                    <span class="figurinha__dados">{{ figDados }}</span>
                </div> -->
            <?php
                //}
            ?>
        <!-- </div> -->
    </div>

    <script src="funcoes.js"></script>


</body>

</html>