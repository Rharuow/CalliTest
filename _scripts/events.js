    /* pagina 1 de configuração de teste */
    
    function makeGreen() {

        var inputTreinamento    =   document.getElementById("input_have_training").checked;
        
        var inputTreinamentoNo  =   document.getElementById("input_have_training_no").checked;
        
        if(inputTreinamento == true) {
            document.getElementById("label_have_training").className    =   "btn btn-success btn-lg";
        } else {
            document.getElementById("label_have_training").className    =   "btn btn-danger btn-lg";
        }
        
        if(inputTreinamentoNo == true) {
            document.getElementById("label_have_training_no").className    =   "btn btn-success btn-lg";
        } else {
            document.getElementById("label_have_training_no").className    =   "btn btn-danger btn-lg";
        }
        
    }

    /* Página de treinamento */

    function getTrys() {
        
        var numTry  =   document.getElementById("tre_qnt_tentativa").value;
        
        document.getElementById("tre_max_acertos").max  =   numTry;
        
    }

    /* Página de página 2 */

    function getTrysBateria() {
        
        var numBaterias =   document.getElementById("num_bateria").value;
        
        for(var i = 0; i < numBaterias; i++) {
        
            var numTrys     =   document.getElementsByClassName("input_num_tentativas")[i].value;

            document.getElementsByClassName("num_acertos")[i].max   =   numTrys;
            
        }
        
    }

    /* Página de configuração de teste selecionado */

    /* Variáveis globais para ativar o botão send */

    var globalNumParametrosTreinamentoForma = false;

    var globalNumParametrosTreinamentoCor   = false;

    var globalNumParametrosBateriaForma     = false;

    var globalNumParametrosBateriaCor       = false;

    var globalStatusTreinamento             = document.getElementById("status_treinamento").value;

    /* Função para ativar o botão send */

    function active(tipoTeste, statusTreinamento) {


    }

    /* Treinamento */

    function selectedFormsTreinamento() {
        
        var formaTreinamento          =     0;
        
        var inputFormaQuadrado        =   document.getElementById("input_forma_quadrado_treinamento").checked;
        
        var inputFormaLosango         =   document.getElementById("input_forma_losango_treinamento").checked;
        
        var inputFormaTrianguloUp     =   document.getElementById("input_forma_trianguloup_treinamento").checked;
        
        var inputFormaCirculo         =   document.getElementById("input_forma_circulo_treinamento").checked;
        
        var inputFormaTrapezio        =   document.getElementById("input_forma_trapezio_treinamento").checked;
        
        var inputFormaTrianguloDown   =   document.getElementById("input_forma_triangulodown_treinamento").checked;
        
        var inputFormaTrianguloLeft   =   document.getElementById("input_forma_trianguloleft_treinamento").checked;
        
        var inputFormaTrianguloRight  =   document.getElementById("input_forma_trianguloright_treinamento").checked;
        
        var inputFormaRetangulo       =   document.getElementById("input_forma_retangulo_treinamento").checked;
        
        var inputFormaEstrela         =   document.getElementById("input_forma_estrela_treinamento").checked;
        
        var inputFormaEstrela2        =   document.getElementById("input_forma_estrela2_treinamento").checked;
        
        var inputFormaCruz            =   document.getElementById("input_forma_cruz_treinamento").checked;
        
        var numFormasTreinamento      =   document.getElementById("num_formas_treinamento");
        
        var outputNumFormasTreinamento=   document.getElementById("qnt_form_treinamento");
        
        if(inputFormaQuadrado == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            outputNumFormasTreinamento.innerHTML    =   numFormasTreinamento.value;
            
            document.getElementById("label_quadrado").style.color =   "#00ff00";    
            
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            outputNumFormasTreinamento.innerHTML    =   numFormasTreinamento.value;
            
            document.getElementById("label_quadrado").style.color =   "white";
        }
        
        if(inputFormaLosango == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_losango").style.color =   "#00ff00";    
            
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_losango").style.color =   "white";
        }
        
        if(inputFormaTrianguloUp == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_triangle_up").style =   "border-bottom: 100px solid #00ff00";    
            
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_triangle_up").style =   "border-bottom: 100px solid #fff";
        }
        
        if(inputFormaCirculo == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_circle").style.backgroundColor =   "#00ff00";    
            
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_circle").style.background =   "#fff";
        }
        
        if(inputFormaTrapezio == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_trapezoid").style =   "border-bottom: 75px solid #00ff00";    
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_trapezoid").style =   "border-bottom: 75px solid #fff";
        }
        
        if(inputFormaTrianguloDown == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_triangle_down").style =   "border-top: 100px solid #00ff00";    
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_triangle_down").style =   "border-top: 100px solid #fff";
        }
        
        if(inputFormaTrianguloLeft == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_triangle_left").style =   "border-right: 100px solid #00ff00";    
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_triangle_left").style =   "border-right: 100px solid #fff";
        }
        
        if(inputFormaTrianguloRight == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_triangle_right").style =   "border-left: 100px solid #00ff00";    
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_triangle_right").style =   "border-left: 100px solid #fff";
        }
        
        if(inputFormaRetangulo == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_rectangle").style.backgroundColor =   "#00ff00";    
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_rectangle").style.backgroundColor =   "#fff";
        }
        
        if(inputFormaEstrela == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_estrela").style.color =   "#00ff00";    
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_estrela").style.color =   "#fff";
        }
        
        if(inputFormaEstrela2 == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_estrela2").style.color =   "#00ff00";    
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_estrela2").style.color =   "#fff";
        }
        
        if(inputFormaCruz == true) {
            
            formaTreinamento ++;
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_cruz").style.color =   "#00ff00";    
        } else {
            
            numFormasTreinamento.value    =   formaTreinamento;
        
            document.getElementById("label_cruz").style.color =   "#fff";
        }
        
        outputNumFormasTreinamento.innerHTML    =   numFormasTreinamento.value;
        
        if(numFormasTreinamento.value < 3) {
            
            globalNumParametrosTreinamentoForma =   false;
            
        } else {
            
            globalNumParametrosTreinamentoForma =   true;
            
        }
     
        var treinamentoTipo     =       document.getElementById("tipoTreinamento").value;
        
        active(treinamentoTipo, globalStatusTreinamento);
        
    }

    function CoresTreinamento() {
       
        var input_color_red_black_treinamento    =   document.getElementById("input_color_red_black_treinamento").checked;
        
        var input_color_orange_black_treinamento    =   document.getElementById("input_color_orange_black_treinamento").checked;
        
        var input_color_yellow_black_treinamento    =   document.getElementById("input_color_yellow_black_treinamento").checked;
        
        var input_color_green_black_treinamento    =   document.getElementById("input_color_green_black_treinamento").checked;
        
        var input_color_blue_black_treinamento    =   document.getElementById("input_color_blue_black_treinamento").checked;
        
        var input_color_purple_black_treinamento    =   document.getElementById("input_color_purple_black_treinamento").checked;
        
        var input_color_red_treinamento    =   document.getElementById("input_color_red_treinamento").checked;
        
        var input_color_orange_treinamento    =   document.getElementById("input_color_orange_treinamento").checked;
        
        var input_color_yellow_treinamento    =   document.getElementById("input_color_yellow_treinamento").checked;
        
        var input_color_green_treinamento    =   document.getElementById("input_color_green_treinamento").checked;
        
        var input_color_blue_treinamento    =   document.getElementById("input_color_blue_treinamento").checked;
        
        var input_color_purple_treinamento    =   document.getElementById("input_color_purple_treinamento").checked;
        
        var input_color_red_light_treinamento    =   document.getElementById("input_color_red_light_treinamento").checked;
        
        var input_color_orange_light_treinamento    =   document.getElementById("input_color_orange_light_treinamento").checked;
        
        var input_color_yellow_light_treinamento    =   document.getElementById("input_color_yellow_light_treinamento").checked;
        
        var input_color_green_light_treinamento    =   document.getElementById("input_color_green_light_treinamento").checked;
        
        var input_color_blue_light_treinamento    =   document.getElementById("input_color_blue_light_treinamento").checked;
        
        var input_color_purple_light_treinamento    =   document.getElementById("input_color_purple_light_treinamento").checked;
        
        var input_num_cores                         =   document.getElementById("num_cores_treinamento");
        
        var output_num_cores                        =   document.getElementById("qnt_cores_treinamento");
        
        var cont                                    =   0;
        
        if(input_color_red_black_treinamento == true) {
            
            var label_red_black_treinamento =   document.getElementById("label_red_black_treinamento");
            
            label_red_black_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_red_black_treinamento =   document.getElementById("label_red_black_treinamento");
            
            label_red_black_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_orange_black_treinamento == true) {
            
            var label_orange_black_treinamento =   document.getElementById("label_orange_black_treinamento");
            
            label_orange_black_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_orange_black_treinamento =   document.getElementById("label_orange_black_treinamento");
            
            label_orange_black_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_yellow_black_treinamento == true) {
            
            var label_yellow_black_treinamento =   document.getElementById("label_yellow_black_treinamento");
            
            label_yellow_black_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_yellow_black_treinamento =   document.getElementById("label_yellow_black_treinamento");
            
            label_yellow_black_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_green_black_treinamento == true) {
            
            var label_green_black_treinamento =   document.getElementById("label_green_black_treinamento");
            
            label_green_black_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_green_black_treinamento =   document.getElementById("label_green_black_treinamento");
            
            label_green_black_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_blue_black_treinamento == true) {
            
            var label_blue_black_treinamento =   document.getElementById("label_blue_black_treinamento");
            
            label_blue_black_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_blue_black_treinamento =   document.getElementById("label_blue_black_treinamento");
            
            label_blue_black_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_purple_black_treinamento == true) {
            
            var label_purple_black_treinamento =   document.getElementById("label_purple_black_treinamento");
            
            label_purple_black_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_purple_black_treinamento =   document.getElementById("label_purple_black_treinamento");
            
            label_purple_black_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_red_treinamento == true) {
            
            var label_red_treinamento =   document.getElementById("label_red_treinamento");
            
            label_red_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_red_treinamento =   document.getElementById("label_red_treinamento");
            
            label_red_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_orange_treinamento == true) {
            
            var label_orange_treinamento =   document.getElementById("label_orange_treinamento");
            
            label_orange_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_orange_treinamento =   document.getElementById("label_orange_treinamento");
            
            label_orange_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_yellow_treinamento == true) {
            
            var label_yellow_treinamento =   document.getElementById("label_yellow_treinamento");
            
            label_yellow_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_yellow_treinamento =   document.getElementById("label_yellow_treinamento");
            
            label_yellow_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_green_treinamento == true) {
            
            var label_green_treinamento =   document.getElementById("label_green_treinamento");
            
            label_green_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_green_treinamento =   document.getElementById("label_green_treinamento");
            
            label_green_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_blue_treinamento == true) {
            
            var label_blue_treinamento =   document.getElementById("label_blue_treinamento");
            
            label_blue_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_blue_treinamento =   document.getElementById("label_blue_treinamento");
            
            label_blue_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_purple_treinamento == true) {
            
            var label_purple_treinamento =   document.getElementById("label_purple_treinamento");
            
            label_purple_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_purple_treinamento =   document.getElementById("label_purple_treinamento");
            
            label_purple_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_red_light_treinamento == true) {
            
            var label_red_light_treinamento =   document.getElementById("label_red_light_treinamento");
            
            label_red_light_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_red_light_treinamento =   document.getElementById("label_red_light_treinamento");
            
            label_red_light_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_orange_light_treinamento == true) {
            
            var label_orange_light_treinamento =   document.getElementById("label_orange_light_treinamento");
            
            label_orange_light_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_orange_light_treinamento =   document.getElementById("label_orange_light_treinamento");
            
            label_orange_light_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_yellow_light_treinamento == true) {
            
            var label_yellow_light_treinamento =   document.getElementById("label_yellow_light_treinamento");
            
            label_yellow_light_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_yellow_light_treinamento =   document.getElementById("label_yellow_light_treinamento");
            
            label_yellow_light_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_green_light_treinamento == true) {
            
            var label_green_light_treinamento =   document.getElementById("label_green_light_treinamento");
            
            label_green_light_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_green_light_treinamento =   document.getElementById("label_green_light_treinamento");
            
            label_green_light_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_blue_light_treinamento == true) {
            
            var label_blue_light_treinamento =   document.getElementById("label_blue_light_treinamento");
            
            label_blue_light_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_blue_light_treinamento =   document.getElementById("label_blue_light_treinamento");
            
            label_blue_light_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_color_purple_light_treinamento == true) {
            
            var label_purple_light_treinamento =   document.getElementById("label_purple_light_treinamento");
            
            label_purple_light_treinamento.className   =   "btn fas fa-check";
            
            cont++;
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        } else {
            
            var label_purple_light_treinamento =   document.getElementById("label_purple_light_treinamento");
            
            label_purple_light_treinamento.className   =   "btn";
            
            input_num_cores.value     =       cont;
            
            output_num_cores.innerHTML=       input_num_cores.value;
            
        }
        
        if(input_num_cores.value < 3) {
            
            globalNumParametrosTreinamentoCor = false;
            
        } else {
            
            globalNumParametrosTreinamentoCor = true;
            
        }
        
        var treinamentoTipo     =       document.getElementById("tipoTreinamento").value;
        
        active(treinamentoTipo, globalStatusTreinamento);
        
    }

    /* Bateria */

    function selectedFormsBateria() {
        
        var input_forma_quadrado_bateria         =   document.getElementsByClassName("input_forma_quadrado_bateria");
        
        var input_forma_losango_bateria          =   document.getElementsByClassName("input_forma_losango_bateria");
        
        var input_forma_trianguloup_bateria      =   document.getElementsByClassName("input_forma_trianguloup_bateria");
        
        var input_forma_circulo_bateria          =   document.getElementsByClassName("input_forma_circulo_bateria");
        
        var input_forma_trapezio_bateria         =   document.getElementsByClassName("input_forma_trapezio_bateria");
        
        var input_forma_triangulodown_bateria    =   document.getElementsByClassName("input_forma_triangulodown_bateria");
        
        var input_forma_trianguloleft_bateria    =   document.getElementsByClassName("input_forma_trianguloleft_bateria");
        
        var input_forma_trianguloright_bateria   =   document.getElementsByClassName("input_forma_trianguloright_bateria");
        
        var input_forma_retangulo_bateria        =   document.getElementsByClassName("input_forma_retangulo_bateria");
        
        var input_forma_estrela_bateria          =   document.getElementsByClassName("input_forma_estrela_bateria");
        
        var input_forma_estrela2_bateria         =   document.getElementsByClassName("input_forma_estrela2_bateria");
        
        var input_forma_cruz_bateria             =   document.getElementsByClassName("input_forma_cruz_bateria");
        
        var input_num_formas_bateria             =   document.getElementsByClassName("num_formas_bateria");
    
        var output_num_formas_bateria            =   document.getElementsByClassName("output_qnt_bateria");
        
        var formaBateria                         =   Array();
        
        var bateriaValidade                      =   0;
                
        for(var i = 0; i < input_forma_quadrado_bateria.length; i++) {
        
            formaBateria[i]=0;
            
            if(input_forma_quadrado_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];   
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_quadrado_bateria  =   document.getElementsByClassName("label_quadrado_bateria");
                
                label_quadrado_bateria[i].style.color   =   "#00ff00";
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_quadrado_bateria  =   document.getElementsByClassName("label_quadrado_bateria");
                
                label_quadrado_bateria[i].style.color   =   "white";
                
            }
            
            if(input_forma_losango_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_losango_bateria  =   document.getElementsByClassName("label_losango_bateria");
                
                label_losango_bateria[i].style.color   =   "#00ff00";
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_losango_bateria  =   document.getElementsByClassName("label_losango_bateria");
                
                label_losango_bateria[i].style.color   =   "white";
                
            }
            
            if(input_forma_trianguloup_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_triangle_up_bateria  =   document.getElementsByClassName("label_triangle_up_bateria");
                
                label_triangle_up_bateria[i].style =   "border-bottom: 100px solid #00ff00";
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_triangle_up_bateria  =   document.getElementsByClassName("label_triangle_up_bateria");
                
                label_triangle_up_bateria[i].style =   "border-bottom: 100px solid #fff";
                
            }
            
            if(input_forma_circulo_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_circle_bateria  =   document.getElementsByClassName("label_circle_bateria");
                
                label_circle_bateria[i].style.backgroundColor   =   "#00ff00";
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_circle_bateria  =   document.getElementsByClassName("label_circle_bateria");
                
                label_circle_bateria[i].style.backgroundColor   =   "white";
                
            }
            
            if(input_forma_trapezio_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_trapezoid_bateria  =   document.getElementsByClassName("label_trapezoid_bateria");
                
                label_trapezoid_bateria[i].style    =   "border-bottom: 75px solid #00ff00";    
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_trapezoid_bateria  =   document.getElementsByClassName("label_trapezoid_bateria");
                
                label_trapezoid_bateria[i].style   =    "border-bottom: 75px solid #fff";    
                
            }
            
            if(input_forma_triangulodown_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_triangle_down_bateria  =   document.getElementsByClassName("label_triangle_down_bateria");
                
                label_triangle_down_bateria[i].style =   "border-top: 100px solid #00ff00";     
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_triangle_down_bateria  =   document.getElementsByClassName("label_triangle_down_bateria");
                
                label_triangle_down_bateria[i].style =   "border-top: 100px solid #fff";    
                
            }
            
            if(input_forma_trianguloleft_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_triangle_left_bateria  =   document.getElementsByClassName("label_triangle_left_bateria");
                
                label_triangle_left_bateria[i].style =   "border-right: 100px solid #00ff00";     
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_triangle_left_bateria  =   document.getElementsByClassName("label_triangle_left_bateria");
                
                label_triangle_left_bateria[i].style =   "border-right: 100px solid #fff";    
                
            }
            
            if(input_forma_trianguloright_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_triangle_right_bateria  =   document.getElementsByClassName("label_triangle_right_bateria");
                
                label_triangle_right_bateria[i].style =   "border-left: 100px solid #00ff00";    
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_triangle_right_bateria  =   document.getElementsByClassName("label_triangle_right_bateria");
                
                label_triangle_right_bateria[i].style =   "border-left: 100px solid #fff";    
                
            }
            
            if(input_forma_retangulo_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_rectangle_bateria  =   document.getElementsByClassName("label_rectangle_bateria");
                
                label_rectangle_bateria[i].style.backgroundColor =   "#00ff00";
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_rectangle_bateria  =   document.getElementsByClassName("label_rectangle_bateria");
                
                label_rectangle_bateria[i].style.backgroundColor =   "#fff";    
                
            }
            
            if(input_forma_estrela_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_estrela_bateria  =   document.getElementsByClassName("label_estrela_bateria");
                
                label_estrela_bateria[i].style.color   =   "#00ff00";
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_estrela_bateria  =   document.getElementsByClassName("label_estrela_bateria");
                
                label_estrela_bateria[i].style.color   =   "white";
                
            }
            
            if(input_forma_estrela2_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_estrela2_bateria  =   document.getElementsByClassName("label_estrela2_bateria");
                
                label_estrela2_bateria[i].style.color   =   "#00ff00";
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_estrela2_bateria  =   document.getElementsByClassName("label_estrela2_bateria");
                
                label_estrela2_bateria[i].style.color   =   "white";
                
            }
            
            if(input_forma_cruz_bateria[i].checked == true) {
        
                formaBateria[i]++;
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_cruz_bateria  =   document.getElementsByClassName("label_cruz_bateria");
                
                label_cruz_bateria[i].style.color   =   "#00ff00";
                
            } else {
                
                input_num_formas_bateria[i].value =   formaBateria[i];
                
                output_num_formas_bateria[i].innerHTML  =   input_num_formas_bateria[i].value;
                
                var label_cruz_bateria  =   document.getElementsByClassName("label_cruz_bateria");
                
                label_cruz_bateria[i].style.color   =   "white";
                
            }
        
            if(input_num_formas_bateria[i].value >= 3) {
                
                bateriaValidade++;
                
            } else {
                
                bateriaValidade = bateriaValidade;
                
            }
        
            if (bateriaValidade == input_forma_circulo_bateria.length) {

                globalNumParametrosBateriaForma =   true;

            } else {

                globalNumParametrosBateriaForma =   false;

            }

            var bateriaTipo     =       document.getElementsByClassName("tipoTreinamento");

            active(bateriaTipo[i].value, globalStatusTreinamento);

        }
        
        
    }

    function CoresBateria() {
        
        var input_color_red_black_bateria           =   document.getElementsByClassName("input_color_red_black_bateria");
        
        var input_color_orange_black_bateria        =   document.getElementsByClassName("input_color_orange_black_bateria");
        
        var input_color_yellow_black_bateria        =   document.getElementsByClassName("input_color_yellow_black_bateria");
        
        var input_color_green_black_bateria         =   document.getElementsByClassName("input_color_green_black_bateria");
        
        var input_color_blue_black_bateria          =   document.getElementsByClassName("input_color_blue_black_bateria");
        
        var input_color_purple_black_bateria        =   document.getElementsByClassName("input_color_purple_black_bateria");
        
        var input_color_red_bateria                 =   document.getElementsByClassName("input_color_red_bateria");
        
        var input_color_orange_bateria              =   document.getElementsByClassName("input_color_orange_bateria");
        
        var input_color_yellow_bateria              =   document.getElementsByClassName("input_color_yellow_bateria");
        
        var input_color_green_bateria               =   document.getElementsByClassName("input_color_green_bateria");
        
        var input_color_blue_bateria                =   document.getElementsByClassName("input_color_blue_bateria");
        
        var input_color_purple_bateria              =   document.getElementsByClassName("input_color_purple_bateria");
        
        var input_color_red_light_bateria           =   document.getElementsByClassName("input_color_red_light_bateria");
        
        var input_color_orange_light_bateria        =   document.getElementsByClassName("input_color_orange_light_bateria");
        
        var input_color_yellow_light_bateria        =   document.getElementsByClassName("input_color_yellow_light_bateria");
        
        var input_color_green_light_bateria         =   document.getElementsByClassName("input_color_green_light_bateria");
        
        var input_color_blue_light_bateria          =   document.getElementsByClassName("input_color_blue_light_bateria");
        
        var input_color_purple_light_bateria        =   document.getElementsByClassName("input_color_purple_light_bateria");
        
        var input_num_cores                         =   document.getElementsByClassName("num_cores_bateria");
        
        var output_num_cores                        =   document.getElementsByClassName("qnt_cores_bateria");
        
        var corBateria                              =   Array();    
         
        var bateriaValidade                         =   0;
        
        for (var i = 0; i < input_color_red_black_bateria.length; i++) {
        
            corBateria[i]=0;
        
        /*   Cores escuras   */    
            
        if(input_color_red_black_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_red_black               =       document.getElementsByClassName("label_red_black_bateria");
            
            label_red_black[i].className      =       "btn label_red_black_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_red_black               =       document.getElementsByClassName("label_red_black_bateria");
            
            label_red_black[i].className      =       "btn label_red_black_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_orange_black_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_orange_black               =       document.getElementsByClassName("label_orange_black_bateria");
            
            label_orange_black[i].className      =       "btn label_orange_black_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_orange_black               =       document.getElementsByClassName("label_orange_black_bateria");
            
            label_orange_black[i].className      =       "btn label_orange_black_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_yellow_black_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_yellow_black_bateria               =       document.getElementsByClassName("label_yellow_black_bateria");
            
            label_yellow_black_bateria[i].className      =       "btn label_yellow_black_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_yellow_black_bateria               =       document.getElementsByClassName("label_yellow_black_bateria");
            
            label_yellow_black_bateria[i].className      =       "btn label_yellow_black_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
        
        if(input_color_green_black_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_green_black_bateria               =       document.getElementsByClassName("label_green_black_bateria");
            
            label_green_black_bateria[i].className      =       "btn label_green_black_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_green_black_bateria               =       document.getElementsByClassName("label_green_black_bateria");
            
            label_green_black_bateria[i].className      =       "btn label_green_black_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_blue_black_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_blue_black_bateria               =       document.getElementsByClassName("label_blue_black_bateria");
            
            label_blue_black_bateria[i].className      =       "btn label_blue_black_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_blue_black_bateria               =       document.getElementsByClassName("label_blue_black_bateria");
            
            label_blue_black_bateria[i].className      =       "btn label_blue_black_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_purple_black_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_purple_black_bateria               =       document.getElementsByClassName("label_purple_black_bateria");
            
            label_purple_black_bateria[i].className      =       "btn label_purple_black_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_purple_black_bateria               =       document.getElementsByClassName("label_purple_black_bateria");
            
            label_purple_black_bateria[i].className      =       "btn label_purple_black_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        /* Cores padrões */
            
        if(input_color_red_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_red               =       document.getElementsByClassName("label_red_bateria");
            
            label_red[i].className      =       "btn label_red_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_red               =       document.getElementsByClassName("label_red_bateria");
            
            label_red[i].className      =       "btn label_red_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_orange_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_orange               =       document.getElementsByClassName("label_orange_bateria");
            
            label_orange[i].className      =       "btn label_orange_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_orange               =       document.getElementsByClassName("label_orange_bateria");
            
            label_orange[i].className      =       "btn label_orange_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_yellow_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_yellow_bateria               =       document.getElementsByClassName("label_yellow_bateria");
            
            label_yellow_bateria[i].className      =       "btn label_yellow_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_yellow_bateria               =       document.getElementsByClassName("label_yellow_bateria");
            
            label_yellow_bateria[i].className      =       "btn label_yellow_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
        
        if(input_color_green_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_green_bateria               =       document.getElementsByClassName("label_green_bateria");
            
            label_green_bateria[i].className      =       "btn label_green_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_green_bateria               =       document.getElementsByClassName("label_green_bateria");
            
            label_green_bateria[i].className      =       "btn label_green_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_blue_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_blue_bateria               =       document.getElementsByClassName("label_blue_bateria");
            
            label_blue_bateria[i].className      =       "btn label_blue_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_blue_bateria               =       document.getElementsByClassName("label_blue_bateria");
            
            label_blue_bateria[i].className      =       "btn label_blue_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_purple_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_purple_bateria               =       document.getElementsByClassName("label_purple_bateria");
            
            label_purple_bateria[i].className      =       "btn label_purple_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_purple_bateria               =       document.getElementsByClassName("label_purple_bateria");
            
            label_purple_bateria[i].className      =       "btn label_purple_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
           
        /* Cores Claras */
            
        if(input_color_red_light_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_red_light               =       document.getElementsByClassName("label_red_light_bateria");
            
            label_red_light[i].className      =       "btn label_red_light_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_red_light               =       document.getElementsByClassName("label_red_light_bateria");
            
            label_red_light[i].className      =       "btn label_red_light_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_orange_light_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_orange_light               =       document.getElementsByClassName("label_orange_light_bateria");
            
            label_orange_light[i].className      =       "btn label_orange_light_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_orange_light               =       document.getElementsByClassName("label_orange_light_bateria");
            
            label_orange_light[i].className      =       "btn label_orange_light_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_yellow_light_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_yellow_light_bateria               =       document.getElementsByClassName("label_yellow_light_bateria");
            
            label_yellow_light_bateria[i].className      =       "btn label_yellow_light_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_yellow_light_bateria               =       document.getElementsByClassName("label_yellow_light_bateria");
            
            label_yellow_light_bateria[i].className      =       "btn label_yellow_light_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
        
        if(input_color_green_light_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_green_light_bateria               =       document.getElementsByClassName("label_green_light_bateria");
            
            label_green_light_bateria[i].className      =       "btn label_green_light_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_green_light_bateria               =       document.getElementsByClassName("label_green_light_bateria");
            
            label_green_light_bateria[i].className      =       "btn label_green_light_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_blue_light_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_blue_light_bateria               =       document.getElementsByClassName("label_blue_light_bateria");
            
            label_blue_light_bateria[i].className      =       "btn label_blue_light_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_blue_light_bateria               =       document.getElementsByClassName("label_blue_light_bateria");
            
            label_blue_light_bateria[i].className      =       "btn label_blue_light_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
            
        if(input_color_purple_light_bateria[i].checked == true) {
            
            corBateria[i]++;
        
            input_num_cores[i].value = corBateria[i];
            
            var label_purple_light_bateria               =       document.getElementsByClassName("label_purple_light_bateria");
            
            label_purple_light_bateria[i].className      =       "btn label_purple_light_bateria fas fa-check";
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        } else {
            
            var label_purple_light_bateria               =       document.getElementsByClassName("label_purple_light_bateria");
            
            label_purple_light_bateria[i].className      =       "btn label_purple_light_bateria";
            
            input_num_cores[i].value = corBateria[i];
            
            output_num_cores[i].innerHTML     =       corBateria[i];
            
        }
 
        if(input_num_cores[i].value >= 3) {
            
            bateriaValidade++;
        
        } else {
            
            bateriaValidade = bateriaValidade;
            
        }
        
        if(bateriaValidade == input_color_blue_bateria.length) {
            
            globalNumParametrosBateriaCor = true;
            
        } else {
            
            globalNumParametrosBateriaCor = false;
            
        }    
            
        var bateriaTipo     =       document.getElementsByClassName("tipoTreinamento");

        active(bateriaTipo[i].value, globalStatusTreinamento);    
            
        }
        
    }
      