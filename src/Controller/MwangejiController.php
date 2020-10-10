<?php

namespace App\Controller;

    use App\Entity\BonMedical;
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
    use App\Entity\Patient;
    use App\Entity\TypePatient;
    use App\Entity\Privee;
    use App\Entity\Abonne;

    Use App\Form\CategorieType;
    use App\Form\Type;
    use App\Form\BonMedicalType;
    use App\Form\PatientType;

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
     * @Route ("/categorie" , name="categorie")
     * @param Request $_request
     * @param EntityManagerInterface $_manager
     * @return Response
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
     * @return Response
    */
    public function personne(Request $_request, EntityManagerInterface $_manager){
        dump($_request);
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
    /**
     * @Route ("/patient" , name="patient")
     * @param Request $_request
     * @param EntityManagerInterface $_manager
     * @return Response
     */
    public function patient(Request $_request, EntityManagerInterface $_manager)
    {   $_date = \DateTime::createFromFormat('Y-m-d', $_request->request->get('date'));
        $_patient = new Patient();
        $_people = new Personne();
        $_type = new TypePatient();
        $_abonne = new Abonne();
        $_bonMedical = new BonMedical();
        $_privee = new Privee();
        $_cat = new Categorie();
        dump($_request);
        if($_request->request->count() > 0) {
            $_typeId = $this->getDoctrine()->getRepository(TypePatient::class)->find($_request->request->get('type'));
            $_privateId = $this->getDoctrine()->getRepository(Privee::class)->find($_request->request->get('type'));
            $_publicId = $this->getDoctrine()->getRepository(Abonne::class)->find($_request->request->get('type'));
            $_etrange = $this->getDoctrine()->getRepository(Categorie::Class)->find(4);
            $_people->setNom($_request->request->get('nom'))
                    ->setPostNom($_request->request->get('post'))
                    ->setPrenom($_request->request->get('prenom'))
                    ->setCategorie($_etrange)
                    ->setLieuNaissance($_request->request->get('lieu'))
                    ->setDateNaissance($_date)->setSexe($_request->request->get('genre'));
            $_manager->persist($_people);
            $_patient->setNumFiche($_request->request->get('fiche'))
                    ->setPersonne($_people)
                    ->setType($_typeId);
            $_manager->persist($_patient);
            $_privee->setAdresse($_request->request->get('adresseprive'))
                    ->setDescription($_request->request->get('descr'));
            $_bonMedical->setEntreprise($_request->request->get('entreprise'))
                        ->setMatAgent($_request->request->get('matricule'))
                        ->setNomAgent($_request->request->get('agent'))
                        ->setNumBon($_request->request->get('bon'));
            $_manager->persist($_bonMedical);
            $_abonne->setAdresse($_request->request->get('adresseabone'))
                    ->setBonMedical($_bonMedical);
            $_type->setAbonne($_publicId)->setPrivee($_privateId);
            $_manager->persist($_type);
            $_manager->flush();
        }

        return $this->render('/mwangeji/patient.html.twig',[
            'page_name'=>'Patient',
        ]);
    }
    /**
     * @Route ("/oldpatient" , name="oldpatient")
     * @param Request $_request
     * @param EntityManagerInterface $_manager
     * @return Response
     */
    public function oldpatient(Request $_request, EntityManagerInterface $_manager){

        return $this->render('/mwangeji/oldpatient.html.twig',[
            'page_name'=>'Old Patient',
        ]);
    }
    /**
     * @Route ("/typepatient" , name="typepatient")
     * @param Request $_request
     * @param EntityManagerInterface $_manager
     * @return Response
     */
    public function TypePatient(Request $_request, EntityManagerInterface $_manager){

        $_type = new TypePatient();
        $_formType = $this->createForm(Type::class, $_type);
        $_formType->handleRequest($_request);
        if($_formType->isSubmitted() && $_formType->isValid()){
            $_cat = $_formType->getData();
            $_manager->persist($_cat);
            $_manager->flush();
        }
        $_afficher = $this->getDoctrine()->getRepository(TypePatient::class)->findAll();
        return $this->render('/mwangeji/categorie.html.twig',[
            'page_name'=>'Type des Patients',
            'formulaire'=> $_formType->createView(),
            '_Affichage'=> $_afficher
        ]);
    }

}
