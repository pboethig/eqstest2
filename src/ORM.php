<?php
/**
* Simple ORM Class to handle DB Requests
* @author: Peter Böthig<pboethig@gmail.com>
*/
class ORM
{ 
    /**
     * @var array
     */
    protected $fillableFields=[];

    /**
     * @var Database
     */
    protected $database;

    /**
     * @var array
     */
    public $errors = [];

    /**
     * @var string
     */
    protected $tableName;

    /**
     * ORM constructor.
     */
    public function __construct()
    {
        $this->database = new Database(new DatabaseConfig());
    }

    /**
     * Validates the formrequest
     *
     * @param array $data
     */
    public function validate(array $data)
    {
        foreach ($this->fillableFields as $field)
        {
            if(!isset($data[$field]) || empty($data[$field]))
            {
                $this->errors[] = $field . ' can not be empty';
            }
            else
            {
                $this->$field = $data[$field];
            }
        }
    }

    /**
     * Saves the entity
     *
     * @return bool|null
     */
    public function save()
    {
        if(!empty($this->errors)) return null;

        $statement = "INSERT INTO `" . $this->tableName . "` (";

        foreach ($this->fillableFields as $field)
        {
            $statement.= $field . ",";
        }

        $statement = rtrim($statement,',') . ") VALUES (";

        $data = [];

        foreach ($this->fillableFields as $field)
        {
            $statement.="?,";

            $data[] = $this->$field;
        }

        $statement = rtrim($statement,',') . ")";

        $statement = $this->database->prepare($statement);

        return $statement->execute($data);
    }

    /**
     * Get all entries
     * @return array
     */
    public function all()
    {
        return  $this->database->query("SELECT * FROM " . $this->tableName . ' ORDER BY entrydate DESC')->fetchAll();
    }
}
