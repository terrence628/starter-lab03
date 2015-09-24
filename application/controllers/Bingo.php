<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application {

	/**
	 * Index Page for this controller.
	 */
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(5);
        
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        /*$authors = array();
        foreach ($source as $record) {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        }
        $this->data['authors'] = $authors;*/

        $this->render();
    }
    
        function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(6);
        
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        /*$authors = array();
        foreach ($source as $record) {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        }
        $this->data['authors'] = $authors;*/

        $this->render();
    }
}