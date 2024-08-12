<?php 
namespace Codx\Comic\Model;


class Charlet extends Model{

    protected $table = "charlets";
    public $timestamps = false;
    
    protected $fillable = [
      'number',
      'space'  
    ];

    

}