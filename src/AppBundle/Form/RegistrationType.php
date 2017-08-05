<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use libphonenumber\PhoneNumberFormat;
use Misd\PhoneNumberBundle\Form\Type\PhoneNumberType;

class RegistrationType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, array(
                    'data' => 'walter',
                    'label' => 'last name'
                ))
                ->add('firstName', TextType::class, array(
                    'required' => false,
                    'empty_data' => 'gordon',
                    'label' => 'first name'
                ))
                ->add('gender', ChoiceType::class, array(
                    'choices' => array(
                        'male' => 'male',
                        'female' => 'female'
                    ),
                    'choices_as_values' => true, 'multiple' => false, 'expanded' => true
                ))
                ->add('birth', BirthdayType::class, array(
                        /* 'widget' => 'single_text',
                          'years' => range(2000, 2030),
                          'attr' => array(
                          'class' => 'js-datepicker'
                          ),
                          'html5' => false,
                          'label' => 'birth date' */
                ))
                /* ->add('phone', IntegerType::class, array(
                  'label' => 'Phone Number'
                  )) */
                ->add('num', IntegerType::class)
                ->add('rue', TextType::class)
                ->add('code', TextType::class, array(
                    'required' => false))
                ->add('ville', TextType::class, array(
                    'required' => false))
              /*   ->add('phone', PhoneNumberType::class, array(
                  'widget' => PhoneNumberType::WIDGET_COUNTRY_CHOICE,
                  'country_choices' => array('GB', 'JE', 'FR', 'US'),
                  'preferred_country_choices' => array('FR', 'JE'),
                  'required' => false))
               ->add('phone', PhoneNumberType::class, array(
                    'default_region' => 'GB',
                    'format' => PhoneNumberFormat::NATIONAL))*/
                 ->add('phone', NumberType::class)
                ->add('pays', CountryType::class);
    }

    public function getParent() {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix() {
        return 'app_user_registration';
    }

}
