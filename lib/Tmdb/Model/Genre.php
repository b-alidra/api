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
namespace Tmdb\Model;

use Tmdb\Client;

class Genre extends AbstractModel {

    private $id;
    private $name;

    protected static $_properties = array(
        'id',
        'name',
    );

    /**
     * Convert an array to an hydrated object
     *
     * @param Client $client
     * @param array $data
     * @return $this
     */
    public static function fromArray(Client $client, array $data)
    {
        $genre = new Genre($data['id']);
        //$genre->setClient($client);

        return $genre->hydrate($data);
    }

    /**
     * Load a person with the given identifier
     *
     * @param Client $client
     * @param $id
     * @param $options
     * @return $this
     */
    public static function load(Client $client, $id, array $options = array()) {
        $data = $client->api('genres')->getGenre($id, $options);

        return Genre::fromArray($client, $data);
    }

    /**
     * @param mixed $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = (int) $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


}