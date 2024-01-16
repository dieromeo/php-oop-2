<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $description;

    function __construct(string $_name, int $_price, string $_category, string $_description)
    {
        $this->setName($_name);
        $this->price = $_price;
        $this->setCategory($_category);
        $this->description = $_description;
    }

    /**
     * setName Verifica che il nome inserito abbia almeno 3 caratteri
     *
     * @param  mixed $name
     * @return void
     */
    public function setName($name)
    {
        if (strlen($name) >= 3) {
            $this->name = $name;
        }
    }
    /**
     * setCategory Setta la categoria se vengono inseriti i valori aspettati
     *
     * @param  mixed $category
     * @return void
     */
    public function setCategory($category)
    {
        if (strtolower($category) === "cane" || strtolower($category) === "gatto" || strtolower($category) === "cane e gatto") {
            $this->category = $category;
        }
    }
}
