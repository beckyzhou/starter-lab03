<?php

/**
 * Bingo page. Page set up using 'justone' view.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get('5');
        
        // accesses data array and loads the data stored in the array
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];  

        $this->render();
    }
    
    function wisdom()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get('6');
        
        // accesses data array and loads the data stored in the array
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];  

        $this->render();
    }

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */