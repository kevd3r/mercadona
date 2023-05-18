<?php

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Form\Test\TypeTestCase;
use App\Form\ProductsType;
use App\Entity\Products;

class ProductsTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        $formData = [
            'name' => 'Product 1',
            'description' => 'Description',
            'price' => 10.99,

        ];

        $product = new Products();

        $form = $this->factory->create(ProductsType::class, $product);
        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($product, $form->getData());

    }
}
