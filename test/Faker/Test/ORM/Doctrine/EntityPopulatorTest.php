<?php

namespace Faker\Test\ORM\Doctrine;

use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\ORM\Tools\SchemaTool;
use Faker\Factory;
use Faker\ORM\Doctrine\Populator;
use Faker\ORM\Doctrine\EntityPopulator;

class PopulatorTest extends DoctrineOrmTestCase
{
    const ENTITY_A = 'Faker\Test\ORM\Doctrine\Fixtures\A';
    const ENTITY_B = 'Faker\Test\ORM\Doctrine\Fixtures\B';
    private $em;

    public function setUp()
    {
        $this->em = self::createTestEntityManager();

        $schemaTool = new SchemaTool($this->em);
        $classes = array(
            $this->em->getClassMetadata(self::ENTITY_A),
            $this->em->getClassMetadata(self::ENTITY_B),
        );

        try {
            $schemaTool->dropSchema($classes);
            $schemaTool->dropDatabase();
        } catch (\Exception $e) {}

        try {
            $schemaTool->createSchema($classes);
        } catch (\Exception $e) {
            $this->markTestSkipped('Unable to create the database schema.');
        }
    }
    public function testExecute()
    {
        $generator = Factory::create('en_US');

        $populator = new Populator($generator, $this->em);
        $populator->addEntity(
            new EntityPopulator($this->em->getClassMetadata(self::ENTITY_B)), 2
        );
        $populator->addEntity(
            new EntityPopulator($this->em->getClassMetadata(self::ENTITY_A)), 1
        );

        $insertedEntities = $populator->execute();

        $this->assertArrayHasKey(self::ENTITY_A, $insertedEntities);
        $this->assertArrayHasKey(self::ENTITY_B, $insertedEntities);

        $this->assertEquals(2, count($insertedEntities[self::ENTITY_B]));
        $this->assertEquals(1, count($insertedEntities[self::ENTITY_A]));

        // This should not be null as B has been added before A
        $this->assertNotNull($insertedEntities[self::ENTITY_A][0]->b);
    }
}