# Laravel Migration e Seeder

Creazione di una tabella trains e relativa Migration

## Migration

Dopo aver creato la struttura di base vista negli scorsi giorni (Model, Controller e db su PhpMyAdmin) creo la tabella 'trains' tramite migration.

Per creare il file eseguo `php artisan make:migration create_trains_table` dove trains si riferirà, per naming convenction, al model 'Train'.

All' interno di `Schema::create` vado a inserire le colonne della tabella e eseguo la migrazione tramite `php artisan migrate` per creare la tabella nel db.

```php
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            //id autogenerato
            $table->id();

            //campi inseriti manualmente
            $table->string('company', 30);
            $table->string('departure_station', 20);
            $table->string('arrival_station', 20);
            $table->time('departure_time', 4);
            $table->time('arrival_time', 4);
            $table->string('train_id', 50);
            $table->tinyInteger('number_of_carriages')->unsigned()->nullable();
            $table->boolean('on_time', 50);
            $table->boolean('cancelled', 50);

            //tempo e data di creazione
            $table->timestamps();
        });
    }
```

Come già visto è necessarrio specificare il tipo di dato e le sue prorpietà, seguendo la scrittura di Laravel ('string' equivale a 'varchar')

Per ogni `function() up` si ha una funzione contrapposta che esegue il codice antagonista `function down()`

```php
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
```

In questo caso elimina la tabella trains (eseguendo il comando `php artisan migrate:rollup`)

### Migration update

Se è necessario aggiornare la tabella per aggiungere o modificare un dato si fa un update.

Si lancia il codice `php artisan make:migration update_trains_table --table=trains` che andrà a creare un nuovo file con struttura simile alla migrazione principale.

```php
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->date('departure_date')->after('arrival_station');
            $table->date('arrival_date')->after('departure_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('departure_date');
            $table->dropColumn('arrival_date');
        });
    }
};
```

Anche qui compaiono le funzioni `up()` e `down()`.

Successivamente nel controller sarà possibile raccogliere i dati desiderati e visualizzarli in pagina.

NB

I dati sono stati inseriti a mano tramite 'PhpMyAdmin'

Per visualizzare i treni con partenza odierna ho usato la classe `Carbon` di Laravel ottenendo la data corrente e usandola per filtrare i dati

```php
class PageController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->format('Y-m-d');

        $trains = Train::all()->where('departure_date', $currentDate);

        return view('welcome', compact('trains'));
    }
}
```
