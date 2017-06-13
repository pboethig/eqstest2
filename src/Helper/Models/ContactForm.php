<?php
/**
 * Created by PhpStorm.
 * User: pboethig
 * Date: 12.06.17
 * Time: 23:17
 */

namespace Helper\Models;
require_once __DIR__ . '/../../../db/Database.php';

/**
 * Contains bootup methods to prepare database
 *
 * Class ContactForm
 * @package Helper\Models
 */
class ContactForm
{
    /**
     * @var \Database
     */
    private $database;

    /**
     * ContactForm constructor.
     *
     * @todo: use a DI container
     */
    public function __construct()
    {
        $databaseConfig = new \DatabaseConfig();

        $this->database = new \Database($databaseConfig);
    }

    /**
     * Install database and contact table if not exists
     */
    public function bootstrapDatabaseTable()
    {
        $createStatement = "
        CREATE TABLE IF NOT EXISTS `eqs`.`contactmessages` (
        `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstname varchar(255) not null,
        lastname varchar(255) not null,
        email varchar(255) not null,
        entrydate      DATETIME DEFAULT   CURRENT_TIMESTAMP,
        message text not null
        )ENGINE=INNODB;";

        try
        {
            $this->database->query($createStatement);

        }catch (\Exception $e)
        {
            echo($e->getMessage().$e->getTraceAsString());

            die(__METHOD__);
        }
    }

    /**
     * Returns database object
     *
     * @return \Database
     */
    public function getDatabase()
    {
        return $this->database;
    }
}