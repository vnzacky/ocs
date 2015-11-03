<?php namespace App\Components\Dashboard\Repositories;

use App\Repositories\BaseRepository;

interface UserRepository extends BaseRepository
{
    /**
     * Return all records/entities for users
     *
     * @param bool $status
     * @return array
     */
    public function listUsers($status = true);

    /**
     * Get list ID current interests
     * @param $user
     * @return array|null
     */
    public function currentInterests($user);

}