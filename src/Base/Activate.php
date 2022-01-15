<?php 
/**
 * Example Plugin
 * 
 * Activate Class 
 * Fires when plugin is activated 
 *
*/ 

namespace Src\Base; 

class Activate
{
    public static function activate()
    {
        flush_rewrite_rules();
    }
}