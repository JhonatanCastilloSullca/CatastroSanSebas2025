<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1=Role::create(['name'=> 'ADMINISTRADOR']);

        Permission::create(['name'=>'dashboard','description'=>'Ver Estadisticas'])->assignRole($role1);

        Permission::create(['name'=>'user.index','description'=>'Ver la lista de Usuarios'])->assignRole($role1);
        Permission::create(['name'=>'user.create','description'=>'Crear Usuarios'])->assignRole($role1);
        Permission::create(['name'=>'user.destroy','description'=>'Cambiar estado de Usuarios'])->assignRole($role1);
        Permission::create(['name'=>'user.show','description'=>'Mostrar Usuarios'])->assignRole($role1);
        Permission::create(['name'=>'user.edit','description'=>'Editar Usuarios'])->assignRole($role1);


        Permission::create(['name'=>'roles.index','description'=>'Ver la lista de Roles'])->assignRole($role1);
        Permission::create(['name'=>'roles.edit','description'=>'Editar Roles'])->assignRole($role1);
        Permission::create(['name'=>'roles.destroy','description'=>'Eliminar Roles'])->assignRole($role1);
        Permission::create(['name'=>'roles.create','description'=>'Crear Roles'])->assignRole($role1);


        Permission::create(['name'=>'manzana.index','description'=>'Ver la lista de Manzanas'])->assignRole($role1);                
        Permission::create(['name'=>'manzana.edit','description'=>'Editar datos de Manzanas'])->assignRole($role1);
        Permission::create(['name'=>'manzana.destroy','description'=>'Cambiar estado de Usuarios'])->assignRole($role1);
        Permission::create(['name'=>'manzana.create','description'=>'Crear Manzanas'])->assignRole($role1);
        


        Permission::create(['name'=>'sectore.index','description'=>'Ver la lista de Sectores'])->assignRole($role1);                
        Permission::create(['name'=>'sectore.edit','description'=>'Editar la lista de Sectores'])->assignRole($role1);                
        Permission::create(['name'=>'sectore.destroy','description'=>'Cambiar estado de Sectores'])->assignRole($role1);
        Permission::create(['name'=>'sectore.create','description'=>'Crear Sectores'])->assignRole($role1);



        Permission::create(['name'=>'haburbana.index','description'=>'Ver la lista de Habilitaciones Urbanas'])->assignRole($role1);
        Permission::create(['name'=>'haburbana.edit','description'=>'Editar datos de Habilitaciones Urbanas'])->assignRole($role1);
        Permission::create(['name'=>'haburbana.destroy','description'=>'Cambiar estado de Habilitaciones Urbanas'])->assignRole($role1);
        Permission::create(['name'=>'haburbana.create','description'=>'Crear Habilitaciones Urbanas'])->assignRole($role1);


        Permission::create(['name'=>'vias.index','description'=>'Ver la lista de Vias'])->assignRole($role1);
        Permission::create(['name'=>'vias.edit','description'=>'Editar datos de Vias'])->assignRole($role1);
        Permission::create(['name'=>'vias.destroy','description'=>'Cambiar estado de Vias'])->assignRole($role1);
        Permission::create(['name'=>'vias.create','description'=>'Crear Vias'])->assignRole($role1);
        
        


        Permission::create(['name'=>'notaria.index','description'=>'Ver Notaria'])->assignRole($role1);
        Permission::create(['name'=>'notaria.edit','description'=>'Editar datos de Notaria'])->assignRole($role1);
        Permission::create(['name'=>'notaria.destroy','description'=>'Cambiar estado de Notaria'])->assignRole($role1);
        Permission::create(['name'=>'notaria.create','description'=>'Crear Notaria'])->assignRole($role1);


        Permission::create(['name'=>'reporte.index','description'=>'Vista de Reportes'])->assignRole($role1);
        Permission::create(['name'=>'reporte.reportepersona','description'=>'Vista de Reportes por Titular'])->assignRole($role1);
        Permission::create(['name'=>'lineatiempo','description'=>'Ver Linea Tiempo Fichas'])->assignRole($role1);
        Permission::create(['name'=>'progresofichas','description'=>'Ver Progreso de Fichas'])->assignRole($role1);
        

        Permission::create(['name'=>'persona.edit','description'=>'Editar datos de Persona'])->assignRole($role1);
        Permission::create(['name'=>'supervisor.edit','description'=>'Editar datos de Supervisor'])->assignRole($role1);
        Permission::create(['name'=>'tecnicos.edit','description'=>'Editar datos de Supervisor'])->assignRole($role1);
        Permission::create(['name'=>'verificadores.edit','description'=>'Editar datos de Supervisor'])->assignRole($role1);

        Permission::create(['name'=>'persona.create','description'=>'Crear Persona'])->assignRole($role1);
        Permission::create(['name'=>'supervisor.create','description'=>'Crear Supervisor'])->assignRole($role1);
        Permission::create(['name'=>'tecnicos.create','description'=>'Crear Tecnicos'])->assignRole($role1);
        Permission::create(['name'=>'verificadores.create','description'=>'Crear Verificadores'])->assignRole($role1);


        Permission::create(['name'=>'mantenimiento.supervisores','description'              =>'Ver lista de Supervisores'])->assignRole($role1);
        Permission::create(['name'=>'mantenimiento.tecnicos','description'                  =>'Ver lista de Tecnicos'])->assignRole($role1);
        Permission::create(['name'=>'mantenimiento.verificadores','description'             =>'Ver lista de Verificadores'])->assignRole($role1);

        Permission::create(['name'=>'pdf.individual','description'                          =>'Ver Pdf de Ficha Individual'])->assignRole($role1);
        Permission::create(['name'=>'pdf.cotitularidad','description'                       =>'Ver Pdf de Ficha Cotitularidad'])->assignRole($role1);
        Permission::create(['name'=>'pdf.economica','description'                           =>'Ver Pdf de Ficha Economica'])->assignRole($role1);
        Permission::create(['name'=>'pdf.bienescomunes','description'                       =>'Ver Pdf de Ficha Bienes Comunes'])->assignRole($role1);
        
        Permission::create(['name'=>'pdf.informativa','description'                         =>'Ver Pdf de Ficha Informativa'])->assignRole($role1);
        Permission::create(['name'=>'pdf.bienesculturales','description'                    =>'Ver Pdf de Ficha Bienes Culturales'])->assignRole($role1);
        Permission::create(['name'=>'pdf.rural','description'                               =>'Ver Pdf de Ficha Rural'])->assignRole($role1);

        
        Permission::create(['name'=>'ficha.createcotitularidad','description'               =>'Crear Ficha Cotitularidad'])->assignRole($role1);
        Permission::create(['name'=>'ficha.editcotitularidad','description'                 =>'Editar Ficha Cotitularidad'])->assignRole($role1);
        Permission::create(['name'=>'ficha.indexeconomica','description'                    =>'Ver Lista de Ficha Economica'])->assignRole($role1);
        Permission::create(['name'=>'ficha.indexcotitular','description'                    =>'Ver Lista de Ficha Cotitularidad'])->assignRole($role1);
        Permission::create(['name'=>'ficha.indexbiencomun','description'                    =>'Crear Ficha de Bien Comun'])->assignRole($role1);
        Permission::create(['name'=>'ficha.indexbiencultural','description'                 =>'Ver Lista de Ficha Bienes Culturales'])->assignRole($role1);
        Permission::create(['name'=>'ficha.createeconomica','description'                   =>'Crear Ficha Economica'])->assignRole($role1);
        Permission::create(['name'=>'ficha.createbiencomun','description'                   =>'Crear Ficha Bienes Comunes'])->assignRole($role1);
        Permission::create(['name'=>'ficha.fichacotitulariadadcreate','description'         =>'Crear Ficha Cotitularidad'])->assignRole($role1);
        Permission::create(['name'=>'ficha.createbiencultural','description'                =>'Crear Ficha Bien Cultural'])->assignRole($role1);
        Permission::create(['name'=>'ficha.createrural','description'                       =>'Crear Ficha Rural'])->assignRole($role1);
        Permission::create(['name'=>'ficha.createindividual','description'                  =>'Crear Ficha Individual'])->assignRole($role1);

        
        
    }
}
