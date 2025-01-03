<?php   

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Votre nom'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['placeholder' => 'Votre adresse email'],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'attr' => ['placeholder' => 'Votre message', 'rows' => 6],
            ]);
    }
}
