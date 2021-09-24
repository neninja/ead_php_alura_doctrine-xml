<?php

namespace Alura\Doctrine\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @Table(name="ator")
 */
class Ator
{
    /**
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     * @Column(name="id_ator", type="integer")
     */
    private $id;
    /**
     * @Column(name="primeiro_nome", type="string", length=45)
     */
    private $primeiroNome;
    /**
     * @Column(name="ultimo_nome", type="string", length=45)
     */
    private $ultimoNome;
    /**
     * @Column(name="data_atualizado", type="datetime", options={"default": "NOW()"})
     */
    private $ultimaAtualizacao;
}
