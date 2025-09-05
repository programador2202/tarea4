<?php

namespace App\Models;
use CodeIgniter\Model;

class Recursos extends Model{

  protected $table = 'recursos';
  protected $primaryKey = "idrecurso";
  protected $allowedFields = ["idsucategoria","ideditorial","tipo","titulo","apublicacion","isbn","numpaginas","rutaportada","rutarecurso","estado","creado","modificado"];

}