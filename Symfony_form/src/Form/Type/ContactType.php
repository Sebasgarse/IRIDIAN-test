<?php

namespace App\Form\Type;

use App\Entity\Contacts;
use App\Entity\ContactTypes;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $list = [];
        foreach ($options['types'] as $value) {
            $list[$value->getName()] = $value->getId();
        }
        $builder
            ->add('name', TextType::class)
            ->add('surname', TextType::class)
            ->add('email', EmailType::class)
            ->add('telephone', TelType::class)
            ->add('contact_type', ChoiceType::class, [
                'choices' => $list,
                'expanded' => true
            ])
            ->add('message', TextareaType::class)
            ->add('Enviar', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contacts::class,
            'types' => [],
        ]);
        $resolver->setAllowedTypes('types', 'array');
    }
}
