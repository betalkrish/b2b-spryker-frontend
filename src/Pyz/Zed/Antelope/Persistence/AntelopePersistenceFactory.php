<?php

namespace Pyz\Zed\Antelope\Persistence;

use Orm\Zed\Antelope\Persistence\PyzAntelopeLocationQuery;
use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Pyz\Zed\Antelope\Persistence\Propel\Mapper\AntelopeLocationMapper;
use Pyz\Zed\Antelope\Persistence\Propel\Mapper\AntelopeMapper;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface getRepository()
 */
class AntelopePersistenceFactory extends AbstractPersistenceFactory
{
    public function createAntelopeQuery(): PyzAntelopeQuery
    {
        return PyzAntelopeQuery::create();
    }

    public function createAntelopeLocationQuery(): PyzAntelopeLocationQuery
    {
        return PyzAntelopeLocationQuery::create();
    }

    public function createAntelopeLocationMapper(): AntelopeLocationMapper
    {
        return new AntelopeLocationMapper();
    }

    public function createAntelopeMapper(): AntelopeMapper
    {
        return new AntelopeMapper();
    }
}
