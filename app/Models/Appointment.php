<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Log;

class Appointment extends Model {
    use HasFactory;

    protected $table = 'tblAppointments';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;


    public function onSubmitAppointment($data) {
        $response_obj = new \stdClass();
        try {
            $appointment = new self;
            $appointment->frequency = $data['frequency'];
            $appointment->start_date = Carbon::parse($data['start_date'])->format('Y-m-d');
            $appointment->days = json_encode($data['days']);
            $appointment->times = json_encode($data['times']);
            $appointment->notes = $data['notes'] ?? null;
            $appointment->created_at = Carbon::now();
            $appointment->updated_at = Carbon::now();
            
            $appointment->save();

            $response_obj->error = false;
            $response_obj->message = 'Your service has been scheduled successfullyy.';
        } catch (\Throwable $th) {
            Log::error('Error in Appointment Model: ' . $th->getMessage());
            $response_obj->error = true;
            $response_obj->message = 'An error occurred while scheduling your service. Please try again later.';
        }

        return $response_obj;
    }

}