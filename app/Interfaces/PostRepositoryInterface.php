<?php

namespace App\Interfaces;

interface PostRepositoryInterface
{
    public function all();

    public function deletePost(int $id);
}
