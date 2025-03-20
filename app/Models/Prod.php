<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Prod extends Model
{
    use HasFactory;
 
    // Indica quale tabella usare nel database
    protected $table = 'prodotti';
 
    // Permetti l'inserimento di questi campi nella tabella
    protected $fillable = [
        'nome',
        'immagine',
        'descrizione',
        'note_tecniche_uso',
        'modalita_installazione',
    ];
 
    // Se la tabella non ha i campi created_at e updated_at, disabilitali
    public $timestamps = true;
}