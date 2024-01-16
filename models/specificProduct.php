<?php
require_once __DIR__ . "/product.php";

class SpecificProduct extends Product
{
    public $tipology;

    function __construct($_name, $_price, $_category, $_description, $_tipology, $_image)
    {
        parent::__construct($_name, $_price, $_category, $_description, $_image);
        $this->setTipology($_tipology);
    }

    /**
     * setTipology setta la tipologia se presete nell'array
     *
     * @param  mixed $tipology
     * @return void
     */
    public function setTipology($tipology)
    {
        $tipology_value = ["cibo", "cuccia", "giochi"];
        $tipology_lower = strtolower($tipology);
        if (in_array($tipology_lower, $tipology_value)) {
            $this->tipology = $tipology;
        }
    }
}
