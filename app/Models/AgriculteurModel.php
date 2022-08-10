<?php namespace App\Models;

use CodeIgniter\Model;

class AgriculteurModel extends Model
{

  
  protected $table = "agriculteur";

    /* name of primary key field */
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;

    /* type of returned data */
    protected $returnType = 'array';

    
    /* default fields that will be inserted */
    protected $allowedFields = ['cvl', 'prenom', 'nom','tranche_age'];

    /* automatic date create in database */
   

    /* receive users */
   

   

}


?>