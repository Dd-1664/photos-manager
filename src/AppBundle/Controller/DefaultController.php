<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Picture;
use AppBundle\Form\PictureType;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // DISPLAY BIG PICTURES
        // $bigPics = $this->getDoctrine()
        //     ->getRepository(Picture::class)
        //     ->find($id);

        // if ($bigPics == null or $bigPics == '') {
        //     throw $this->createNotFoundException('image doesn\'t exist');
        // }

        // CREATE & DISPLAY FORM
        $photos = new Picture();

        $form = $this->createForm(PictureType::class, $photos);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {

            $photos = $form->getData();

            $em = $this->getDoctrine()->getManager();

            $em->persist($photos);

            $em->flush();

            $this->addFlash("success", "Image uploaded");
        }

        $template = $this->render(
            'AppBundle:Default:default.html.twig',
            [
                "form" => $form->createView(),
                // "BigPictures" => $bigPics,
            ]
        );
        return $template;
    }
}
