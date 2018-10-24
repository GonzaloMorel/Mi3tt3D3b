<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \miette\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Slider::create([
            'text' => 'Sus deliciosos productos, elaborados a mano por su propia dueña, tienen el mágico don de despertar el apetito a cualquiera... ',
            'url_picture' => 'assets/images/miette/original/105.jpg',
            'activate' => true
        ]);

        Slider::create([
            'text' => 'Se trata de Miette, un salón de té ubicado a pasos de Escuela Militar que recientemente abrió sus puertas al público para ofrecer una exquisita repostería artesanal...',
            'url_picture' => 'assets/images/miette/original/mc-32.jpg',
            'activate' => true
        ]);

        Slider::create([
            'text' => 'Con sus tortas, cheescakes, brownies, blondies, galletas y cinammon rolls... ',
            'url_picture' => 'assets/images/miette/original/98.jpg',
            'activate' => true
        ]);

        Slider::create([
            'text' => 'Miette busca rescatar la cocina de las abuelas, esa que se hace a mano, paso a paso, cuidando cada detalle, utilizando ingredientes naturales y frescos, logrando así sabores, texturas y aromas caseros como los de antaño. ',
            'url_picture' => 'assets/images/miette/original/102.jpg',
            'activate' => true
        ]);

        /*DB::table('slider')->insert([
          'text' => 'Sus deliciosos productos, elaborados a mano por su propia dueña, tienen el mágico don de despertar el apetito a cualquiera... ',
          'url_picture' => 'assets/images/miette/original/105.jpg'
        ]);

        DB::table('slider')->insert([
          'text' => 'Se trata de Miette, un salón de té ubicado a pasos de Escuela Militar que recientemente abrió sus puertas al público para ofrecer una exquisita repostería artesanal...',
          'url_picture' => 'assets/images/miette/original/mc-32.jp'
        ]);

        DB::table('slider')->insert([
          'text' => 'Con sus tortas, cheescakes, brownies, blondies, galletas y cinammon rolls... ',
          'url_picture' => 'assets/images/miette/original/98.jpg'
        ]);

        DB::table('slider')->insert([
          'text' => 'Miette busca rescatar la cocina de las abuelas, esa que se hace a mano, paso a paso, cuidando cada detalle, utilizando ingredientes naturales y frescos, logrando así sabores, texturas y aromas caseros como los de antaño. ',
          'url_picture' => 'assets/images/miette/original/102.jpg'
      ]);**/
    }
}
