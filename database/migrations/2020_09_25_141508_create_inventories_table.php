<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if(!Schema::hasTable('inventories')) return;
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('inventorieTypeId'); // the can regester once and display as one item in count may
            $table->enum('type', ['furniture', 'stationery' ,'electronics', 'vehicle']);
            $table->boolean('movable')->default(0);
            $table->boolean('returnable')->default(0);
            $table->string('shelfId')->nullable();
            $table->enum('unit' , ['litter'  , 'kilo', 'count']);
            $table->integer('count');
            $table->enum('status' , ['new', 'meddium', 'old', 'veryold']);
            $table->boolean('isTransferd')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
