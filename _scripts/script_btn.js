$(document).ready(function(){
    $("button.btn_signup").click(function(){
        $(".main").animate({top:"80px"}, "slow");
        $(".signup").toggle(1000);
        $(".login").hide(1000);
        $("span").hide(800);
        $("div.signup").animate({top: "150px"}, "slow");
    });
    
    $("button.btn_login").click(function(){
        $(".main").animate({top:"80px"}, "slow");
        $(".login").toggle(1000);
        $(".signup").hide(1000);
        $("span").hide(800);
        $("div.login").animate({top: "150px"}, "slow");
    });

/*  after login  */
    
    $("button#botao_mostrar_animais").click(function(){
        $("div#lista_animais").toggle(800);
        $("div#cadastrar_animais").hide(800);
    });
    
    $("button#botao_cadastrar_animal").click(function(){
        $("div#cadastrar_animais").toggle(800);
        $("div#lista_animais").hide(800);
    });
    
    $("button#btn_info_animal").click(function(){
        $("div#info").toggle(800);
        $("div#historic").hide(800);
        $("div#test").hide(800);
    });
    
    $("button#btn_historic_animal").click(function(){
        $("div#historic").toggle(800);
        $("div#info").hide(800);
        $("div#test").hide(800);
    });
    
    $("button#btn_test_animal").click(function(){
        $("div#test").toggle(800);
        $("div#info").hide(800);
        $("div#historic").hide(800);
    });
    
});