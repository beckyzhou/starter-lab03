<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Massage extends Application
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    // bolds all capital letters in <p> elements
    function boldCapitals()
    {
        // gets an instance of the object to display
        $CI = &get_instance();
        
        // gets output of objects
        $page = $CI->output->get_output();
        
        // this page's HTML DOM object
        $dom = new DOMDocument();
        $dom->loadHTML($page);
        
        // gets element with 'p' tags
        $pList = $dom->getElementsByTagName('p');
        
        // search for the following characters
        $search = array( '/([A-Z]+[A-Za-z]*)/' );
        
        // repleaces characters we want to replace
        $replace = array( '<strong>$1</strong>');
        
        // loops through each 'p' tag on the page
        foreach( $pList as $p )
        {
            if( $p->getAttribute( 'class' == 'lead' ) )
            {
               $string = $p->nodeValue;
               
               // replace characters with a bold and capitalized characters
               $p->nodeValue = preg_replace( $search, $replace, $string );
               
               // create a new tag object
               $frag = $dom->createDocumentFragment();
               $frag->appendXML($string);

               // append new object to the element
               $p->nodeValue = '';
               $p->appendChild($frag);
            }
        }

        //output the changes back to the screen
        echo $dom->saveHTML();
    }
    
}


