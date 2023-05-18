<?php

use App\Entity\Categories;
use App\Form\CategoriesType;
use Symfony\Component\Form\Test\TypeTestCase;

class CategoriesTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        $formData = [
            'name' => 'Category Name',
        ];

        $categories = new Categories();

        $form = $this->factory->create(CategoriesType::class, $categories);
        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($categories, $form->getData());
        $this->assertEquals('Category Name', $categories->getName());
    }
}
