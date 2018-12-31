# Proyecto : RESTfulAPI con LARAVEL / project : RESTfulAPI with LARAVEL

## *DESCRIPCIÓN DEL PROYECTO / PROJECT DESCRIPTION:*

Proyecto REST realizado con fines academicos y para quienes deseen aprender como hacer un CRUD basico con LARAVEL mediante REST.

*Project REST was made academic objectives and for who wants to learn how to implement CRUD in LARAVEL through REST.*

## Tecnologías usadas / technologies used:

- PHP 7.2
- Composer.
- Apache 2.
- LARAVEL 5.4
- MYSQL. 
- Docker
- JSON/XML.
- POSTMAN ( para probar funcionalidad del servicio / for try out functionality of services).

## Contenido del proyecto / Project content : 
- 2 Tablas en base de datos/  2 tables in database (Clientes,Transacciones).  
  - Ruta/Route:
    ~~~
      database/migrations/      create_Clientes_table.php     create_Transacciones_table.php
    ~~~
- 2 modelos / 2 models (Clientes , Transacciones).
  - Ruta/Route:
    ~~~
      App/Clientes.php    App/Transacciones.php
    ~~~
- 2 controladores / 2 controllers (ClientesController , TransaccionesController).
  - Ruta/Route:
    ~~~
      App/http/Controllers/ClientesController.php    App/http/Controllers/TransaccionesController.php
    ~~~
- Archivo de rutas  / File routes:
  ~~~
    routes/api.php
  ~~~
## Configurar IMAGEN DOCKER / Configure DOCKER IMAGE : 
 
 *(se da por hecho que tiene docker instalado)*
 En su terminal de comandos ubicarse Dentro de la carpeta del proyecto entonces a 
 ~~~
    ./laradock
  ~~~
  Dentro de la carpeta ejecutar el siguiente comando:
  
  `$ docker-compose up -d apache2 mysql workspace`
  
  Luego de cargar sus imagenes , ejecutar el siguiente comando en el mismo directorio :
  
  
  
  Si todo se concreto normalmente debío redireccionar el directorio de su terminal a :
  
  `$ var/www`
  
  Ahi ejecute los siguientes comando : 
  
  `$ composer install`
  
  `$ php artisan migrate`
  
  Debe haber migrado las tablas de manera exitosa , ya puede hacer uso de el API utilizando 
  
## NOTA/NOTE:
  Recuerde crear antes que todo su archivo .env donde colocara la información de su base de datos , así como támbien verificar que tiene composer instalado en el proyecto y támbien generar el key de su aplicacipon con:
  
  `$ php artisan key:generate`

## Como usar Cliente / how use Cliente: 

  - Servicio crear Cliente / Service Create Client : 
    - Metodo/methos:  **POST**
    - Ruta / Route :  http://yourlocalhost/api/clientes
    - formato / format : JSON
    - Atributos a enviar / Attributes send : "nombres","apellidos","email"
    - Retorna / Return : 
    ~~~
          {
            "nombres": "Teo Alejandro",
            "apellidos": "Gutierrez Parra",
            "email": "prueba@gmail.com",
            "updated_at": "2018-12-23 20:35:26",
            "created_at": "2018-12-23 20:35:26",
            "id": 1
          }
  
  - Servicio retornar Clientes / Service get Clients : 
    - Metodo/methos:  **GET**
    - Ruta / Route :  http://yourlocalhost/api/clientes
    - formato / format : JSON
    - Retorna / Return : 
        
               [
                  {
                      "id": 2,
                      "email": "rafael@gmail.com",
                      "nombres": "Rafael Enrique",
                      "apellidos": "Ortega Vega",
                      "created_at": "2018-12-22 23:52:12",
                      "updated_at": "2018-12-23 04:05:41"
                  },
                  {
                      "id": 3,
                      "email": "gabriel@gmail.com",
                      "nombres": "Gabriel Enrique",
                      "apellidos": "Ortega Colmenares",
                      "created_at": "2018-12-23 03:11:56",
                      "updated_at": "2018-12-23 03:11:56"
                  },
              ]
         
  - Servicio retorna Cliente por email / Service Create Client by email : 
    - Metodo/methos:  **GET**
    - Ruta / Route :  http://yourlocalhost/api/clientes/nombres/{email}
    - formato / format : JSON
    - Atributos a enviar / Attributes send : "email"
    - Retorna / Return : 
        ~~~
          {
            "nombres": "Teo Alejandro",
            "apellidos": "Gutierrez Parra",
          }
 - Servicio retorna Cliente por id / Service get Client by id : 
    - Metodo/methos:  **GET**
    - Ruta / Route :  http://yourlocalhost/api/clientes/{id}
    - formato / format : JSON
    - Atributos a enviar / Attributes send : "id"
    - Retorna / Return : 
      ~~~
        {
          "id": 3,
          "email": "gabriel@gmail.com",
          "nombres": "Gabriel Enrique",
          "apellidos": "Ortega Colmenares",
          "created_at": "2018-12-23 03:11:56",
          "updated_at": "2018-12-23 03:11:56"
        }
