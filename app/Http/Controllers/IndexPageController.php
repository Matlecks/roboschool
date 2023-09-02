<?php

namespace App\Http\Controllers;

use App\Notifications\MailIncomNotification;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Mail\MailSend;
use App\Models\Mail_letter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Models\Visual_setting;

class IndexPageController extends Controller
{
    use Notifiable;

    public function index()
    {
        $teachers = User::limit(3)->get();
        $services = Service::limit(3)->get();
        $letters = Mail_letter::all();
        $robots_content = Storage::disk('root')->get('robots.txt');
        $visual_settings = Visual_setting::first();

        return view('index', compact('teachers', 'services', 'letters', 'robots_content', 'visual_settings'));
    }


    public function send_mail(Request $request)
    {
        $mail = new Mail_letter();

        $mail->name = $request->name;
        $mail->title = $request->title;
        $mail->email = $request->email;
        $mail->phone = $request->phone;
        $mail->message = $request->message;
        $mail->status = $request->status;

        $mail->save();

        Mail::to($request->email)->send(new MailSend($request));



        if ($request->status == 'incoming') {
            $user = User::where('email', '=', 'damir-khaybulin@mail.ru')->first();

            Notification::send($user, new MailIncomNotification($request));

            return redirect()->back();
        } elseif ($request->status == 'sent') {
            return response()->json([
                'success' => true
            ]);
        }
        /* return response()->json([
            'success' => true
        ]); */
    }

    public function filter(Request $request)
    {
        $services = Service::where('id', '=', $request->id)->get();
        $teachers = User::limit(3)->get();

        return response()->json([
            'success' => true,
            'data' => view('table', ['services' => $services, 'teachers' => $teachers])->render(),
        ]);
    }

    public function ajax_get_user(Request $request)
    {

        $user = User::find($request->item_id);
        return response()->json([
            'success' => true,
            'user' => $user
        ]);
    }

    public function ajax_update_user(Request $request)
    {
        $user = User::find($request->id);

        if (!empty($request->name)) {
            $user->name = $request->name;
        }
        if (!empty($request->surname)) {
            $user->surname = $request->surname;
        }
        if (!empty($request->email)) {
            $user->email = $request->email;
        }
        if (!empty($request->img)) {
            $user->img = $request->img;
        }
        if (!empty($request->job)) {
            $user->job = $request->job;
        }
        if (!empty($request->experience)) {
            $user->experience = $request->experience;
        }
        if (!empty($request->education)) {
            $user->education = $request->education;
        }
        if (!empty($request->job)) {
            $user->awards = $request->awards;
        }

        $user->save();

        return response()->json([
            'success' => true
        ]);
    }

    public function ajax_get_service(Request $request)
    {
        $service = Service::find($request->item_id);
        return response()->json([
            'success' => true,
            'service' => $service
        ]);
    }

    public function ajax_update_service(Request $request)
    {
        $service = Service::find($request->id);

        if (!empty($request->title)) {
            $service->title = $request->title;
        }
        if (!empty($request->cost)) {
            $service->cost = $request->cost;
        }
        if (!empty($request->anounce_text)) {
            $service->anounce_text = $request->anounce_text;
        }

        $service->save();

        return response()->json([
            'success' => true
        ]);
    }

    public function user_delete(Request $request)
    {
        $user = User::withTrashed()->find($request->item_id);
        if ($user->deleted_at == null) {
            $user->delete();
        }

        return response()->json([
            'success' => true
        ]);
    }

    public function user_restore(Request $request)
    {
        $user = User::withTrashed()->find($request->item_id);

        if ($user->deleted_at != null) {
            $user->restore();
        }

        return response()->json([
            'success' => true
        ]);
    }

    public function user_show_active(Request $request)
    {
        $users = User::all();

        return response()->json([
            'success' => true,
            'html' => view('tables.table_personal', [
                'teachers' => $users
            ])->render()
        ]);
    }

    public function user_show_deleted(Request $request)
    {
        $users = User::onlyTrashed()->get();

        return response()->json([
            'success' => true,
            'html' => view('tables.table_personal', [
                'teachers' => $users
            ])->render()
        ]);
    }

    public function service_delete(Request $request)
    {
        $service = Service::withTrashed()->find($request->item_id);
        if ($service->deleted_at == null) {
            $service->delete();
        }

        return response()->json([
            'success' => true
        ]);
    }

    public function service_restore(Request $request)
    {
        $service = Service::withTrashed()->find($request->item_id);

        if ($service->deleted_at != null) {
            $service->restore();
        }

        return response()->json([
            'success' => true
        ]);
    }

    public function service_show_active(Request $request)
    {
        $services = Service::all();

        return response()->json([
            'success' => true,
            'html' => view('tables.table_courses', [
                'services' => $services
            ])->render()
        ]);
    }

    public function service_show_deleted(Request $request)
    {
        $services = Service::onlyTrashed()->get();

        return response()->json([
            'success' => true,
            'html' => view('tables.table_courses', [
                'services' => $services
            ])->render()
        ]);
    }

    /*     public function show_robots()
    {
        $content = Storage::disk('public')->get('robots.txt');
        return view('robots_admin_index', compact('content'));
    } */

    public function update_robots(Request $request)
    {
        $robots_content = $request->input('robots_content');
        Storage::disk('root')->put('robots.txt', $robots_content);

        return response()->json([
            'success' => true
        ]);
    }

    public function generate_sitemap()
    {
        Artisan::call('generate:sitemap');

        return response()->json([
            'success' => true
        ]);
    }

    public function ajax_filter_get_incoming_letters_mess()
    {
        $letters = Mail_letter::where('status', '=', 'incoming')->get();

        return response()->json([
            'success' => true,
            'html' => view('tables.table_messages', ['letters' => $letters])->render(),
        ]);
    }

    public function ajax_filter_get_sent_letters_mess()
    {
        $letters = Mail_letter::where('status', '=', 'sent')->get();

        return response()->json([
            'success' => true,
            'html' => view('tables.table_messages', ['letters' => $letters])->render(),
        ]);
    }

    public function ajax_filter_get_selected_letters_mess()
    {
        $letters = Mail_letter::where('status', '=', 'selected')->get();

        return response()->json([
            'success' => true,
            'html' => view('tables.table_messages', ['letters' => $letters])->render(),
        ]);
    }

    public function ajax_filter_get_deleted_letters_mess()
    {
        $letters = Mail_letter::onlyTrashed()->get();

        return response()->json([
            'success' => true,
            'html' => view('tables.table_messages', ['letters' => $letters])->render(),
        ]);
    }
}
