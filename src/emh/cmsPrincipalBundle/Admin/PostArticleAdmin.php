<?php


namespace emh\cmsPrincipalBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\HttpFoundation\File\File;



class PostArticleAdmin extends Admin
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
           ->add('nomFr', 'text', array('label' => 'titre FR'))
           ->add('nomEn', 'text', array('label' => 'titre EN'))
           ->add('texteFr', 'text', array('label' => 'texte FR'))
           ->add('texteEn', 'text', array('label' => 'texte EN'))
           ->add('file', 'file',$fileFieldOptions)                                  
                                       
           ->add('rubriques', 'entity', array('class'  =>'emhcmsPrincipalBundle:Rubriques',
                                          'property' => 'nomFr'))
          
           
                
                    ;
        
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           ->add('nomFr')
           ->add('nomEn')
           ->add('texteFr')
           ->add('texteEn')
           ->add('rubriques')
          ->add('image')
             
            
         
            
                          

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nomFr')
            ->addIdentifier('nomEn')
            ->add('texteFr')
            ->add('texteEn')
            ->addIdentifier('rubriques')
           ->add('image')

       
      
            
        ;
    }
}