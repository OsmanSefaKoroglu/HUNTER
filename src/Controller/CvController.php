<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cv;
use App\Form\CvFormType;
use App\Repository\CvRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;

class CvController extends AbstractController
{
    private $em;
    private $CvRepository;
    public function __construct(EntityManagerInterface $em, CvRepository $CvRepository)
    {
        $this->em = $em;
        $this->CvRepository = $CvRepository;
    }
    #[Route('/cv/delete/{id}', methods: ['GET', 'DELETE'], name: 'delete_cv')]
    public function delete($id): Response
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN',NULL,'BURAYA ERİŞİM YETKİNİZ YOK');
        $this->checkLoggedInUser($id);
        $cv = $this->CvRepository->find($id);
        $this->em->remove($cv);
        $this->em->flush();

        return $this->redirectToRoute('home');
    }
    #[Route('/cv/application', name: 'create_cv')]
    public function create(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null ,'buraya erişim yetkiniz yok');

        $cv= new Cv();
        $form = $this->createForm(CvFormType::class, $cv);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form ->isValid()){
            $newCv=$form->getData();

            $imagePath=$form->get('imagePath')->getData();
            if($imagePath){
                $newFileName=uniqid().'.'. $imagePath->guessExtension();
                try{
                    $imagePath->move(
                        $this->getParameter('kernel.project_dir').'/public/uploads',
                        $newFileName
                    );
                }catch(FileException $e){
                    return new Response($e->getMessage());

                }
                $newCv->setImagePath('/uploads/'.$newFileName);
            }
            $this->em->persist($newCv);
            $this->em->flush();

            return $this->redirectToRoute('home');
        }


        return $this->render('cv/application.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
