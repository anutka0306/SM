<?php

namespace App\Controller\Admin;

use App\Entity\Content;
use App\Entity\Model;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CodeEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class ModelCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Model::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Модель')
            ->setEntityLabelInPlural('Модели')
            ->setPaginatorPageSize(100);
    }


    public function configureFields(string $pageName): iterable
    {
        $pages = array();
        if(isset($_GET['entityId'])){
            $model = $this->getDoctrine()->getManager()->getRepository(Content::class)->findBy(['id' => $_GET['entityId']]);

            $pages = $model = $this->getDoctrine()->getManager()->getRepository(Content::class)->findBy(['model_id' => $model[0]->getModelId()]);
        }
        $parents = $this->getDoctrine()->getManager()->getRepository(Content::class)->findBy(['parent' => 36]);

        return [
            Field::new('id', 'ID')->onlyOnIndex(),
            AssociationField::new('priceModel', 'Модель прайса'),
            TextField::new('name', 'Название'),
            TextField::new('path', 'Алиас'),
            AssociationField::new('parent', 'Родитель')->onlyWhenUpdating(),
            AssociationField::new('parent', 'Родитель')->setFormTypeOption('choices', $parents)->onlyWhenCreating(),
            TextField::new('h1', 'H1')->hideOnIndex(),
            TextField::new('metaTitle', 'Title')->hideOnIndex(),
            TextField::new('meta_description', 'Description')->hideOnIndex(),
            CodeEditorField::new('text', 'Текст')->hideOnIndex(),
            BooleanField::new('published', 'Активна'),
            NumberField::new('rating_value', 'Рейтинг')->hideOnIndex(),
            NumberField::new('rating_count', 'Кол-во голосов')->hideOnIndex(),
            DateTimeField::new('modify_date', 'Дата обновления')->hideOnIndex(),
            AssociationField::new('pages', 'Услуги')->setFormTypeOption('choices', $pages)->onlyWhenUpdating(),

        ];
    }

}
