<?php

use App\services\PermissionService;

defined('BASEPATH') or exit('No direct script access allowed');

class MyCliController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Creates a migration
     *
     * @param  string  $name Name
     * @param  string  $type Type (sequential|date)
     *
     * @return void
     */
    public function makeMigration($name, $type = 'timestamp')
    {
        if (!file_exists(APPPATH . '/database/migrations')) {
            mkdir(APPPATH . '/database/migrations');
        }

        $name = trim(str_ireplace(' ', '_', $name));

        if ($type == 'timestamp') {
            $filename = date('Y') . date('m') . date('d') . date('H') . date('i') . date('s') . '_create_' . $name . '_table';
        } else {
            $migrations = scandir(APPPATH . '/database/migrations');
            $last = 0;

            foreach ($migrations as $migration) {
                if ($migration == '.' || $migration == '..') {
                    continue;
                }

                $_number = substr($migration, 0, 4);

                if (preg_match('/^[0-9]{3}_$/', $_number)) {
                    if ($_number > $last) {
                        $last = (int) $_number;
                    }
                }
            }
            $last++;
            $filename = str_pad($last, 3, '0', STR_PAD_LEFT) . '_create_' . $name . '_table';
        }

        $path = APPPATH . 'database/migrations/' . $filename . '.php';

        if (file_exists($path)) {
            show_error('The file already exists!');
        }

        $function_up = '$this->dbforge->add_field(\'id\');'  .  PHP_EOL;
        $function_up .= '		// $this->dbforge->softDelete()'  .  PHP_EOL;
        $function_up .= '		$this->dbforge->timestamps();'  .  PHP_EOL;
        $function_up .= '		$this->dbforge->create_table($'.'this->table, TRUE);';

        $function_down = '$this->dbforge->drop_table($this->table, TRUE);';

        $function_constructor = 'parent::__construct();'  .  PHP_EOL;
        $function_constructor .= '		$this->load->dbforge();';
        $protected_variable = 'protected $table = "'.$name.'";'  .  PHP_EOL;

        $file = <<<MIGRATION
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_{$name}_table extends CI_Migration
{
    /**
	 * Name of the table to be used in this migration!
	 *
	 * @var string
	 */
	{$protected_variable}

	public function __construct()
	{
		{$function_constructor}
    }

    public function up()
    {
        {$function_up}
    }

    public function down()
    {
        {$function_down}
    }
}
MIGRATION;

        file_put_contents($path, $file);

        echo "\nCREATED:\n" . realpath($path) . "\n";
    }

    /**
     * Runs a migration
     *
     * @param  string  $version (Optional)
     * @param  string  $seeding (Optional)
     *
     * @return void
     */
    public function migrate($version = null, $seeding = null)
    {
        if ($version == 'reset') {
            self::migrate('0');
            return;
        }

        if ($version == 'fresh') {
            self::migrate('0');

            self::migrate();

            if($seeding == '--seed') {
                app()->seeder->call('DatabaseSeeder');
            }

            return;
        }

        app()->load->library('migration');

        $migrations = app()->migration->find_migrations();

        $_migrationsTable = new \ReflectionProperty('CI_Migration', '_migration_table');
        $_migrationsTable->setAccessible(true);
        $_migrationsTable = $_migrationsTable->getValue(app()->migration);

        $old = app()->db->get($_migrationsTable)->result()[0]->version;

        $migrate = function () use ($version) {
            if ($version === null) {
                return app()->migration->latest();
            }

            return app()->migration->version($version);
        };

        $result = $migrate();

        if ($result === false) {
            show_error(app()->migration->error_string());
        }

        $current = app()->db->get($_migrationsTable)->result()[0]->version;

        if ($old == $current) {
            echo "\nNothing to migrate. \n";
        } else {
            $migrations = $old < $current ? $migrations : array_reverse($migrations, true);
            $ascendent  = $old < $current;

            foreach ($migrations as $name => $path) {
                if ($ascendent) {
                    if ($current >=  $name) {
                        echo "\n" . 'MIGRATED: ' . basename($migrations[$name]) . "\n";
                    }
                } else {
                    if ($current <= $name) {
                        echo "\n" . 'RESETED: ' . basename($migrations[$name]) . "\n";
                    }
                }
            }
        }
    }

    public function permission($type = null, $name = null)
    {
        if(is_null($type)) {
            show_error('Syntax error check help command' . "\n" . "\t" . "\e[1;32mphp artisan permission --help");
        }

        if($type == '--generate') {
            PermissionService::run($name);
        }

        if($type == '--help') {
            echo 'Command list' . "\n";
            echo "\t\e[1;32mphp artisan permission --generate\n";
            echo "\t\e[1;32mphp artisan permission --generate User\n";
        }

        return;
    }
}
