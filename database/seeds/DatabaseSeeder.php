<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['users', 'jokes', 'categories', 'authors'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        foreach ($this->toTruncate as $table) {

            Schema::disableForeignKeyConstraints();
            DB::table($table)->truncate();
            Schema::enableForeignKeyConstraints();

        }

        //$this->call(UsersTableSeeder::class);

        $this->call(AuthorsTableSeeder::class);

        $this->call(JokesTableSeeder::class);

        $this->call(CategoriesTableSeeder::class);

    }
}
