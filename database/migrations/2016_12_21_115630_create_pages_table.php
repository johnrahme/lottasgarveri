<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('content');
            $table->string('name');
            $table->string('lang');
            $table->timestamps();
        });
        DB::table('pages')->insert(array(
            'content' => '<h1>Content is not set yet!</h1>',
            'name' => 'Welcome',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Inget innehåll</h1>',
            'name' => 'Welcome',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Tannery content is not set yet!</h1>',
            'name' => 'Tannery',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Garveri har inget innehåll</h1>',
            'name' => 'Tannery',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Böcker har inget innehåll</h1>',
            'name' => 'Books',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Books does not have any content</h1>',
            'name' => 'Books',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Kurser har inget innehåll</h1>',
            'name' => 'Courses',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Courses does not have any content</h1>',
            'name' => 'Courses',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Utställningar har inget innehåll</h1>',
            'name' => 'Exhibitions',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Exhibitions does not have any content</h1>',
            'name' => 'Exhibitions',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Butik har inget innehåll</h1>',
            'name' => 'Shop',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Shop does not have any content</h1>',
            'name' => 'Shop',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>List har inget innehåll</h1>',
            'name' => 'List',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>List does not have any content</h1>',
            'name' => 'List',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
