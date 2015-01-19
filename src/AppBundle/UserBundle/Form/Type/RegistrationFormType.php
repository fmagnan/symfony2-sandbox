<?php

namespace AppBundle\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\User;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->add('roles', 'choice', [
            'choices' => [User::ROLE_DEFAULT => 'simple', User::ROLE_SUPER_ADMIN => 'admin'],
            'required' => true,
            'multiple' => true
        ]);
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}