<?php 

use App\Entity\Categories;
use App\Entity\Products;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

class CategoriesTest extends TestCase
{
    public function testGetName()
    {
        $category = new Categories();
        $name = 'Test Category';
        $category->setName($name);

        $this->assertEquals($name, $category->getName());
    }

    public function testGetProducts()
    {
        $category = new Categories();
        $product1 = new Products();
        $product2 = new Products();

        $category->addProduct($product1);
        $category->addProduct($product2);

        $products = $category->getProducts();

        $this->assertInstanceOf(ArrayCollection::class, $products);
        $this->assertEquals(2, $products->count());
        $this->assertTrue($products->contains($product1));
        $this->assertTrue($products->contains($product2));
    }

    public function testRemoveProduct()
    {
        $category = new Categories();
        $product1 = new Products();
        $product2 = new Products();

        $category->addProduct($product1);
        $category->addProduct($product2);

        $category->removeProduct($product1);

        $products = $category->getProducts();

        $this->assertInstanceOf(ArrayCollection::class, $products);
        $this->assertEquals(1, $products->count());
        $this->assertFalse($products->contains($product1));
        $this->assertTrue($products->contains($product2));
    }
}

