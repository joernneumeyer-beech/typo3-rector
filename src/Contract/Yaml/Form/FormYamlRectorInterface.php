<?php

declare(strict_types=1);

namespace Ssch\TYPO3Rector\Contract\Yaml\Form;

use Rector\Core\Contract\Rector\RectorInterface;

interface FormYamlRectorInterface extends RectorInterface
{
    /**
     * @param mixed[] $yaml
     * @return mixed[]
     */
    public function refactor(array $yaml): array;
}
