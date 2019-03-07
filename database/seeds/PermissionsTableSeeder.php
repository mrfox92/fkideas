<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          =>   'Listar usuarios',
            'slug'          =>   'users.index',
            'description'   =>   'Listar todos los usuarios del sistema'
        ]);
        Permission::create([
            'name'          =>   'Ver detalle usuario',
            'slug'          =>   'users.show',
            'description'   =>   'Mostrar detalle de un usuario del sistema'
        ]);
        Permission::create([
            'name'          =>   'Editar usuario',
            'slug'          =>   'users.edit',
            'description'   =>   'Editar cualquier dato de un usuario del sistema'
        ]);
        Permission::create([
            'name'          =>   'Eliminar usuario',
            'slug'          =>   'users.destroy',
            'description'   =>   'Eliminar un usuario del sistema'
        ]);

        //Roles

        Permission::create([
            'name'          =>   'Listar roles',
            'slug'          =>   'roles.index',
            'description'   =>   'Listar todos los roles del sistema'
        ]);
        Permission::create([
            'name'          =>   'Mostrar role',
            'slug'          =>   'roles.show',
            'description'   =>   'Mostrar detalle de un role del sistema'
        ]);
        Permission::create([
            'name'          =>   'Editar role',
            'slug'          =>   'roles.edit',
            'description'   =>   'Editar cualquier dato de un role del sistema'
        ]);

        Permission::create([
            'name'          =>   'Crear role',
            'slug'          =>   'roles.create',
            'description'   =>   'Crear un nuevo role en el sistema'
        ]);
        Permission::create([
            'name'          =>   'Eliminar role',
            'slug'          =>   'roles.destroy',
            'description'   =>   'Eliminar un role del sistema'
        ]);

        //info empresa

        Permission::create([
            'name'          =>   'Listar info',
            'slug'          =>   'info.index',
            'description'   =>   'Listar la información de contacto de la empresa'
        ]);
        Permission::create([
            'name'          =>   'Mostrar info',
            'slug'          =>   'info.show',
            'description'   =>   'Mostrar detalle de información de contacto de la empresa'
        ]);

        Permission::create([
            'name'          =>   'Editar info',
            'slug'          =>   'info.edit',
            'description'   =>   'Editar la información de contacto de la empresa'
        ]);

        //Mueblería retail

        Permission::create([
            'name'          =>   'Listar proyectos retail',
            'slug'          =>   'retail.index',
            'description'   =>   'Listar todos los Proyectos retail del sistema'
        ]);
        Permission::create([
            'name'          =>   'Mostrar proyecto retail',
            'slug'          =>   'retail.show',
            'description'   =>   'Mostrar detalle de un proyecto retail del sistema'
        ]);

        Permission::create([
            'name'          =>   'Crear Proyecto retail',
            'slug'          =>   'retail.create',
            'description'   =>   'Crear un nuevo proyecto retail en el sistema'
        ]);

        Permission::create([
            'name'          =>   'Editar proyecto retail',
            'slug'          =>   'retail.edit',
            'description'   =>   'Editar cualquier dato de un proyecto retail del sistema'
        ]);

        Permission::create([
            'name'          =>   'Eliminar proyecto retail',
            'slug'          =>   'retail.destroy',
            'description'   =>   'Eliminar un proyecto retail del sistema'
        ]);

        /* Imagenes muebleria retail */

        Permission::create([
            'name'          =>  'Mostrar imagenes muebleria retail',
            'slug'          =>  'retail.images.index',
            'description'   =>  'Mostrar imagenes de un proyecto de muebleria retail'
        ]);

        Permission::create([
            'name'          =>  'Añadir imagenes muebleria retail',
            'slug'          =>  'retail.images.create',
            'description'   =>  'Añadir una o varias imagenes a un proyecto de muebleria retail'
        ]);
        Permission::create([
            'name'          =>  'Editar imagenes muebleria retail',
            'slug'          =>  'retail.images.edit',
            'description'   =>  'Subir y reemplazar una imagen de un proyecto de muebleria retail'
        ]);

        Permission::create([
            'name'          =>  'Eliminar imagenes muebleria retail',
            'slug'          =>  'retail.images.destroy',
            'description'   =>  'Eliminar una o varias imagenes de un proyecto de muebleria retail'
        ]);

        //Aseo industrial
        Permission::create([
            'name'          =>   'Listar proyectos aseo industrial',
            'slug'          =>   'aseo_industrial.index',
            'description'   =>   'Listar todos los proyectos aseo industrial del sistema'
        ]);
        Permission::create([
            'name'          =>   'Mostrar detalle proyecto aseo industrial',
            'slug'          =>   'aseo_industrial.show',
            'description'   =>   'Mostrar el detalle de un proyectos aseo industrial del sistema'
        ]);
        Permission::create([
            'name'          =>   'Crear proyecto aseo industrial',
            'slug'          =>   'aseo_industrial.create',
            'description'   =>   'Crear un nuevo proyectos aseo industrial en el sistema'
        ]);
        Permission::create([
            'name'          =>   'Editar proyecto aseo industrial',
            'slug'          =>   'aseo_industrial.edit',
            'description'   =>   'Editar cualquier dato de un proyectos aseo industrial del sistema'
        ]);
        Permission::create([
            'name'          =>   'Eliminar proyecto aseo industrial',
            'slug'          =>   'aseo_industrial.destroy',
            'description'   =>   'Eliminar un proyectos aseo industrial del sistema'
        ]);

        //Remodelacion y construccion
        Permission::create([
            'name'          =>   'Listar proyectos remodelacion y construccion',
            'slug'          =>   'remodelacion_construccion.index',
            'description'   =>   'Listar todos los proyectos remodelación y construcción del sistema'
        ]);
        Permission::create([
            'name'          =>   'Mostrar detalle proyecto remodelacion y construccion',
            'slug'          =>   'remodelacion_construccion.show',
            'description'   =>   'Mostrar detalle de un proyectos de remodelación y construcción del sistema'
        ]);

        Permission::create([
            'name'          =>   'Crear proyecto remodelacion y construccion',
            'slug'          =>   'remodelacion_construccion.create',
            'description'   =>   'Crear un nuevo proyectos de remodelación y construcción del sistema'
        ]);

        Permission::create([
            'name'          =>   'Editar proyecto remodelacion y construccion',
            'slug'          =>   'remodelacion_construccion.edit',
            'description'   =>   'Editar cualquier dato de un proyectos de remodelación y construcción del sistema'
        ]);

        Permission::create([
            'name'          =>   'Eliminar proyecto remodelacion y construccion',
            'slug'          =>   'remodelacion_construccion.destroy',
            'description'   =>   'Eliminar un proyectos de remodelación y construcción del sistema'
        ]);

        /* Imagenes remodelacion y construccion */

        Permission::create([
            'name'          =>  'Mostrar imagenes remodelacion y construccion',
            'slug'          =>  'remodelacion_construccion.images.index',
            'description'   =>  'Mostrar imagenes de un proyecto de muebleria remodelacion y construccion'
        ]);

        Permission::create([
            'name'          =>  'Añadir imagenes remodelacion y construccion',
            'slug'          =>  'remodelacion_construccion.images.create',
            'description'   =>  'Añadir una o varias imagenes a un proyecto de remodelacion y construccion'
        ]);
        Permission::create([
            'name'          =>  'Editar imagenes remodelacion y construccion',
            'slug'          =>  'remodelacion_construccion.images.edit',
            'description'   =>  'Subir y reemplazar una imagen de un proyecto de remodelacion y construccion'
        ]);

        Permission::create([
            'name'          =>  'Eliminar imagenes remodelacion y construccion',
            'slug'          =>  'remodelacion_construccion.images.destroy',
            'description'   =>  'Eliminar una o varias imagenes de un proyecto de remodelacion y construccion'
        ]);
        

    }
}
