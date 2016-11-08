<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CategoryAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        #These lines configure which fields are displayed on the edit and create actions. The FormMapper behaves similar to the FormBuilder of the Symfony Form component;
        $formMapper->add('name', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        #This method configures the filters, used to filter and sort the list of models;
        $datagridMapper->add('name');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        #Here you specify which fields are shown when all models are listed (the addIdentifier() method means that this field will link to the show/edit page of this particular model).
        $listMapper->addIdentifier('name');
    }
}