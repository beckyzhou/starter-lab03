<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'homepage';
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->all();
        $authors = array();
        
        foreach ($source as $record) {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        }
        $this->data['authors'] = $authors;

        $this->render();
    }
    
    function shucks()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get('2');

        // accesses data array and loads the data stored in the array
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        
        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */