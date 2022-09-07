<?php

namespace App\Controller\Admin;

use App\Entity\CategoriesVAC;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategoriesVACCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CategoriesVAC::class;
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
