<?php

namespace Models;

require_once __DIR__ . '/../../db/Database.php';
require_once __DIR__ . '/../ORM.php';

/**
 * Handles the database part of the contactform
 *
 * Class ContactForm
 * @package Models
 */
class Contact extends \ORM
{
    /**
     * These fields can be filled
     *
     * @var array
     */
    public $fillableFields = ['firstname', 'lastname', 'email',  'entrydate', 'message'];

    /**
     * @var string
     */
    public $firstname;

    /**
     * @var string
     */
    public $lastname;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $entrydate;

    /**
     * @var string
     */
    public $tableName = "contactmessages";

    /**
     * ContactForm constructor.
     * @param array $data the formular submit
     */
    public function __construct(array $data)
    {
        $this->prepare();

        parent::__construct();

        if(!empty($data))
        {
            $this->validate($data);
        }
   }

    /**
     * Setup databasetable if not exists
     */
    private function prepare()
    {
        $helper = new \Helper\Models\ContactForm();
        $helper->bootstrapDatabaseTable();
    }
}