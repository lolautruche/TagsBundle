<?php

namespace EzSystems\TagsBundle\Core\Persistence\Legacy\Tags;

abstract class Gateway
{
    /**
     * Returns an array with basic tag data
     *
     * @param mixed $tagId
     *
     * @return array
     */
    abstract function getBasicTagData( $tagId );

    /**
     * Returns an array with basic tag data for the tag with $remoteId
     *
     * @param string $remoteId
     *
     * @return array
     */
    abstract public function getBasicTagDataByRemoteId( $remoteId );
}
