use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('participants')) {
            Schema::create('participants', function (Blueprint $table) {
                $table->string('id')->primary();
                $table->string('nombre');
                $table->date('fecha_nacimiento');
                $table->string('genero');
                $table->string('email')->unique();
                $table->integer('score');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
