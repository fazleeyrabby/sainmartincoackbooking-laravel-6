<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generalsetting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',20)->nullable();
            $table->string('mobile',15)->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('googlePlus')->nullable();
            $table->string('tweeter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('youtubeVideoLink')->nullable();
            $table->string('buyTicketLinkBkash')->nullable();
            $table->string('buyTicketLinkBus')->nullable();
            $table->string('memberOfLink')->nullable();
            $table->text('footerBottomText')->nullable();
            $table->text('emergenctHelpService')->nullable();
            $table->text('forAcBusRent')->nullable();
            $table->text('information')->nullable();
            $table->string('headerBackgrounColor',15)->nullable();
            $table->string('menuBackgrounColor',15)->nullable();
            $table->string('footerBackgroundColor',15)->nullable();
            $table->string('dashboardHeaderColor',15)->nullable();
            $table->string('dashboardHeaderLogoColor',15)->nullable();
            $table->string('dashboardSidebarColor',15)->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('phoneCallLogo')->nullable();
            $table->string('buyTicketBkashLogo')->nullable();
            $table->string('buyTicketBusLogo')->nullable();
            $table->string('memberOfLogo')->nullable();
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
        Schema::dropIfExists('generalsetting');
    }
}
