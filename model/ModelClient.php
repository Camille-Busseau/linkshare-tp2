<?php

class ModelClient extends Crud {

    protected $table = 'client';
    protected $primaryKey = 'clientId';

    protected $fillable = ['clientId', 'username', 'password'];
}

?>