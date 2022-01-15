<?php 
/**
 * Example Plugin
 * 
 * Deactivate Class 
 * Fires when plugin is deactivated
 *
*/ 

namespace Src\Base; 

class Deactivate
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}