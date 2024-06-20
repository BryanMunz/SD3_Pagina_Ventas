<?php
const BASE_URL = "http://localhost/sutec3d.com/public_html";
//const BASE_URL = "https://www.sutec3d.com";
//const BASE_URL = "https://sutec3d.com";

//Zona horaria
date_default_timezone_set('America/Mexico_City');

//Datos de conexión a Base de Datos
const DB_HOST = "localhost";
const DB_NAME = "u585310020_SUTEC3D";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "utf8";

//Para envío de correo
const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

//Deliminadores decimal y millar Ej. 24,1989.00
const SPD = ",";
const SPM = ".";

//Simbolo de moneda
const SMONEY = "$";
const CURRENCY = "MXN";

//Api PayPal
//SANDBOX PAYPAL
//const URLPAYPAL = "https://api-m.sandbox.paypal.com";
//const IDCLIENTE = "";
//const SECRET = "";
//LIVE PAYPAL
const URLPAYPAL = "https://api-m.paypal.com";
const IDCLIENTE = "AW-MhGr4FC-_XCgIcIoK13x7C48t49RmyllnqSDjFGhhgU75zi3175BQqgulWrfV5vHzJFexNGl5YgeT";
const SECRET = "EJZ9ZhgYwzwJkV7cZvEQhozzvuPxuftNWRzeKIkQeauOSWeJDyi2Bula72JHaDVk3CQmdzlAxL96qidp";

//Datos envio de correo
const NOMBRE_REMITENTE = "SUTEC3D";
const EMAIL_REMITENTE = "admin@sutec3d.com";
const NOMBRE_EMPESA = "SUTEC3D";
const WEB_EMPRESA = "www.sutec3d.com";

const DESCRIPCION = "La mejor tienda en línea con artículos de electronica";
const SHAREDHASH = "SUTEC3D";

//Datos Empresa
const DIRECCION = "Avenida Universidad Nte #5 Secc. 1ra Zacatelco CP. 90740";
const TELEMPRESA = "+(52) 222 710 6510";
const WHATSAPP = "2227106510";
const EMAIL_EMPRESA = "sutec.st@gmail.com";
const EMAIL_PEDIDOS = "sutec.st@gmail.com";
const EMAIL_SUSCRIPCION = "sutec.st@gmail.com";
const EMAIL_CONTACTO = "sutec.st@gmail.com";
const CAT_SLIDER = "1,2";
const CAT_BANNER = "3,4,5,6,7,8,9";
const CAT_FOOTER = "1,2,3,4,5";

//Datos para Encriptar / Desencriptar
const KEY = 'abelosh';
const METHODENCRIPT = "AES-128-ECB";

//Envío
const COSTOENVIO = 149;
const ENVIOGRATIS = 0;
const IVA = 0.16;

//Módulos
const MDASHBOARD = 1;
const MUSUARIOS = 2;
const MCLIENTES = 3;
const MPRODUCTOS = 4;
const MPEDIDOS = 5;
const MCATEGORIAS = 6;
const MSUSCRIPTORES = 7;
const MDCONTACTOS = 8;
const MDPAGINAS = 9;

//Páginas
const PINICIO = 1;
const PTIENDA = 2;
const PCARRITO = 3;
const PNOSOTROS = 4;
const PCONTACTO = 5;
const PPREGUNTAS = 6;
const PTERMINOS = 7;
const PSUCURSALES = 8;
const PERROR = 9;

//Roles
const RADMINISTRADOR = 1;
const RSUPERVISOR = 2;
const RCLIENTES = 3;

const STATUS = array('Completo', 'Aprobado', 'Cancelado', 'Reembolsado', 'Pendiente', 'Entregado');

//Productos por página
const CANTPORDHOME = 9;
const PROPORPAGINA = 15;
const PROCATEGORIA = 15;
const PROBUSCAR = 15;

//REDES SOCIALES
const FACEBOOK = "https://www.facebook.com/sutec0403";
const INSTAGRAM = "https://www.instagram.com/sutec3d/";
