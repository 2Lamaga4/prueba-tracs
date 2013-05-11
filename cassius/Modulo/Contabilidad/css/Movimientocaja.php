<?php
header('content-type:text/css');
 
echo  <<<FINCSS
#contenedor { 
    margin: -47px auto;
    width: 100%;  /* Ancho del contenedor */
box-sizing: border-box;
-moz-box-sizing: border-box;
}

#contenedor input { 
height: 32px;
position: relative;
visibility: hidden;
}

#contenedor label { 
float: right;
cursor: pointer;
font-size: 15px;  /* Tamaño del texto de las pestañas */
line-height: 20px;
height: 20px;
padding: 0 5px;
display: block;
color: #fff;  /* Color del texto de las pestañas */
text-align: center;
border-radius: 2px 2px 0 0;
background: url(../images/fondo_btn.jpg); /* Fondo de las pestañas */
margin-right: 5px;
margin: 10px 1px;
margin-top: 785px;//posiscion de numeros
position: static;
}

#contenedor input:hover + label { 
background: rgba(0,0,255,0.2); /* Fondo de las pestañas al pasar el cursor por encima */
color: #000;  /* Color del texto de las pestañas al pasar el cursor por encima */
}

#contenedor input:checked + label { 
background: rgb(0, 255, 51); /* Fondo de las pestañas al presionar */
color: #444; /* Color de las pestañas al presionar */
z-index: 6;
line-height: 24px;
height: 20px;
position: relative;
top: 0px;
-webkit-transition: .1s;
-moz-transition: .1s;
-o-transition: .1s;
-ms-transition: .1s;
}

.content {
background: none; /* Fondo del contenido */
position: relative;
width: 100%;
height: 365px;  /* Alto del contenido */
padding-top:30px;
padding-left:14px;
z-index: 5;
border-radius: 0 5px 5px 5px;
}

.content div {
position: absolute;
z-index: -100;
opacity: 0;
transition: all linear 0.1s;
}
FINCSS;

for ($i=1; $i <=12; $i++) { 
echo  <<<FINCSS
#contenedor input.tab-selector-$i:checked ~ .content .content-$i, 
FINCSS;
}
echo  <<<FINCSS
#contenedor input.tab-selector-12:checked ~ .content .content-12
{ 
    z-index: 100;
    opacity: 1;
    width: 100%;
    height: 99.5%;
    overflow: auto;
    margin-top: -2.5%;
    margin-left: -2.3%;
-webkit-transition: all ease-out 0.2s 0.1s;
-moz-transition: all ease-out 0.2s 0.1s;
-o-transition: all ease-out 0.2s 0.1s;
-ms-transition: all ease-out 0.2s 0.1s;
}
#esta{
    position: absolute;
    top: 0;
    margin-top: 430px;
    margin-left: 5px;
    z-index:999
  }
  #line1{
    position: absolute;
    top: 0;
    margin-top: 774px;
  }
  #line2{
    position: absolute;
    top: 0;
    margin-top: 410px;
  }
FINCSS;
?>


