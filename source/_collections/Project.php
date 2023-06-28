<?php
use TightenCo\Jigsaw\Collection\CollectionItem;

class Project extends CollectionItem
{




    public function getAuthorNames()
    {



        return implode(', ', $this->author);
    }
}
