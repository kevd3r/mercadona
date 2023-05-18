<?php

use App\Entity\Categories;
use App\Entity\Outlet;
use App\Entity\Products;
use PHPUnit\Framework\TestCase;

class ProductsTest extends TestCase
{   
    public function testGetName()
    {
        $product = new Products();
        $name = 'Product Name';
        $product->setName($name);

        $this->assertEquals($name, $product->getName());
    }

    public function testGetDescription()
    {
        $product = new Products();
        $description = 'Description';
        $product->setDescription($description);

        $this->assertEquals($description, $product->getDescription());
    }

    public function testGetPrice()
    {
        $product = new Products();
        $price = '10.99';
        $product->setPrice($price);

        $this->assertEquals($price, $product->getPrice());
    }

    public function testGetImage()
    {
        $product = new Products();
        $image = 'Image';
        $product->setImage($image);

        $this->assertEquals($image, $product->getImage());
    }

    public function testGetCategory()
    {
        $product = new Products();
        $category = new Categories();

        $product->setCategory($category);

        $this->assertInstanceOf(Categories::class, $product->getCategory());
    }

    public function testGetOutlet()
    {
        $product = new Products();
        $outlet = new Outlet();

        $product->setOutlet($outlet);

        $this->assertInstanceOf(Outlet::class, $product->getOutlet());
    }

    public function testGetImageName()
    {
        $product = new Products();
        $imageName = 'image.jpg';
        $product->setImageName($imageName);

        $this->assertEquals($imageName, $product->getImageName());
    }

    public function testGetUpdatedAt()
    {
        $product = new Products();
        $updatedAt = new \DateTimeImmutable('2023-01-01');
        $product->setUpdatedAt($updatedAt);

        $this->assertEquals($updatedAt, $product->getUpdatedAt());
    }
}

