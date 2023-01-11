# Skynet-1.0

Template para proyectos Frontend en la Agencia Lima Digital.

# Tecnologías a utilizar

1. HTML5.
2. CSS3.
3. JavaScript.
4. PHP.

# Estructura

1. components/: Se recomienda que la carpeta contenga estos componentes en su mayoría:

- head.php
- nav.php
- redes-sociales.php (si se requiere)
- footer.php

2. public/:

- css: Los archivos dentro de la carpeta son generados automáticamente, no pertenece al ambiente de desarollo.
  - vendors: Código css que se reutiliza en la mayoria de proyectos.
- data: Fuente de los arrays asociativos que alimentan a los foreach de las páginas php.
- img
- js: Tiene el código de javascript que se utiliza a lo largo del proyecto, como librerías externas y/o minificadas.
- scss: Se almacen el código css que será compilado a css y se guardará en la carpeta css.
- videos
- webfonts (no eliminar): Carpeta que contiene las fuentes necesarias para los íconos de font-awesome.

3. views/: Todo el código html que se encuentra en las páginas php.

- home/home.php
- etc.

4. .gitignore(no eliminar): Código que es ignorado y no es subido al repositorio.

5. package.json: Contiene el nombre del proyecto, los scripts que se deben crear por cada página, y la libreria de tailwind.

- ¿Cómo agregar un script por página?
  - Se agrega un nombre entre comillas, y su valor es similar al valor del home, pero cambiando el inicio y el destino para la compilación de sass a css.
    Ejemplo:
    "home": "npx tailwindcss -c ./tailwind.config.js -i ./public/scss/home.css -o ./public/css/home.css --watch"

6. tailwind.config.js: Configuración para utilizar tailwind en el proyecto. NO SE DEBE ELIMINAR.

- Configuración y uso del tailwind.config.js

1. Crear la nueva fuente como el siguiente ejemplo: jost: ["Jost", "sans-serif"],

2. Crear los font-sizes dinámicos agregando la sgte nomenclatura "dynamic-100": "clamp(1.25rem, 0.2vw + 1.2rem, 1.563rem)",

3. Utilizar la nomenclatura para los gradientes: "gradient-100": "linear-gradient(90deg, rgba(174, 251, 126,.4) -38.89%, rgba(255, 41, 41,.4) 287.2%)",

4. Para imágenes, optar por el siguiente ejemplo:
   "[página]-[sección]-[numeración]": "valor",

- Ejemplo: "home-hero-100": "linear-gradient(180deg,rgba(109, 7, 7, 0) 45.62%, rgba(109, 7, 7, 0.8) 100%)",

5. Nomenclatura para colores:

"[nivel]-[numeración]" : "valor",

Ejemplo: "primary-100": "#FC4951",
