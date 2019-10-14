<?php
/**
 * Created by PhpStorm.
 * User: Djunehor
 * Date: 10/14/2019
 * Time: 4:40 PM
 */

namespace Faker\Test\Provider\ng_NG;


use PHPUnit\Framework\TestCase;

class MobileCarrierTest extends TestCase {

	private $faker;
	private $nigerianCarriers;
	private $locale = 'en_NG';

	public function setUp() {
		$this->nigerianCarriers = array(
			'Airtel',
			'9mobile',
			'Globacom',
			'MTN Nigeria',
			'Ntel',
			'Multilinks',
			'Visafone',
			'ZoomMobile',
			'Smile'
		);
		$this->faker            = \Faker\Factory::create( $this->locale );
	}

	public function testNigerianMobileCarrier() {
		$mobileCarrier = $this->faker->carrier();
		$this->assertContains( $mobileCarrier, $this->nigerianCarriers, "Invalid mobile carrier returned for " . $this->locale );
	}
}