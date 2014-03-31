var pagina;
pagina=$(document);
pagina.ready(inicializar);


/* FUNCION QUE INICIALIZA LAS OPERACIONES */


function inicializar()
{
/* OPCION HOME */

    var home;
    home=$("#home");
    home.click(menuhome);
    menuhome();
    $(".navegacion .menu li a#home").addClass("active");


/* OPCION CATALOGO */

    var catalogo;
    catalogo=$("#catalogo");
    catalogo.click(menucatalogo);


/* OPCION OFERTAS */

    var ofertas;
    ofertas=$("#ofertas");
    ofertas.click(menuofertas);


/* OPCION CONTACTO */

    var contacto;
    contacto=$("#contacto");
    contacto.click(menucontacto);


/* OPCION LOGIN */

    var login;
    login=$("#login");
    login.click(menulogin);
}

/* FUNCION QUE MUESTRA LA INTERFAZ GRAFICA CON HOME */


function menuhome()
{
    $(".logeo .menulogin li a").removeClass("active");
    $(".navegacion .menu li a").removeClass("active");
    $(this).addClass("active");
    seccionhome();
}


/* FUNCION QUE MUESTRA LA INTERFAZ GRAFICA CON CATALOGO */

function menucatalogo()
{
    $(".logeo .menulogin li a").removeClass("active");
    $(".navegacion .menu li a").removeClass("active");
    $(this).addClass("active");
    seccioncatalogo();
}


/* FUNCION QUE MUESTRA LA INTERFAZ GRAFICA CON OFERTAS */

function menuofertas()
{
    $(".logeo .menulogin li a").removeClass("active");
    $(".navegacion .menu li a").removeClass("active");
    $(this).addClass("active");
    seccionofertas();
}


/* FUNCION QUE MUESTRA LA INTERFAZ GRAFICA CON CONTACTO */

function menucontacto()
{
    $(".logeo .menulogin li a").removeClass("active");
    $(".navegacion .menu li a").removeClass("active");
    $(this).addClass("active");
    seccioncontacto();
}

function menulogin()
{
    $(".navegacion .menu li a").removeClass("active");
    $(".logeo .menulogin li a").removeClass("active");
    $(this).addClass("active");
}


function seccionhome()
{
    var codigoHTML ='ggggg';

    $(".contenido1").html(codigoHTML);
}

function seccioncatalogo()
{
    var codigoHTML = 'hhh';

    $(".contenido1").html(codigoHTML);
}

function seccionofertas()
{
    var codigoHTML = 'kkkk';

    $(".contenido1").html(codigoHTML);
}

function seccioncontacto()
{
    var codigoHTML = 'lllll';

    $(".contenido1").html(codigoHTML);
}



/*function seccionRegistrarse()
{
    var codigoHTML ='<div id="Registrarse">'+
                        '<form action="" method="post" id="registro">'+
                            '<input type="text" name="nombre" id="nombre" placeholder="nombre"/>'+
                            '</br></br>'+
                            '<input type="password" name="password" id="password" placeholder="Contraseña"/>'+
                            '</br></br>'+
                            '<input type="submit" value="Registrarse" />'+
                            '</br></br>'+
                        '</form>'+
                    '</div>';
                     
    $(".contenido1").html(codigoHTML);
    $("#registro").submit(addusuario);
}*/

