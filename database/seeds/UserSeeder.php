<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$profession_id = DB::table('professions')
    	->where('title','Back-end')
    	->value('id');
       User::create([
            'name' => 'Renzo Zavala',
            'email' => 'renzozavala123@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => '1',
        ]);
       User::create([
            'name' => 'Juan Pipa',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => '1',
        ]);
        factory(User::class)->times(1)->create([
            'is_admin' => '1',
            'profession_id' => '2',
        ]);
    }
}
