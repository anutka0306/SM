<?php

namespace App\Controller\Admin;

use App\Entity\Brand;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CodeEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;


class BrandCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Brand::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Марка')
            ->setEntityLabelInPlural('Марки')
            ->setSearchFields(['id','brand_id','path','name'])
            ->setDefaultSort(['path'=>'ASC'])
            ->setPaginatorPageSize(100);
    }




    public function configureFields(string $pageName): iterable
    {
        return [
            Field::new('id','ID')->onlyOnIndex(),
            TextField::new('name', 'Название'),
            TextField::new('path','URL'),
            Field::new('brand_id', 'ID Марки'),
            TextField::new('h1', 'H1'),
            TextField::new('meta_title', 'Title')->hideOnIndex(),
            TextEditorField::new('meta_description', 'Description')->hideOnIndex(),
            CodeEditorField::new('text', 'Текст')->hideOnIndex(),
            BooleanField::new('published', 'Опубликовано'),
            NumberField::new('rating_value', 'Рейтинг')->hideOnIndex(),
            NumberField::new('rating_count', 'Кол-во голосов')->hideOnIndex(),
            DateTimeField::new('modify_date', 'Дата обновления')->hideOnIndex(),
            AssociationField::new('pages', 'Услуги'),


        ];
    }

}
