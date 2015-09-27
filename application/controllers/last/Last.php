<?php

/**
 * Page of our last person. Shows a picture of Isaac Asimov and a quote of his.
 * 
 * controllers/Last.php
 *
 * ------------------------------------------------------------------------
 */
class Last extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {    
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        //
        // build the list of authors, to pass on to our view
        $source = $this->quotes->last();
        
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        
        $this->render();
    }

}

/* End of file Last.php */
/* Location: application/controllers/Last.php */