<?php

namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Doctrine\Persistence\ObjectManager;
    use Symfony\Component\Routing\Annotation\Route;
    use Doctrine\ORM\EntityManagerInterface;
    use Symfony\Component\HttpFoundation\Response;
    use App\Repository\PersonneRepository;
    use Symfony\Component\Validator\Constraints\DateTime;
    use App\Repository\CategorieRepository;
    use Doctrine\Bundle\DoctrineBundle\Registry;

    use App\Entity\Personne;
    use App\Entity\Categorie;

    Use App\Form\CategorieType;

class MwangejiController extends AbstractController
{
    /**
     * @Route("/mwangeji", name="mwangeji")
     */
    public function index()
    {
        return $this->render('mwangeji/index.html.twig', [
            'Page_name' => 'login page',
        ]);
    }

    /**
     * @Route("/", name="login")
    */
    public function login()
    {
        return $this->render('/mwangeji/login.html.twig',
        ['title'=>'Connectez-vous']
        );
    }
    /**
    * @Route ("/patient" , name="patient")
    */
    public function patient()
    {
        return $this->render('/mwangeji/patient.html.twig');
    }

    /**
     * @Route ("/categorie" , name="categorie")
     * @param Request $_request
     * @param EntityManagerInterface $_manager
     */
    public function categorie(Request $_request, EntityManagerInterface $_manager)
    {
        $_cat = new Categorie();
        $_formCat = $this->createForm(CategorieType::class, $_cat);
        $_formCat->handleRequest($_request);
        if($_formCat->isSubmitted() && $_formCat->isValid()){
            $_cat = $_formCat->getData();
            $_manager->persist($_cat);
            $_manager->flush();
        }
        $_afficher = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        return $this->render('/mwangeji/categorie.html.twig',[
            'page_name'=>'categorie',
            'formulaire'=> $_formCat->createView(),
            '_Affichage'=> $_afficher
        ]);
    }
    /**
     * @Route("/personne",name="personne")
     * @param Request $_request
     * @param EntityManagerInterface $_manager
    */
    public function personne(Request $_request, EntityManagerInterface $_manager){
        $_personne = new Personne();
        $_date = \DateTime::createFromFormat('Y-m-d', $_request->request->get('date'));
        if($_request->request->count() > 0) {
            $_foreign = $this->getDoctrine()->getRepository(Categorie::class)->find($_request->request->get('categorie'));
            $_personne->setNom($_request->request->get('nom'))
                ->setPostNom($_request->request->get('post'))
                ->setPrenom($_request->request->get('prenom'))
                ->setLieuNaissance($_request->request->get('lieu'))->setDateNaissance($_date)
                ->setSexe($_request->request->get('genre'))->setCategorie($_foreign);
            $_manager->persist($_personne);
            $_manager->flush();
        }
        $_categorie = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        $_affichePersonne = $this->getDoctrine()->getRepository(Personne::class)->findAll();
        return $this->render('mwangeji/personne.html.twig',[
            'page_name'=>'personnelles',
            'categorie'=>$_categorie,
            'personne'=>$_affichePersonne,
        ]);
    }
}
