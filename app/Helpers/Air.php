<?php 

/**
 * 
 * Create directory in public with permission 0755
 */
function createPubDir($dir)
{
    if (!file_exists("storage/" . $dir)) {
        mkdir("storage/" . $dir, 0755);
    }
}