- Servicio editar Cliente por id / Service edit Client by id : 
  - Metodo/methos:  **POST**
  - Ruta / Route :  http://yourlocalhost/api/clientes/{id}
  - formato / format : JSON
  - Atributos a enviar / Attributes send : "id","nombres","apellidos","email"
  - Retorna / Return : 
      ~~~
        {
          "id": 3,
          "email": "luis@gmail.com",
          "nombres": "Luis Enrique",
          "apellidos": "Ortega Colmenares",
          "created_at": "2018-12-23 09:20:58",
          "updated_at": "2018-12-23 09:10:46"
        }
- Servicio eliminar Cliente por id / Service delete Cliente by id : 
  - Metodo/methos:  **GET**
  - Ruta / Route :  http://yourlocalhost/api/clientes/delete/{id}
  - formato / format : JSON
  - Atributos a enviar / Attributes send : "id"
  - Retorna / Return : 
      ~~~
        {
          "id": 3,
          "email": "luis@gmail.com",
          "nombres": "Luis Enrique",
          "apellidos": "Ortega Colmenares",
          "created_at": "2018-12-23 09:20:58",
          "updated_at": "2018-12-23 09:10:46"
        }
## Como usar servicio Transacciones / how use service Transacciones: 

  - Servicio crear Transacciones / Service Create Transacciones : 
    - Metodo/methos:  **POST**
    - Ruta / Route :  http://yourlocalhost/api/transacciones
    - formato / format : JSON
    - Atributos a enviar / Attributes send : "monto","fecha_compra","email"(email de cliente ya registrado)
    - Retorna / Return : 
       ~~~
          {
            "monto": "140",
            "fecha_compra": "1998-10-12",
            "cliente_id": 4,
            "updated_at": "2018-12-23 21:30:11",
            "created_at": "2018-12-23 21:30:11",
            "id": 6
          }
  
  - Servicio retornar Transacciones / Service get Transacciones : 
    - Metodo/methos:  **GET**
    - Ruta / Route :  http://yourlocalhost/api/transacciones
    - formato / format : JSON
    - Retorna / Return : 
          
            [
              {
                  "id": 1,
                  "monto": 120,
                  "fecha_compra": "1998-10-12",
                  "cliente_id": 2,
                  "created_at": "2018-12-23 02:54:16",
                  "updated_at": "2018-12-23 02:54:16"
              },
              {
                  "id": 2,
                  "monto": 330,
                  "fecha_compra": "2010-10-12",
                  "cliente_id": 3,
                  "created_at": "2018-12-23 03:27:54",
                  "updated_at": "2018-12-23 03:27:54"
              },
              {
                  "id": 3,
                  "monto": 984,
                  "fecha_compra": "2011-10-12",
                  "cliente_id": 3,
                  "created_at": "2018-12-23 03:28:06",
                  "updated_at": "2018-12-23 03:28:06"
              }
          ]
        
  - Servicio retorna Transacciones por email / Service Get Transacciones by email : 
    - Metodo/methos:  **GET**
    - Ruta / Route :  http://yourlocalhost/api/transacciones/{email}
    - formato / format : JSON
    - Atributos a enviar / Attributes send : "email"
    - Retorna / Return : 
        ~~~
          [
              {
                  "id": 2,
                  "monto": 330,
                  "fecha_compra": "2010-10-12",
                  "cliente_id": 3,
                  "created_at": "2018-12-23 03:27:54",
                  "updated_at": "2018-12-23 03:27:54"
              },
              {
                  "id": 3,
                  "monto": 984,
                  "fecha_compra": "2011-10-12",
                  "cliente_id": 3,
                  "created_at": "2018-12-23 03:28:06",
                  "updated_at": "2018-12-23 03:28:06"
              }
          
          ]

- Servicio editar Transacciones por id / Service edit Transacciones by id : 
  - Metodo/methos:  **POST**
  - Ruta / Route :  http://yourlocalhost/api/transacciones/{id}
  - formato / format : JSON
  - Atributos a enviar / Attributes send : "id","monto","fecha_compra","email"
  - Retorna / Return : 
      ~~~
            {
                  "id": 2,
                  "monto": 750,
                  "fecha_compra": "2015-02-15",
                  "cliente_id": 3,
                  "created_at": "2019-10-02 03:27:54",
                  "updated_at": "2020-04-23 07:15:20"
              },
- Servicio eliminar Cliente por id / Service delete Client by id : 
  - Metodo/methos:  **GET**
  - Ruta / Route :  http://yourlocalhost/api/transacciones/delete/{id}
  - formato / format : JSON
  - Atributos a enviar / Attributes send : "id"
  - Retorna / Return : 
      ~~~
        {
          "id": 2,
          "monto": 750,
          "fecha_compra": "2015-02-15",
          "cliente_id": 3,
          "created_at": "2019-10-02 03:27:54",
          "updated_at": "2020-04-23 07:15:20"
          }

