<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $path = 'vendor.voyager.messages.';
    public function index()
    {
        $model = Message::orderBy('is_seen', 'ASC')->get();
        return view($this->path.'index', [
            'messages' => $model,
        ]);
    }

    public function view($id)
    {
        $model = Message::where('id', $id)->first();
        $model->is_seen = 1;
        $model->save();
        return view($this->path.'view', [
            'message' => $model
        ]);
    }

    public function destroy($id)
    {
        Message::destroy($id);
        return redirect()->route('message.index');
    }
}
