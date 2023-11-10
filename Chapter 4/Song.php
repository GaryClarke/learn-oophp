<?php // Song.php

require_once 'Identifiable.php';
require_once 'IdentiableTrait.php';
require_once 'Likeable.php';
require_once 'IdentifiableTraitImposter.php';

class Song implements Identifiable
{
    protected int $likes = 0;

    use Likeable;
    use IdentiableTrait;
    use IdentifiableTraitImposter {
        IdentifiableTraitImposter::getHexId insteadof IdentiableTrait;
        IdentiableTrait::getHexId as getOriginalHexId;
    }

    public function getId(): string
    {
        return 'ID returned from class';
    }
}