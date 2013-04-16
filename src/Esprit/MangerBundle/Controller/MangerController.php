<?php
 

 
namespace Esprit\MangerBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Esprit\MangerBundle\Entity\Manger;
use Esprit\MangerBundle\Entity\Image;
use Esprit\MangerBundle\Form\MangerType;
use JMS\SecurityExtraBundle\Annotation\Secure;
 
class MangerController extends Controller
{
    
  public function indexAction()
  {
      // Pour récupérer la liste de tous les manager : on utilise findAll()
    $manager = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('EspritMangerBundle:Manger')
                     ->findAll();
 
    // L'appel de la vue ne change pas
    
     return $this->render('EspritMangerBundle:Manger:index.html.twig', array(
  'managers' =>$manager
));
  }
  public function voirAction($id)
  {
    
  // On récupère le repository
  $repository = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('EspritMangerBundle:Manger');
 
  // On récupère l'entité correspondant à l'id $id
  $manager = $repository->find($id);
 
  // $manager est donc une instance de Esprit\MangerBundle\Entity\Manager
 
  // Ou null si aucun manager n'a été trouvé avec l'id $id
  if($manager === null)
  {
    throw $this->createNotFoundException('Manager[id='.$id.'] inexistant.');
  }
     
  return $this->render('EspritMangerBundle:Manger:voir.html.twig', array(
    'manager' => $manager
  ));
     
    
  }
   
  public function ajouterAction()
  {
      $manager = new Manger;
    
  // J'ai raccourci cette partie, car c'est plus rapide à écrire !
    $form = $this->createForm(new MangerType, $manager);
    // On récupère la requête
    $request = $this->get('request');
 
    // On vérifie qu'elle est de type POST
    if ($request->getMethod() == 'POST') {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $manager contient les valeurs entrées dans le formulaire par le visiteur
      $form->bind($request);
 
      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
      if ($form->isValid()) {
          
        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($manager);
        $em->flush();
 
        // On redirige vers la page de visualisation de manager nouvellement créé
        return $this->redirect($this->generateUrl('espritmanager_accueil'));
      }
    }
 
    // À ce stade :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
 
    return $this->render('EspritMangerBundle:Manger:ajouter.html.twig', array(
      'form' => $form->createView(),
    ));
  
  }
  public function modifierAction(Manger $manager)
  {
     
// On utiliser le ArticleEditType
    $form = $this->createForm(new MangerType(), $manager);
 
    $request = $this->getRequest();
 
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
 
      if ($form->isValid()) {
        // On enregistre manager
        $em = $this->getDoctrine()->getManager();
        $em->persist($manager);
        $em->flush();
 
        // On définit un message flash
        $this->get('session')->getFlashBag()->add('info', 'manager bien modifié');
 
        return $this->redirect($this->generateUrl('espritmanager_voir', array('id' => $manager->getId())));
      }
    }
 
    return $this->render('EspritMangerBundle:Manger:modifier.html.twig', array(
      'form'    => $form->createView(),
      'manager' => $manager
    ));
  }
 
  public function supprimerAction(Manger $manager)
  {
      
     
      // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'article contre cette faille
    $form = $this->createFormBuilder()->getForm();
 
    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
 
      if ($form->isValid()) {
        // On supprime manager
        $em = $this->getDoctrine()->getManager();
        $em->remove($manager);
        $em->flush();
 
        // On définit un message flash
        $this->get('session')->getFlashBag()->add('info', 'Manager bien supprimé');
 
        // Puis on redirige vers l'accueil
        return $this->redirect($this->generateUrl('espritmanager_accueil'));
      }
    }
 
    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('EspritMangerBundle:Manger:supprimer.html.twig', array(
      'manager' => $manager,
      'form'    => $form->createView()
    ));
   
  }

}
?>