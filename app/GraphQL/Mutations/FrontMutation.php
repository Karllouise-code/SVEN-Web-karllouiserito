<?php

namespace App\GraphQL\Mutations;

use App\Models\Appointment;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Log;

class FrontMutation extends Mutation
{

   protected $attributes = [
      'name' => 'FrontMutation'
   ];


   public function args(): array
   {
      return [
         'front' => ['type' => GraphQL::type('front_input')],
      ];
   }

   public function type(): Type
   {
      return GraphQL::type('response_type');
   }


   public function validationErrorMessages(array $args = []): array
   {
      return [
         'front.frequency' => 'Frequency field is required',
         'front.start_date' => 'Start date field is required',
         'front.days' => 'Days field is required',
         'front.times' => 'Times field is required',
      ];
   }

   public function rules(array $args = []): array
   {

      $rules = [];

      $front = $args['front'];

      if ($front['action_type'] == "schedule_appointment") {
         $rules['front.frequency'] = 'required|in:recurring,one_time';
         $rules['front.start_date'] = 'required|date';
         $rules['front.days'] = 'required|array';
         $rules['front.times'] = 'required|array';
      }

      return $rules;
   }


   public function resolve($root, $args)
   {
      $front = $args['front'];
      $response_obj = new \stdClass();
      $appointments_model = new Appointment();


      if ($front["action_type"] == "schedule_appointment") {
         $response_obj = $appointments_model->onSubmitAppointment($front);
      }



      return $response_obj;
   }
}