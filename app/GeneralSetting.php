<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalsetting extends Model
{
    Protected $table = 'generalsetting';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'name',
    	'mobile',
    	'email',
    	'address',
    	'facebook',
    	'googlePlus',
    	'tweeter',
    	'instagram',
    	'youtube',
    	'youtubeVideoLink',
    	'buyTicketLinkBkash',
    	'buyTicketLinkBus',
    	'memberOfLink',
    	'footerBottomText',
        'emergenctHelpService',
        'forAcBusRent',
        'information',
    	'headerBackgrounColor',
    	'menuBackgrounColor',
    	'footerBackgroundColor',
    	'dashboardHeaderColor',
    	'dashboardHeaderLogoColor',
    	'dashboardSidebarColor',
    	'logo',
    	'favicon',
    	'phoneCallLogo',
        'buyTicketBkashLogo',
    	'buyTicketBusLogo',
    	'memberOfLogo',
    ];
}
