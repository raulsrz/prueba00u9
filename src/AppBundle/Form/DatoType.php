<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DatoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('direccion',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'Direccion'))
            ->add('web',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'web'))
            ->add('email',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'Email'))
            ->add('telefono',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'Telefono'))
            ->add('datobancario',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'Datos Bancarios'))
            ->add('titular',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'Titualr de la Cuenta'))
            ->add('iban',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'IBAN'))
            ->add('bic',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'BIC'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Dato'
        ));
    }
}
