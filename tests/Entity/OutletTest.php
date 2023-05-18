<?php

use App\Entity\Outlet;
use App\Entity\Products;
use PHPUnit\Framework\TestCase;

class OutletTest extends TestCase
{
    public function testGetPercentOff()
    {
        $outlet = new Outlet();
        $percentOff = 20;
        $outlet->setPercentOff($percentOff);

        $this->assertEquals($percentOff, $outlet->getPercentOff());
    }

    public function testGetStartDate()
    {
        $outlet = new Outlet();
        $startDate = new \DateTime('2023-01-01');
        $outlet->setStartDate($startDate);

        $this->assertEquals($startDate, $outlet->getStartDate());
    }

    public function testGetEndDate()
    {
        $outlet = new Outlet();
        $endDate = new \DateTime('2023-12-31');
        $outlet->setEndDate($endDate);

        $this->assertEquals($endDate, $outlet->getEndDate());
    }

    public function testGetProducts()
    {
        $outlet = new Outlet();
        $product = new Products();

        $outlet->setProducts($product);

        $this->assertInstanceOf(Products::class, $outlet->getProducts());
        $this->assertEquals($outlet, $product->getOutlet());
    }

    public function testSetProducts()
    {
        $outlet = new Outlet();
        $product1 = new Products();
        $product2 = new Products();

        $outlet->setProducts($product1);
        $outlet->setProducts($product2);

        $this->assertEquals($outlet, $product2->getOutlet());
        $this->assertNull($product1->getOutlet());
    }
}

