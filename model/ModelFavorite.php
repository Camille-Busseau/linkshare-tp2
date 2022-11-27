<?php

class ModelFavorite extends Crud {

    protected $table = 'favorite';
    protected $compositeKey = ['favorite_clientId', 'favorite_linkId'];
    
    protected $fillable = ['favorite_clientId', 'favorite_linkId'];

}

?>