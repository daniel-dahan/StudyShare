<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UploadType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('titre')
        ->add('description', 'textarea', array(
            'required' => false,
        ))
        ->add('category')
        ->add('file', 'file')
    ;


}
}