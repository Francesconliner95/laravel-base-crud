<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;//Mi collego a Model Record (Database)

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Record::all());
        $data = [
            'records'=>Record::all()
        ];

        return view('records.index', $data);
        //return 'ciao a tutti';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //aggiungiamo la view alla funzione create, quindi andiamo anche a creare il nuovo file create.blade.php in records
        return view('records.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //la funzione store si passa di default il parametro $request che conterrà i dati da noi inseriti nel form, $request->all() con questo comando andiamo a memorizzare tutti i dati inseriti all'interno della variabile $data
        $data = $request->all();

        //creiamo una nuova classe Record(che prende dal Model Record.php che comunica con il nostro Database)
        $new_record = new Record();

        //METODO 1
        //gli andiamo a passare ogni singolo parametro manualemnte all'interno del database
        // $new_record->titolo = $data['titolo'];
        // $new_record->artista = $data['artista'];
        // $new_record->anno = $data['anno'];
        // $new_record->genere = $data['genere'];

        //METODO 2
        //passiamo al database direttamente tutti i parametri grazie al comando fill, pero dobbiamo ricordarci di andare a specificare all'interno del nostro Model Record.php solo i parametri che ci interessano, perchè insieme passa anche il token @csrf che non ci serve
        $new_record->fill($data);

        //ora possiamo memorizzare i nostri dati sul database
        $new_record->save();

        //quando ha finito di salvare, automaticamente reindirizza la pagina in records.index. Reindirizziamo la pagina non appena vengono memorizzati i dati perchè in caso contrario  restando sulla stessa, basterebbe aggiornare la pagina per ricaricare gli stessi dati nel database occupando la riga successiva e cosi via
        return redirect()->route('records.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'record'=>Record::find($id)
        ];

        return view('records.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
