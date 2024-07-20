<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Récupérer la notification par ID directement depuis la table des notifications
        $notification = DatabaseNotification::where('id', $id)
                                            ->where('notifiable_id', Auth::id())
                                            ->where('notifiable_type', get_class(Auth::user()))
                                            ->first();

        if (!$notification) {
            return redirect()->route('notifications.index')->withErrors('Notification not found.');
        }

        // Fetch the request details based on the notification
        // Extraire les données de la notification
        $data = $notification->data;
        $demande = isset($data['demande_id']) ? Demande::find($data['demande_id']) : null;


        if (!$demande) {

            return redirect()->route('notifications.index')->withErrors('Request not found.');
            
        }
         // Mark the notification as read
         $notification->markAsRead();

        return view('RH.notifications.show', compact('demande','notification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //mark as read


    public function markAsRead($id)
{
    $notification = DatabaseNotification::where('id', $id)
                                        ->where('notifiable_id', Auth::id())
                                        ->where('notifiable_type', get_class(Auth::user()))
                                        ->first();

    if ($notification) {
        $notification->markAsRead();
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false], 404);
}
}
