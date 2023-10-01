<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nombre',null, array('attr'=>array('class'=>'form-control help-block')))
            ->add('correo','Symfony\Component\Form\Extension\Core\Type\EmailType', array('attr'=>array('class'=>'form-control')))
            ->add('password','Symfony\Component\Form\Extension\Core\Type\RepeatedType',array(
                'type'=>'Symfony\Component\Form\Extension\Core\Type\PasswordType',
                'invalid_message'=>'Las dos contraseñas deben coincidir',
                'first_options'=>array('label'=>'Contraseña','attr'=>array('class'=>'form-control','required'=>'')),
                'second_options'=>array('label'=>'Repite Contraseña','attr'=>array('class'=>'form-control','required'=>'')),
                'required'=>false,
            ))
            //->add('salt')
            //->add('estado')
            ->add('rolid',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'Rol'))

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usuario'
        ));
    }
}
