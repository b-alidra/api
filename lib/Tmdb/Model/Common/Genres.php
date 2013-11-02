<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Model\Common;

use Tmdb\Model\Genre;

class Genres extends Collection {

    /**
     * Returns all genres
     *
     * @return array
     */
    public function getGenres()
    {
        return $this->data;
    }

    /**
     * Retrieve a genre from the collection
     *
     * @param $id
     * @return null
     */
    public function getGenre($id) {
        foreach($this->data as $genre) {
            if ($id === $genre->getId()) {
                return $genre;
            }
        }

        return null;
    }

    /**
     * Add a genre to the collection
     *
     * @param Genre $genre
     */
    public function addGenre(Genre $genre)
    {
        $this->data[] = $genre;
    }
} 