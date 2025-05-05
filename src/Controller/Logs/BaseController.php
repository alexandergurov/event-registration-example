<?php

namespace App\Controller\Logs;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class BaseController
 * @package App\Controller\Testing
 */
abstract class BaseController extends AbstractController
{
    /**
     * @param $result
     * @return JsonResponse
     */
    public function responseList($result): JsonResponse
    {
        $responseData['data'] = [
            'total' => $result['total'],
            'page' => $result['page'],
            'pageSize' => $result['pageSize'],
            'items' => $result['data'],
        ];

        return $this->json($responseData);
    }

    /**
     * @param $result
     * @return JsonResponse
     */
    public function responseDetail($result): JsonResponse
    {

        $responseData['data'] = $result;

        return $this->json($responseData);
    }
}
