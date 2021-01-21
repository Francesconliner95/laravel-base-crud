<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //da specificare solamente quando il nome del Model 'Record' non corrisponde al singolare della tabella nel nostro database  'records'
    //protected $table = 'records';

    //con questo comando andiamo a specificare solo i parametri che ci interessa passare al database, quindi li scriviamo tutti tranne il token @csrf
    protected $fillable = ['titolo', 'artista', 'genere', 'anno'];
}
