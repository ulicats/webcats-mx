<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('menus')->insert([
            "name"=>"Administradores",
            "description"=>"Administradores de tu sitio",
            "route"=>"/users",
            "icon"=>"fa fa-users-cog",
            "permissions_name"=>"users",
            "position"=>1
        ]);

        DB::table('menus')->insert([
            "name"=>"Clientes",
            "description"=>"clientes",
            "route"=>"/customers",
            "icon"=>"fa fa-users",
            "permissions_name"=>"customers",
            "position"=>2
        ]);

        DB::table('menus')->insert([
            "name"=>"Banners",
            "description"=>"Banners de tu sitio",
            "route"=>"/banners",
            "icon"=>"fa fa-images",
            "permissions_name"=>"banners",
            "position"=>3
        ]);

        DB::table('menus')->insert([
            "name"=>"Categorias",
            "description"=>"Categorias de tu sitio",
            "route"=>"/categories",
            "icon"=>"fa fa-bars",
            "permissions_name"=>"categories",
            "position"=>4
        ]);

        DB::table('menus')->insert([
            "name"=>"Subcategorias",
            "description"=>"Subcategorias de tu sitio",
            "route"=>"/subcategories",
            "icon"=>"fa fa-stream",
            "permissions_name"=>"subcategories",
            "position"=>5
        ]);
       
        DB::table('menus')->insert([
            "name"=>"Productos",
            "description"=>"Productos de tu sitio",
            "route"=>"/products",
            "icon"=>"fa fa-tags",
            "permissions_name"=>"products",
            "position"=>6
        ]);
        

        
    }
}
