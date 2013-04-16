<?php
 

 
namespace Esprit\CollaborateurBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Esprit\CollaborateurBundle\Entity\Collaborateur;
use Esprit\MangerBundle\Entity\Image;
use Esprit\CollaborateurBundle\Form\CollaborateurType;
use JMS\SecurityExtraBundle\Annotation\Secure;
 
class CollaborateurController extends Controller
{
    
  public function indexAction()
  {
      // Pour récupérer la liste de tous les manager : on utilise findAll()
    $collaborateur = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('EspritCollaborateurBundle:Collaborateur')
                     ->findAll();
 
    // L'appel de la vue ne change pas
    
     return $this->render('EspritCollaborateurBundle:Collaborateur:index.html.twig', array(
  'collaborateurs' =>$collaborateur
));
  }
  public function voirAction($id)
  {
    
  // On récupère le repository
  $repository = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('EspritCollaborateurBundle:Collaborateur');
 
  // On récupère l'entité correspondant à l'id $id
  $collaborateur = $repository->find($id);
 
  // $manager est donc une instance de Esprit\MangerBundle\Entity\Manager
 
  // Ou null si aucun manager n'a été trouvé avec l'id $id
  if($collaborateur === null)
  {
    throw $this->createNotFoundException('Collaborateur[id='.$id.'] inexistant.');
  }
     
  return $this->render('EspritCollaborateurBundle:Collaborateur:voir.html.twig', array(
    'collaborateur' => $collaborateur
  ));
     
    
  }
   
  public function ajouterAction()
  {
      $collaborateur = new Collaborateur;
    
  // J'ai raccourci cette partie, car c'est plus rapide à écrire !
    $form = $this->createForm(new CollaborateurType, $collaborateur);
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
        $em->persist($collaborateur);
        $em->flush();
 
        // On redirige vers la page de visualisation de manager nouvellement créé
        return $this->redirect($this->generateUrl('espritcollaborateur_accueil'));
      }
    }
 
    // À ce stade :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
 
    return $this->render('EspritCollaborateurBundle:Collaborateur:ajouter.html.twig', array(
      'form' => $form->createView(),
    ));
  
  }
  public function modifierAction(Collaborateur $collaborateur)
  {
     
// On utiliser le ArticleEditType
    $form = $this->createForm(new CollaborateurType(), $collaborateur);
 
    $request = $this->getRequest();
 
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
 
      if ($form->isValid()) {
        // On enregistre manager
        $em = $this->getDoctrine()->getManager();
        $em->persist($collaborateur);
        $em->flush();
 
        // On définit un message flash
        $this->get('session')->getFlashBag()->add('info', 'Collaborateur bien modifié');
 
        return $this->redirect($this->generateUrl('collaborateur_voir', array('id' => $collaborateur->getId())));
      }
    }
 
    return $this->render('EspritCollaborateurBundle:Collaborateur:modifier.html.twig', array(
      'form'    => $form->createView(),
      'collaborateur' => $collaborateur
    ));
  }
 
  public function supprimerAction(Collaborateur $collaborateur)
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
        $em->remove($collaborateur);
        $em->flush();
 
        // On définit un message flash
        $this->get('session')->getFlashBag()->add('info', 'Collaborateur bien supprimé');
 
        // Puis on redirige vers l'accueil
        return $this->redirect($this->generateUrl('espritcollaborateur_accueil'));
      }
    }
 
    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('EspritCollaborateurBundle:Collaborateur:supprimer.html.twig', array(
      'collaborateur' => $collaborateur,
      'form'    => $form->createView()
    ));
   
  }

}
?>