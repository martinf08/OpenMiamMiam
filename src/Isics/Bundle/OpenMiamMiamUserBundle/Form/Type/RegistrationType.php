<?php

/*
 * This file is part of the OpenMiamMiam project.
 *
 * (c) Isics <contact@isics.fr>
 *
 * This source file is subject to the AGPL v3 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Isics\Bundle\OpenMiamMiamUserBundle\Form\Type;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends BaseType
{
    /**
     * @see AbstractType
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('firstname', 'text')
                ->add('lastname', 'text')
                ->add('address1', 'text')
                ->add('address2', 'text', array('required' => false))
                ->add('zipcode', 'text')
                ->add('city', 'text');
    }

    /**
     * @see AbstractType
     */
    public function getName()
    {
        return 'open_miam_miam_user_registration';
    }
}