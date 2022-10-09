<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portfolio_category_id')->constrained('portfolio_categories');
            $table->string('title');
            $table->string('slug')->unique()->index();
            $table->text('intro')->nullable();
            $table->longText('text');
            $table->string('image')->default('')->nullable();
            $table->string('meta_title')->default('')->nullable();
            $table->string('meta_description')->default('')->nullable();
            $table->string('meta_keywords')->default('')->nullable();
            $table->string('tags')->default('')->nullable();
            $table->integer('views')->default(0)->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->timestamp('publish_at')->nullable();
            $table->timestamps();
        });

        /*
         *
         *
         * "title" => "dfgdfgdf"
  "intro" => "gdfgdfgfjhgkjgh"
  "text" => "<p>jbmnvbnvbgnderfwet</p>"
  "meta_title" => "cdbcvbcnv"
  "meta_description" => "nvbmfgheqwqe"
  "meta_keywords" => "asdczxczxczxd"
  "tags" => "fdghgjhjtyj"
  "slug" => "sluhhg"
  "link" => "http://sss.local"
  "image" => null
  "portfolio_category_id" => "1"
  "status" => "1"
  "publish_at" => "2022-10-10T13:32"
         *
         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
