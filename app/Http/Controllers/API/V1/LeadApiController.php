<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ActivityType;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;

class LeadApiController extends Controller
{
    //

    public function getProspects(Request $request)
    {
        $prospects = Lead::all();
        return response()->success(["prospects" => $prospects], ["code" => 200, "Text" => "Listado de prospectos"]);
    }

    public function createProspect(Request $request)
    {
        $prospect = new Lead();
        $prospect->first_name = $request->first_name;
        $prospect->last_name = $request->last_name;
        $prospect->birthDay = $request->birthDay;
        $prospect->birthPlace = $request->birthPlace;
        $prospect->maritalStatus = $request->maritalStatus;
        $prospect->occupation = $request->occupation;
        $prospect->unofficialManager = $request->unofficialManager;
        $prospect->beneficiary = $request->beneficiary;
        $prospect->email = $request->email;
        $prospect->phone = $request->phone;
        $prospect->address_id = $request->address_id;
        $prospect->source = $request->source;
        $prospect->status = $request->status;
        $prospect->ine_file = $request->ine_file;
        $prospect->lead_agent_id = $request->lead_agent_id;
        $prospect->notes = $request->notes;
        $prospect->save();
        return response()->success(["prospect" => $prospect], ["code" => 200, "Text" => "Prospecto agregado correctamente"]);
    }

    public function getProspectDetails(Request $request, $id)
    {
        $prospect = Lead::find($id);
        return response()->success(["prospect" => $prospect], ["code" => 200, "Text" => "Detalle del prospecto"]);
    }

    public function updateProspect(Request $request, $id)
    {
        $prospect = Lead::find($id);
        $prospect->name = $request->name;
        $prospect->email = $request->email;
        $prospect->phone = $request->phone;
        $prospect->save();
        return response()->success(["prospect" => $prospect], ["code" => 200, "Text" => "Prospecto actualizado correctamente"]);
    }

    public function deleteProspect(Request $request, $id)
    {
        $prospect = Lead::find($id);
        $prospect->delete();
        return response()->success(["prospect" => $prospect], ["code" => 200, "Text" => "Prospecto eliminado correctamente"]);
    }

    public function getActivities(Request $request, $id)
    {
        $prospect = Lead::find($id);
        $activities = $prospect->activities;
        return response()->success(["activities" => $activities], ["code" => 200, "Text" => "Listado de actividades"]);
    }

    public function createActivity(Request $request, $id)
    {
        
        $activity = new Activity();

        if ($request['lead_id']) {
            $prospect = Lead::find($id);
            $activity->lead()->associate($prospect);
        }
        if ($request['lead_agent_id']) {
            $leadAgent = User::find($request['lead_agent_id']);
            $activity->leadAgent()->associate($leadAgent);
        }
        if ($request['activity_type_id']) {
            $activityType = ActivityType::find($request['activity_type_id']);
            $activity->activityType()->associate($activityType);
        }
        $activity->save();
        return response()->success(["activity" => $activity], ["code" => 200, "Text" => "Actividad agregada correctamente"]);
    }

    public function getActivityDetails(Request $request, $id)
    {
        $activity = Activity::find($id);
        return response()->success(["activity" => $activity], ["code" => 200, "Text" => "Detalle de la actividad"]);
    }

    public function updateActivity(Request $request, $id)
    {
        $activity = Activity::find($id);
        $activity->activity = $request->activity;
        $activity->save();
        return response()->success(["activity" => $activity], ["code" => 200, "Text" => "Actividad actualizada correctamente"]);
    }

    public function deleteActivity(Request $request, $id)
    {
        $activity = Activity::find($id);
        $activity->delete();
        return response()->success(["activity" => $activity], ["code" => 200, "Text" => "Actividad eliminada correctamente"]);
    }
    
}
