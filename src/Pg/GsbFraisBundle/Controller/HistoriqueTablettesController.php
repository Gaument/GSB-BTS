<?php
namespace Pg\GsbFraisBundle\Controller;
require_once("include/fct.inc.php");
//require_once ("include/class.pdogsb.inc.php");
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
//use PdoGsb;
class HistoriqueTablettes extends Controller
{
    public function IndexAction()
    {
       $session= $this->get('request')->getSession();
       if(estConnecte($session)){
              return $this->render('PgGsbFraisBundle:HistoriqueTablettes:historiquetablettes.html.twig');
            }
        else 
              return $this->render('PgGsbFraisBundle:Home:connexion.html.twig');
    }
    
    
}






?>
