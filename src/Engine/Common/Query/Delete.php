<?php
declare(strict_types = 1);

namespace SimpleCrud\Engine\Common\Query;

use SimpleCrud\Engine\QueryInterface;
use SimpleCrud\Table;

abstract class Delete implements QueryInterface
{
    use QueryTrait;
    use WhereTrait;

    public function __construct(Table $table)
    {
        $this->init($table);

        $this->query = $this->builder
            ->delete($table->getName());
    }
}
