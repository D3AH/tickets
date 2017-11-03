# Tickets (OTRS) 
Proyecto de Laravel 5.5 con OTRS. 

Antes de todo. 
--------------
Pagina web para integrar OTRS con LDAP. Logrando:
1. Iniciar sesion con LDAP. 
2. Crear un tickets desde esa sesion.


###### Nota: Esta fase del proyecto [BETA] solo espera crear ticktes. En un futuro recibir todo las soporte desde la pagina.

### Notas para la instalacion.

- Como primer caso nos puede ser más útil utilizar la imagen Vagrant que nos ofrece Laravel. [Laravel Homestead](https://www.google.com "Google's Homepage")

- Revisar primero que se cumplan todos los requerimientos de php7. Estas se indican en los requirimientos de la documentacion OFICIAL. `php -m`

- En la instalacion nos ofrecen dos opciones **Via Laravel Installer** o **Via Composer Create-Project**. 
Se recomienda *Via Laravel Installer*. Ya que es mucho mas sencillo de actualizar a nuevas versiones.

- Luego de crear el proyecto sin importar la via. Es necesario ajustar las configuracion de Apache2. 
