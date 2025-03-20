<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;

use App\Models\Prod; // Importa il modello Prodotto
 
class ProdSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        // Aggiungi i prodotti

        Prod::create([

            'nome' => 'FRIGORIFERO',

            'immagine' => 'css/images/products/frigorifero1.jpeg',
            
            'descrizione' => 'Il nostro frigorifero di ultima generazione combina efficienza energetica, design moderno e tecnologia avanzata per garantire una conservazione ottimale degli alimenti. Dotato di ampi vani interni, sistema di raffreddamento rapido e illuminazione a LED, offre confortevole e pratica. Grazie alle sue funzioni smart, consente di monitorare e regolare la temperatura in modo intuitivo, ottimizzando il consumo energetico.',

            'note_tecniche_uso' => 'Organizzazione interna: Disporre gli alimenti in modo ordinato, separando frutta, verdura, latticini e carne per una migliore conservazione.

Pulizia e manutenzione: Pulire regolarmente le guarnizioni e i ripiani con un panno umido per prevenire la formazione di muffe e cattivi odori.

Sbrinamento: Se il modello non è dotato di sistema No Frost, effettuare periodicamente lo sbrinamento per evitare accumuli di ghiaccio.

Sicurezza: Non inserire alimenti ancora caldi per non alterare la temperatura interna e compromettere la conservazione degli altri prodotti.

Risparmio energetico: Regolare la temperatura su livelli moderati e aprire la porta solo quando necessario per ridurre il consumo di energia.',

            
            'modalita_installazione' => 'Posizionamento: Installare il frigorifero su una superficie piana e stabile, lasciando almeno 5 cm di spazio sui lati e sul retro per una corretta ventilazione.

Connessione elettrica: Collegare il frigorifero a una presa con messa a terra, evitando l\'uso di prolunghe per garantire un\'alimentazione sicura e stabile.

Regolazione della temperatura: Prima di inserire gli alimenti, lasciare il frigorifero acceso per almeno 4 ore per consentire il raggiungimento della temperatura ottimale.

Verifica della chiusura: Assicurarsi che la porta si chiuda ermeticamente per evitare dispersioni di freddo e garantire un\'efficienza energetica ottimale.',

        ]);
 
        // Aggiungi altri prodotti qui se necessario

        Prod::create([

            'nome' => 'LAVASTOVIGLIE',

            'immagine' => 'css/images/products/lavastoviglie1.jpeg',

            'descrizione' => 'La nostra lavastoviglie di ultima generazione offre prestazioni eccellenti, design elegante e funzionalità avanzate per garantire stoviglie perfettamente pulite e brillanti. Dotata di un motore silenzioso e di programmi di lavaggio personalizzabili, è ideale per qualsiasi ambiente domestico. Grazie alla tecnologia di risparmio energetico, riduce il consumo di acqua ed elettricità, contribuendo a un minor impatto ambientale.',

            'note_tecniche_uso' => 'Caricamento ottimale: Disporre le stoviglie senza sovrapporle, posizionando gli oggetti più sporchi nei cestelli inferiori per una pulizia più efficace.

Detergenti e brillantanti: Utilizzare solo prodotti specifici per lavastoviglie per garantire la massima efficienza e prevenire danni all\'apparecchio.

Manutenzione: Pulire regolarmente i filtri e i bracci irroratori per evitare accumuli di residui e mantenere elevate prestazioni di lavaggio.

Sicurezza: Non aprire la porta durante il ciclo di lavaggio per evitare fuoriuscite di acqua calda e vapore.

Modalità eco: Per un minor consumo energetico, selezionare programmi a bassa temperatura e sfruttare la funzione di avvio ritardato per ottimizzare l\'uso dell\'energia.',

            
            
            'modalita_installazione' => 'Posizionamento: Collocare la lavastoviglie su una superficie piana e stabile, lasciando uno spazio sufficiente per la ventilazione e la connessione agli impianti idrici ed elettrici.

Collegamenti idraulici: Connettere il tubo di carico dell\'acqua a un rubinetto con attacco standard e il tubo di scarico a un sifone adeguato, evitando piegature che possano ostacolare il deflusso dell\'acqua.

Connessione elettrica: Assicurarsi che l\'alimentazione elettrica corrisponda ai requisiti del prodotto e collegare la spina a una presa con messa a terra.

Test di funzionamento: Prima del primo utilizzo, effettuare un ciclo di lavaggio a vuoto per verificare il corretto funzionamento della lavastoviglie.',

        ]);
            
        
        Prod::create([

            'nome' => 'MICROONDE',

            'immagine' => 'css/images/products/microonde1.jpeg',

            'descrizione' => 'Il nostro forno a microonde combina design moderno e tecnologia avanzata per offrire un\'esperienza di cottura rapida ed efficiente. Dotato di diverse modalità di cottura, tra cui scongelamento rapido, grill e programmi automatici, permette di preparare piatti gustosi in pochi minuti. Il pannello di controllo intuitivo e la funzione timer garantiscono facilità d\’uso, mentre il rivestimento interno antiaderente semplifica la pulizia.',

            'note_tecniche_uso' => "Tipi di contenitori: Usare esclusivamente recipienti adatti al microonde (vetro, ceramica, plastica resistente al calore), evitando materiali metallici o con decorazioni in alluminio.
Scongelamento: Utilizzare la funzione di scongelamento per decongelare alimenti in modo uniforme senza cuocerli.
Cottura e riscaldamento: Regolare la potenza in base al tipo di alimento; cibi liquidi devono essere mescolati a metà cottura per una distribuzione uniforme del calore.
Sicurezza: Non accendere il microonde vuoto per evitare danni al magnetron. Evitare di riscaldare uova intere o cibi con pelle spessa (es. patate, salsicce) senza forarli prima.
Pulizia: Pulire regolarmente il piatto girevole e le pareti interne con un panno umido per prevenire accumuli di sporco e odori sgradevoli.",

            'modalita_installazione' => "Posizionamento: Collocare il microonde su una superficie piana, stabile e resistente al calore, lasciando almeno 10 cm di spazio ai lati e sul retro per una corretta ventilazione.
Connessione elettrica: Collegare la spina a una presa con messa a terra, evitando l’uso di prolunghe o prese multiple per garantire la massima sicurezza.
Test iniziale: Prima del primo utilizzo, pulire l’interno con un panno umido e far funzionare il microonde per 1-2 minuti con un bicchiere d’acqua per eliminare eventuali residui di produzione.",

        ]);

    }

}

 