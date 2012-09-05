<?php

namespace Faker\Test\ORM\Doctrine\Fixtures;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="table_b")
 */
class B
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $name;

    /**
     * @ORM\OneToOne(targetEntity="Faker\Test\ORM\Doctrine\Fixtures\A", mappedBy="b")
     */
    public $a;
}