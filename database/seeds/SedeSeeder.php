<?php
use App\Sede;
use Illuminate\Database\Seeder;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sede::create([
            'sede_name' => 'Aquira',
            'cantidad' => '3',
        ]);
        factory(Sede::class)->times(17)->create();
    }

}
