<?php


namespace Faker\Populator;


use Faker\Config\Format;
use Faker\Factory;
use Faker\Generator;
use Faker\Guesser\ConfigGuesser;
use Faker\Guesser\Name;
use PHPUnit\Framework\TestCase;

class GrandParent {
    protected $id;
    protected $name;
    protected $firstName;
    protected $origin;
    protected $unused;
    public $note;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param mixed $origin
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    /**
     * @return mixed
     */
    public function getUnused()
    {
        return $this->unused;
    }

    /**
     * @param mixed $unused
     */
    public function setUnused($unused)
    {
        $this->unused = $unused;
    }
}

class Father extends GrandParent {
    protected $job;

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
    }
}

class Child extends Father {
    protected $phone;
    protected $unsettable;

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getUnsettable()
    {
        return $this->unsettable;
    }
}

class ObjectPopulatorTest extends TestCase
{
    /** @var Generator */
    private $generator;

    /** @var ConfigGuesser */
    private $guesser;

    /** @var ObjectPopulator */
    private $populator;

    protected function setUp()
    {
        parent::setUp();
        $generator = Factory::create();
        $generator->seed(1234);
        $this->generator = $generator;

        $guesser = new ConfigGuesser($this->generator);
        $guesser->addFormat(ConfigGuesser::WILDCARD, 'id', new Format('uuid'));
        $guesser->addFormat('Faker\Populator\GrandParent', 'name', new Format('lastName'));
        $guesser->addFormat('Faker\Populator\GrandParent', 'origin', new Format('country'));
        $guesser->addFormat('GrandParent', 'unused', new Format('sentence'));
        $guesser->addFormat('Faker\Populator\Father', 'firstName', new Format('firstNameMale'));
        $guesser->addFormat('Faker\Populator\Father', 'origin', new Format('city'));
        $guesser->addFormat('Faker\Populator\Father', 'job', new Format('company'));
        $guesser->addFormat('Faker\Populator\Child', 'firstName', new Format('firstNameFemale'));
        $guesser->addFormat('Faker\Populator\Child', 'job', new Format('jobTitle'));
        $guesser->addFormat('Faker\Populator\Child', 'phone', new Format('phoneNumber'));
        $guesser->addFormat('Faker\Populator\Child', 'note', new Format('sentence'));
        $this->guesser = $guesser;

        $this->populator = new ObjectPopulator($this->generator, $this->guesser, new Name($this->generator));
    }

    /**
     */
    public function testPopulateGrandParent()
    {
        $grandParent = new GrandParent();

        $this->populator->populate($grandParent);
        self::assertEquals('66529e01-d113-3473-8d6f-9e11e09332ea', $grandParent->getId(), "Mismatch found while populating id");
        self::assertEquals('Mueller', $grandParent->getName(), "Mismatch found while populating name");
        self::assertEquals('Justen', $grandParent->getFirstName(), "Mismatch found while populating firstName");
        self::assertEquals('Myanmar', $grandParent->getOrigin(), "Mismatch found while populating origin");
        self::assertNull($grandParent->getUnused(), "unused property has been populated");
        self::assertNull($grandParent->note, "note property has been populated");
    }

    /**
     */
    public function testPopulateFather()
    {
        $father = new Father();

        $this->populator->populate($father);
        self::assertEquals('57357f37-0ea3-38e5-8a6c-9de9d06e75fd', $father->getId(), "Mismatch found while populating id");
        self::assertEquals('Emard', $father->getName(), "Mismatch found while populating name");
        self::assertEquals('Orville', $father->getFirstName(), "Mismatch found while populating firstName");
        self::assertEquals('Collinschester', $father->getOrigin(), "Mismatch found while populating origin");
        self::assertEquals('Kunze, Mueller and Dibbert', $father->getJob(), "Mismatch found while populating job");
        self::assertNull($father->getUnused(), "unused property has been populated");
        self::assertNull($father->note, "note property has been populated");
    }

    /**
     */
    public function testPopulateChild()
    {
        $child = new Child();

        $this->populator->populate($child);
        self::assertEquals('fefb079f-5b81-3552-831f-ed3f89669781', $child->getId(), "Mismatch found while populating id");
        self::assertEquals('Corwin', $child->getName(), "Mismatch found while populating name");
        self::assertEquals('Melody', $child->getFirstName(), "Mismatch found while populating firstName");
        self::assertEquals('Douglasfort', $child->getOrigin(), "Mismatch found while populating origin");
        self::assertEquals('Railroad Inspector', $child->getJob(), "Mismatch found while populating job");
        self::assertEquals('561.662.7713 x5991', $child->getPhone(), "Mismatch found while populating phone");
        self::assertEquals('Quo sed fugit facilis perferendis dolores molestias ipsam sit.', $child->note, "Mismatch found while populating note");
        self::assertNull($child->getUnused(), "unused property has been populated");
        self::assertNull($child->getUnsettable(), "unsettable property has been populated");
    }

    public function testPopulateUnsettablePropertyIsIgnored()
    {
        $this->guesser->addFormat('Faker\Populator\Child', 'unsettable', new Format('sentence'));

        $child = new Child();

        $this->populator->populate($child);
        self::assertEquals('92f7c094-3063-3c79-bbfc-7e096d42f6dd', $child->getId(), "Mismatch found while populating id");
        self::assertEquals('Nolan', $child->getName(), "Mismatch found while populating name");
        self::assertEquals('Adell', $child->getFirstName(), "Mismatch found while populating firstName");
        self::assertEquals('South Everett', $child->getOrigin(), "Mismatch found while populating origin");
        self::assertEquals('Service Station Attendant', $child->getJob(), "Mismatch found while populating job");
        self::assertEquals('561.662.7713 x5991', $child->getPhone(), "Mismatch found while populating phone");
        self::assertEquals('Sed fuga aspernatur natus earum.', $child->note, "Mismatch found while populating note");
        self::assertNull($child->getUnused(), "unused property has been populated");
        self::assertNull($child->getUnsettable(), "unsettable property has been populated");
    }

    /**
     * @dataProvider invalidObjectProvider
     * @param mixed $value
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Failed to retrieve class hierarchy. Make sure you passed a valid object
     *
     */
    public function testPopulateInvalidObjectThrowsException($value)
    {
        $this->populator->populate($value);
    }

    public function invalidObjectProvider()
    {
        return array(
            array(1),
            array(1.2),
            array(false),
            array('string'),
            array(array('name', 'firstName')),
            array(array('name' => '', 'firstName' => '')),
            array(null)
        );
    }
}
