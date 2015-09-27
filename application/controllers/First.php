<?php

/**
 * Page of our first person. Page set up using 'justone' view.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application
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
        $source = $this->quotes->first();
        
        // accesses data array and loads the data stored in the array
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];  

        $this->render();
    }
    
    function zzz()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get('1');

        // accesses data array and loads the data stored in the array
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
    
    // takes a parameteer 3
    function gimme($num)
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get($num);

        // accesses data array and loads the data stored in the array
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];

        $this->render();
    }

}

/* End of file First.php */
/* Location: application/controllers/First.php */