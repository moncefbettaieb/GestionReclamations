<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// src/Esprit/AdminBundle/Controller/AdminController.php
 
namespace Esprit\AdminBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class AdminController extends Controller
{
  public function indexAction()
  {
    return $this->render('EspritAdminBundle:Admin:index.html.twig');
  }
}
?>
