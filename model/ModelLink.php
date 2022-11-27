<?php

class ModelLink extends Crud {

    protected $table = 'link';
    protected $primaryKey = 'linkId';
    
    protected $fillable = ['linkId', 'linkURL', 'description', 'link_clientId'];

}

?>