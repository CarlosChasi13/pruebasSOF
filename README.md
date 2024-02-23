# _Gestor de Docencia Orientada al Conocimiento - GDOC_

---

## Requerimientos

| **Componente** | **Versión** |                                                         |
| -------------- | ----------- | ------------------------------------------------------- |
| php            | 8.2         | [Docs](https://www.php.net/)                            |
| Laravel        | 10.x        | [Docs](https://laravel.com/)                            |
| Livewire       | 3.x         | [Docs](https://livewire.laravel.com/docs)               |
| Jetstream      | 4.x         | [Docs](https://jetstream.laravel.com/installation.html) |
| Filament       | 3.x         | [Docs](https://filamentphp.com/docs)                    |

## Comandos necesarios

### Servidor

-   Inicializacion de servidor
    `php artisan server`

-   Migrar base de datos y cargar datos pre collectados
    `php artisan migrate --seed`

-   Optimizar proyecto
    `php artisan optimize`

-   Generar rutas de imagenes
    `php artisan storage:link`

-   Archivo de configuracion para crear modelos desde la base de datos
    `php artisan vendor:publish --tag=reliese-models`

-   Crear modelos a partir de la base de datos
    `php artisan code:models`

### Filament

-   Creacion de usuario
    `php artisan make:filament-user`

-   Filament Crear Pagina
    `php artisan make:filament-page <Nombre>`

-   Filament Crear Recurso para el modelo
    `php artisan make:filament-resource <Nombre del modelo> --generate`

-   Filament Icons Caching
    `php artisan icons:cache`

-   Filament Components Caching
    `php artisan filament:cache-components`

### API

* Generar controllador establecido para API
```php artisan make:controller <NombreController> --api```

### Dependencias de Node

-   Collectar dependencias de Node
    `npm run build`

## Contenido pendiente

-   [ ] Corregir Dashboard
-   [ ] Revisar Migraciones
-   [ ] Modelo Historico de docentes ?
-   [ ] Revisar todos los Edit de los modals.
-   [ ] NRC
    -   [ ] Corregir icono
    -   [ ] Agregar ComboBox
    -   [ ] Agregar Sugerencia por Area de Conocimiento
    -   [ ] Visualizar la concatenacion de caracteres del periodo academico actual
-   [ ] Asignatura
    -   [ ] Corregir icono
    -   [ ] Agregar ComboBox
    -   [ ] Agregar Sugerencia por Area de Conocimiento
    -   [ ] Visualizar nombres de areas de conocimiento
-   [ ] Usuario Actual
    -   [ ] Perfil
    -   [ ] Cambiar contraseña
    -   [ ] 2FA
-   [ ] Controlar Registro de Usuarios del sistema
-   [ ] CREAR API
    -   [ ] Docentes
    -   [ ] CVs
    -   [ ] Áreas de Conocimiento
    -   [ ] NRC de periodo academico actual
    -   [ ] Asignaturas
-   [ ] CREAR VISTAS PERSONALIZADAS
    -   [ ] Visualizar Docentes con su respectiva info
    -   [ ]
-   [ ] CREAR PDFs