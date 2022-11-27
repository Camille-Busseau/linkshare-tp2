<?php

class ModelType extends Crud {

    protected $table = 'type';
    protected $primaryKey = 'typeId';
    
    protected $fillable = ['typeId', 'description', 'type_linkId'];

}

?>