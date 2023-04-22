## Laravel crud-web-and-api
Esta es una aplicación que permite agregar, editar y borrar tareas que se muestran como una lista de tareas pendientes.
Allí también puede indicar cuando la tarea se encuentra completada o finalizada.

También puede realizar estas funciones a través del webservice en rest:

    - Crear tarea (POST)
        url:      http://127.0.0.1:8000/api/tareas/        
        body:  {
                    "descripcion": "descripcion de la tarea"
                }

    - Editar tarea (PATCH)
        url:  http://127.0.0.1:8000/api/tareas/edit/$id_tarea
        body:  {
                    "descripcion": "descripcion de la tarea"
               }

    - Eliminar tarea (DELETE)
        url:  http://127.0.0.1:8000/api/tareas/$id_tarea

    - Modificar tarea (PATCH)
        url:      http://127.0.0.1:8000/api/tareas/estado/$id_tarea     
        body:  {
                    "descripcion": "descripcion de la tarea"
                }


## Instalación

git clone https://github.com/marlenyteles/laravel-crud-web-and-api tareas

cd tareas

composer install (Para mayor información [link](https://getcomposer.org/download/))

php artisan migrate

php artisan serve

Para mayor información sobre laravel puede encontrarla en el siguiente [link](https://laravel.com/docs) .

## Licencia

El framework Laravel es open-sourced software licensed bajo [MIT license](https://opensource.org/licenses/MIT).
