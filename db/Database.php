<?php

/**
 * Class Database
 *
 * Replaces old mysql_i version because of BC
 */
class Database extends PDO
{
    /**
     * Database constructor.
     * @param DatabaseConfig $config
     */
    public function __construct(DatabaseConfig $config)
    {
        $dns='mysql:host=' . $config->host . ';port='.$config->port.';dbname='. $config->database;

        parent::__construct($dns, $config->username, $config->password,null);
    }

    /**
     * Execute Query
     *
     * @param string $query
     * @return PDOStatement
     */
    public function query($query)
    {
        $args = func_get_args();

        array_shift($args);

        $reponse = parent::prepare($query);

        $reponse->execute($args);

        return $reponse;
    }
}