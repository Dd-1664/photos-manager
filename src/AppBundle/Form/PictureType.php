<?php

namespace AppBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

// TODO: ADDING FIELDS
class PictureType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add("pictureFile", FileType::class, [
            "label" => "Upload to DB",
            "attr" => ["class" => "btn"]
        ])

        ->add("submit", SubmitType::class, [
            "label" => "Envoyer",
            "attr" => ["class" => "btn"]
        ]);
    }
}
