<?php

  namespace App\Repositories;

  use Illuminate\Database\Eloquent\Model;

  interface EloquentRepositoryInterface
  {
      /**
       * @return array
       */
      public function getFillable() : ? array;

      /**
       * @param $id
       * @return Model|null
       */
      public function find($id): ? Model;
  }
