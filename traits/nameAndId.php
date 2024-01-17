<?php

trait NameAndId
{
    private $name;
    private $id;

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
        } else throw new Exception('Inserisci un nome di lunghezza valida');
    }

    /**
     * setId setta l'id se è un intero
     *
     * @param  mixed $id
     * @return void
     */
    public function setId($id)
    {
        if (is_int($id)) {
            $this->id = $id;
        } else throw new Exception('Inserisci un numero intero');
    }

    /**
     * getName restituisce il nome
     *
     * @return void
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * getId restituisce l'id
     *
     * @return void
     */
    public function getId()
    {
        return $this->id;
    }
}
