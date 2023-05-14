<?php

namespace App\Controller\Admin;

use App\Entity\Outlet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OutletCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Outlet::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
