<?php

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class BlogPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
    	#These lines configure which fields are displayed on the edit and create actions. The FormMapper behaves similar to the FormBuilder of the Symfony Form component;
    	 // Fields to be shown on create/edit forms
    	$formMapper
    		->with('Blog Post', ['class' => 'col-md-9'])
	        ->add('title', 'text')
	        ->add('body', 'textarea')
	        ->end()
	        ->with('Category', ['class' => 'col-md-3'])
        	->add('category', 'sonata_type_model')
	        ->end()
         ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        #This method configures the filters, used to filter and sort the list of models;
        $datagridMapper
        			   ->add('title')
					   ->add('category', null, [], 'entity',[
					   		'class' => 'AppBundle:Category',
					   		
					   	])
						
						;
    }


     // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
    	#Here you specify which fields are shown when all models are listed (the addIdentifier() method means that this field will link to the show/edit page of this particular model).
        $listMapper->addIdentifier('title')
			       #->add('body')
			       ->addIdentifier('category.name')
			       ->add('draft')
			       ;
    }


    // Fields to be shown on show action
    /*protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
           ->addIdentifier('title')
           ->addIdentifier('category.name')
          # ->add('slug')
           #->add('author')
       ;
    }*/

}