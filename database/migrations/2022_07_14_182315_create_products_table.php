<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 999);
            $table->text('description');
            $table->string('thumb')->nullable();
            $table->decimal('price', 5);
            $table->string('series', 70);
            $table->date('sale_date');
            $table->string('type', 70);
            
            $table->timestamps();
            
        });
    }

    // "title" => "Batman: Three Jokers #1",
    // "description" => "Thirty years after Batman: The Killing Joke changed comics forever, Three Jokers reexamines the myth of who, or what, The Joker is and what is at the heart of his eternal battle with Batman. New York Times bestselling writer Geoff Johns and Jason Fabok, the writer/artist team that waged the “Darkseid War” in the pages of Justice League, reunite to tell the ultimate story of Batman and The Joker! After years of anticipation starting in DC Universe: Rebirth #1, the epic miniseries you’ve been waiting for is here: find out why there are three Jokers, and what that means for the Dark Knight and the Clown Prince of Crime. It’s a mystery unlike any Batman has ever faced!",
    // "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY",
    // "price" => "6.99",
    // "series" => "Batman: Three Jokers",
    // "sale_date" => "2020-08-25",
    // "type" => "comic book"

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
