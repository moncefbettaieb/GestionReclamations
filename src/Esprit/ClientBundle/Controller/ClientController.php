<?php
 

 
namespace Esprit\ClientBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Esprit\ClientBundle\Entity\Client;
use Esprit\MangerBundle\Entity\Image;
use Esprit\ClientBundle\Form\ClientType;
use JMS\SecurityExtraBundle\Annotation\Secure;
 
class ClientController extends Controller
{
    
  public function indexAction()
  {
      // Pour récupérer la liste de tous les manager : on utilise findAll()
    $client = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('EspritClientBundle:Client')
                     ->findAll();
 
    // L'appel de la vue ne change pas
    
     return $this->render('EspritClientBundle:Client:index.html.twig', array(
  'clients' =>$client
));
  }
  public function voirAction($id)
  {
    
  // On récupère le repository
  $repository = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('EspritClientBundle:Client');
 
  // On récupère l'entité correspondant à l'id $id
  $client = $repository->find($id);
 
  // $manager est donc une instance de Esprit\MangerBundle\Entity\Manager
 
  // Ou null si aucun manager n'a été trouvé avec l'id $id
  if($client === null)
  {
    throw $this->createNotFoundException('Client[id='.$id.'] inexistant.');
  }
     
  return $this->render('EspritClientBundle:Client:voir.html.twig', array(
    'client' => $client
  ));
     
    
  }
   
  public function ajouterAction()
  {
      $client = new Client;
    
  // J'ai raccourci cette partie, car c'est plus rapide à écrire !
    $form = $this->createForm(new ClientType, $client);
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
        $em->persist($client);
        $em->flush();
 
        // On redirige vers la page de visualisation de manager nouvellement créé
        return $this->redirect($this->generateUrl('espritclient_accueil'));
      }
    }
 
    // À ce stade :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
 
    return $this->render('EspritClientBundle:Client:ajouter.html.twig', array(
      'form' => $form->createView(),
    ));
  
  }
  public function modifierAction(Client $client)
  {
     
// On utiliser le ArticleEditType
    $form = $this->createForm(new ClientType(), $client);
 
    $request = $this->getRequest();
 
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
 
      if ($form->isValid()) {
        // On enregistre manager
        $em = $this->getDoctrine()->getManager();
        $em->persist($client);
        $em->flush();
 
        // On définit un message flash
        $this->get('session')->getFlashBag()->add('info', 'Client bien modifié');
 
        return $this->redirect($this->generateUrl('client_voir', array('id' => $client->getId())));
      }
    }
 
    return $this->render('EspritClientBundle:Client:modifier.html.twig', array(
      'form'    => $form->createView(),
      'client' => $client
    ));
  }
 
  public function supprimerAction(Client $client)
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
        $em->remove($client);
        $em->flush();
 
        // On définit un message flash
        $this->get('session')->getFlashBag()->add('info', 'Client bien supprimé');
 
        // Puis on redirige vers l'accueil
        return $this->redirect($this->generateUrl('espritclient_accueil'));
      }
    }
 
    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('EspritClientBundle:Client:supprimer.html.twig', array(
      'client' => $client,
      'form'    => $form->createView()
    ));
   
  }

}
?>