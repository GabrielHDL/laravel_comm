<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            // Celulares y Tablets
             [
                'category_id' => 1,
                'name' => 'Celulares y smartphones',
                'slug' => Str::slug('Celulares y smartphones'),
                'color' => true
             ],
             [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares')
             ],
             [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches')
             ],
            //  Tv, audio y video
             [
                'category_id' => 2,
                'name' => 'Tv y audio',
                'slug' => Str::slug('Tv y audio')
             ],
             [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios')
             ],
             [
                'category_id' => 2,
                'name' => 'Audio para autos',
                'slug' => Str::slug('Audio para autos')
             ],
            //  Consola y videojuegos
             [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox')
             ],
             [
                'category_id' => 3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station')
             ],
             [
                'category_id' => 3,
                'name' => 'Videojuegos para PC',
                'slug' => Str::slug('Videojuegos para PC')
             ],
             [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo')
             ],
            //  Computación
             [
                'category_id' => 4,
                'name' => 'Portatiles',
                'slug' => Str::slug('Portatiles')
             ],
             [
                'category_id' => 4,
                'name' => 'PC Escritorio',
                'slug' => Str::slug('PC Escritorio')
             ],
             [
                 'category_id' => 4,
                 'name' => 'Almacenamiento',
                 'slug' => Str::slug('Almacenamiento')
             ],
             [
                 'category_id' => 4,
                 'name' => 'Accesorios Computadora',
                 'slug' => Str::slug('Accesorios Computadora')
             ],
            //  Moda
             [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres')
             ],
             [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres')
             ],
             [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes')
             ],
             [
                'category_id' => 5,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes')
             ],
             
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}