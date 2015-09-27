<?php

/**
 * Guess page. Page set up using 'justone' view.
 * Shows a picture of an anonymous person and thier quote.
 * 
 * controllers/Guess.php
 *
 * ------------------------------------------------------------------------
 */
class Guess extends Application
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
        $source = $this->quotes->get('4');
        
        // accesses data array and loads the data stored in the array
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];

        $this->render();
    }

}

/* End of file Guess.php */
/* Location: application/controllers/Guess.php */