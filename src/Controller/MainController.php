<?php
namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class MainController extends Controller 
{
    /**
     * @Route("/menu", name="menu")
     */
    public function main()
    {
        return $this->render('menu/menu.html.twig');
       /* $user = new User();
        $form = $this->createForm(UserType::class, $user);*/
        /*return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );*/
    }
    
    /**
     * @Route("/gadgetMenu", name="gadget")
     */
    public function goToGadget()
    {
        return $this->render('gadget/gadget.html.twig');
      
    }
      /**
     * @Route("/addRoom", name="addRoom")
     */
    public function goToAddRoom()
    {
        return $this->render('addRoom/addRoom.html.twig');
      
    }
     /**
     * @Route("/forgotPass", name="forgotPass")
     */
    public function goToForgotPass()
    {
        return $this->render('forgotPass/forgotPass.html.twig');
      
    }
     /**
     * @Route("/newGadget", name="newGadget")
     */
    public function goToNewGadget()
    {
        return $this->render('newGadget/newGadget.html.twig');
      
    }
     /**
     * @Route("/smartHome", name="smartHome")
     */
    public function goToSmartHome()
    {
        return $this->render('smartHome/smartHome.html.twig');
      
    }
}