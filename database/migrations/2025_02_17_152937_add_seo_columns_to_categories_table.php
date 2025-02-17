<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSeoColumnsToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name');
            $table->string('meta_robots')->nullable()->after('gallery_id');
            $table->string('seo_title')->nullable()->after('meta_robots');
            $table->string('h1_text')->nullable()->after('seo_title');
            $table->text('meta_description')->nullable()->after('h1_text');
            $table->text('meta_keywords')->nullable()->after('meta_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn([
                'slug',
                'meta_robots',
                'seo_title',
                'h1_text',
                'meta_description',
                'meta_keywords',
            ]);
        });
    }
}
