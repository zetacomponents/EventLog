<?php

/**
 * Writes the log messages to a file
 * 
 *
 * @package Logger
 * @copyright Copyright (C) 2005 eZ systems as. All rights reserved.
 * @license LGPL {@link http://www.gnu.org/copyleft/lesser.html}
 * @version //autogentag//
**/
abstract class ezcLoggerWriterFile extends ezcLoggerWriter
{
    // Contains the open files. 
    private $openFiles;
    
    public function __constructor()
    {
    }

    public function setLogRotationSize()
    {
    }

    /**
     * The function that actuallty writes the log entry.
     *
     * Group determines the file name, to write to.
     */
    public function writeLogEntry( string $group, array $logEntry)
    {

    }

    /**
     * Open file and rotate log automatically.
     */ 
    private function openFile( string $fileName )
    {
    }

    /**
     * Rotate log.
     */
    private function logRotate( $size )
    {
    }
}

?>