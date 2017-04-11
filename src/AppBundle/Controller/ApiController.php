<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use AppBundle\Entity\Connect as Connect;

class ApiController extends FOSRestController
{
    /**
     * @Get("/connect/{joueurName}")
     *
     *  @ApiDoc(
     *     resource=true,
     *     description="Permet de se connecter au jeu de pente",
     *     statusCodes={
     *         200="Retourné quand le joueur est enregistré dans la partie.",
     *         401="Retourné quand la partie est déjà en cours et que l'utilisateur n'est pas autorisé à joueur",
     *         503="Retourné lorsque le serveur est indisponible"
     *     },
     *     output={"class"="Connect"}
     * )
     */
    public function getConnectAction(Request $request){

    }

    /**
     * @Get("/play/{x}/{y}/{idJoueur}")
     *
     *  @ApiDoc(
     *     resource=true,
     *     description="Permet de placer un pion sur une position",
     *     statusCodes={
     *         200="Retourné quand le coup est validé",
     *         401="Retourné quand le joueur n'est pas autorisé (nom du joueur non valide pour la partie)",
     *         406="Retourné quand le coup n'est pas valide",
     *         503="Retourné lorsque le serveur est indisponible"
     *     }
     * )
     */
    public function getPlayAction(Request $request){

    }

    /**
     * @Get("/turn/{idJoueur}")
     *
     * @ApiDoc(
     *     resource=true,
     *     description="Permet de connaître l'état actuel du jeu. Il faut appeler cette methode toute les 0.5 seconde pour rafraîchir l'IHM",
     *     statusCodes={
     *         200="Retourné quand le serveur a répondu au joueur",
     *         401="Retourné quand le joueur n'est pas autorisé (nom du joueur non valide pour la partie)",
     *         503="Retourné lorsque le serveur est indisponible"
     *     }
     * )
     */
    public function getTurnAction(Request $request){

    }
}
