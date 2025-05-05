<?php

namespace App\Command;

use registration\src\CSVGeneration\Exception\QueueNotFoundException;
use registration\src\CSVGeneration\Service\CSVGenerationService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ProcessFileRequestsCommand extends Command
{

    use LockableTrait;
    public function __construct(
        private readonly CSVGenerationService $generationService,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName('app:process-file-requests')
            ->setDescription('Process file requests.')
            ->setHelp('Process file requests and generate csv.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        try {
            if (!$this->lock()) {
                $io->info('Генерация файла запущена в другом процессе.');

                return Command::SUCCESS;
            }

            $this->generationService->start();

            $io->success('Генерация файла успешно завершена! ' . PHP_EOL);

            return Command::SUCCESS;
        } catch (QueueNotFoundException $exception) {
            $io->info($exception->getMessage());

            return Command::SUCCESS;
        } catch (\Throwable $exception) {
            $io->error('Ошибка при генерации файла: ' . $exception->getMessage());

            return Command::FAILURE;
        }
    }
}