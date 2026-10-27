# PHP
##  Cómo iniciar el servidor

### En Windows 
1. Levanta el servidor: 
   ```bash
   php -S localhost:8000

### EN linux 
2. Levantar el servidor para flatpack:
    ```bash
    flatpak-spawn --host php -S localhost:8000

## Para visualizar en el buscador el resultado
3. Usamos la ruta base:
    ```bash
    http://localhost:8000/


# PHP

## Cómo instalar PHP

### En Windows
1. Descarga el archivo Zip **VS16 x64 Thread Safe** desde [windows.php.net/download/](https://windows.php.net/download/).
2. Descomprime el contenido en una carpeta en la raíz de tu disco duro, por ejemplo `C:\PHP`.
3. Busca "Variables de entorno" en el menú de inicio de Windows, edita la variable **Path** del sistema y añade la ruta `C:\PHP`.
4. Cierra y vuelve a abrir tu terminal en VS Code para que detecte el cambio.

### En Linux (Mint / Ubuntu)
1. Abre tu terminal y ejecuta los siguientes comandos para instalar la versión de consola:
   ```bash
   sudo apt update
   sudo apt install php-cli