<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Client\CumlouderAPIClient;
use App\Entity\Partner;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


/**
 * Description of WebcamController
 *
 * @author ccaete
 */
class WebcamController extends AbstractController
{
    
    /**
     * @Route("/webcams/{nats1}", name="webcam_list")
     * @ParamConverter("partner", class="App:Partner")
     */
    public function list(Partner $partner, CumlouderAPIClient $client)
    {        
        $list = $client->getWebcamList();
        return $this->render('webcam/list.html.twig', [
            'webcams' => $list,
            'partner' => $partner
        ]);
    }
}