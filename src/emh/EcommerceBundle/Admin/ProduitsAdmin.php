<?php
namespace emh\EcommerceBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\HttpFoundation\File\File;

class ProduitsAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
          
        // get the current Image instance
        $article = $this->getSubject();
        $image = $article->getAbsoluteImage();
    
        // use $fileFieldOptions so we can add other options to the field
        $fileFieldOptions = array('required' => false);
       
       
            if ($image ) {

            // add a 'help' option containing the preview's img tag
            $fileFieldOptions['help'] = '<img src="/EMHaveclesoleil/web/images/'.$article->getImage().'" class="admin-preview" />';
         
               
        }   
        $formMapper
           ->add('nomFr')
            ->add('nomEn')
            ->add('descriptionFr')
            ->add('descriptionEn')
            ->add('file', 'file',$fileFieldOptions)   
            ->add('prix')
               ->add('onoff', 'checkbox', array('label'=> 'en vente?',
                                            'required'=>false, ))
                
                    ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nomFr')
            ->add('nomEn')
            ->add('descriptionFr')
            ->add('descriptionEn')
            ->add('image')
            ->add('prix')
            ->add('onoff')
             
            
         
            
                          

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nomFr')
            ->addIdentifier('nomEn')
            ->add('descriptionFr')
            ->add('descriptionEn')
            ->add('image')
            ->add('prix')
            ->add('onoff')
      
            
        ;
    }
}