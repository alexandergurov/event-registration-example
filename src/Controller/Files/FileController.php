<?php

namespace App\Controller\Files;

use registration\src\Controller\Logs\BaseController;
use registration\src\Exception\LogException;
use registration\src\Model\FileQueryDTO;
use registration\src\Model\FileRequestDTO;
use registration\src\Service\FileManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Attributes as OA;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

class FileController extends BaseController
{
    /**
     * @throws ExceptionInterface
     */
    #[OA\Response(
        response: 200,
        description: 'Возвращает список заявок на формирование',
        content: new OA\JsonContent(ref: '#/components/schemas/FileRequestList')
    )]
    #[OA\Response(
        response: 400,
        description: 'Ошибка',
        content: new OA\JsonContent(ref: '#/components/schemas/Errors')
    )]

    #[Route('admin/files', name: 'app_files', methods: ['GET'])]
    public function list(
        FileManager $manager,
        #[MapQueryString] FileQueryDTO $dto = new FileQueryDTO()
    ): JsonResponse
    {
        $result = $manager->getList($dto->page, $dto->pageSize, 'f_list', $dto->getSort());
        return $this->responseList($result);
    }

    /**
     * @throws ExceptionInterface
     * @throws registration\src\Exception\LogException
     */
    #[OA\Response(
        response: 200,
        description: 'Возвращает заявку на создание',
        content: new OA\JsonContent(ref: "#/components/schemas/FileRequest_created")
    )]
    #[OA\Response(
        response: 400,
        description: 'Ошибка',
        content: new OA\JsonContent(ref: '#/components/schemas/Errors')
    )]
    #[OA\RequestBody(content: new OA\JsonContent(ref: "#/components/schemas/FileRequestDTO_create"))]
    #[Route('admin/files', name: 'app_file_request_create', methods: ['POST'])]
    public function create(
        FileManager $manager,
        #[MapRequestPayload(validationGroups: 'create')] FileRequestDTO $dto
    ): JsonResponse
    {
        $manager->checkExistingRequests($dto->data->queryParams);
        $result = $manager->create($dto->data, 'f_created');
        return $this->responseDetail($result);
    }
}
