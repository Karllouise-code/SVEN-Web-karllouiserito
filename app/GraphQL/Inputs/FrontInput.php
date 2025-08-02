<?php

namespace App\GraphQL\Inputs;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\InputType;

class FrontInput extends InputType
{


   protected $attributes = [
      'name' => 'front_input',
      'description' => 'front information'
   ];

   public function fields(): array
   {
      return [
         'frequency' => [
            'type' => Type::string(),
         ],
         'start_date' => [
            'type' => Type::string(),
         ],
         'days' => [
            'type' => Type::listOf(Type::string()),
         ],
         'times' => [
            'type' => Type::listOf(Type::string()),
         ],
         'notes' => [
            'type' => Type::string(),
         ],
         'action_type' => [
            'type' => Type::string(),
         ],
      ];
   }
}