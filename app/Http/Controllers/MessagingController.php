<?php

namespace App\Http\Controllers;

use App\Models\AdminMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagingController extends Controller
{
    //
    public function facultyMessage(Request $request)
    {
        // Retrieve the form input data
        $data = $request->all();
        $adminMessage = new AdminMessage();

        $adminMessage->from_user_id = $data['from_user_id'];
        $adminMessage->to_faculty_id = $data['to_faculty_id'];
        $adminMessage->title = $data['title'];
        $adminMessage->message_content = $data['message_content'];

        $adminMessage->save();

        return redirect("/admin")->withErrors(['msg' => "message sent successfully"]);
    }

    public function courseMessage(Request $request)
    {
        // Retrieve the form input data
        $data = $request->all();
        $adminMessage = new AdminMessage();

        $adminMessage->from_user_id = $data['from_user_id'];
        $adminMessage->to_course_id = $data['to_course_id'];
        $adminMessage->title = $data['title'];
        $adminMessage->message_content = $data['message_content'];

        $adminMessage->save();

        return redirect("/admin")->withErrors(['msg' => "message sent successfully"]);
    }

    public function allStaffMessage(Request $request)
    {
        // Retrieve the form input data
        $data = $request->all();
        $adminMessage = new AdminMessage();

        $adminMessage->from_user_id = $data['from_user_id'];
        $adminMessage->to_faculty_id = $data['to_faculty_id'];
        $adminMessage->title = $data['title'];
        $adminMessage->message_content = $data['message_content'];
        $adminMessage->bulk_send = 'yes';

        if ($adminMessage->save()) {
            $lastID = DB::getPdo()->lastInsertId();
            $selectUsers = DB::table('users')->where('user_role', '=', 'staff')->get();

            foreach ($selectUsers as $user) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->where('faculty_id', '=', $data['to_faculty_id'])
                    ->update(['admin_message_id' => $lastID]);
            }

            return redirect("/admin")->withErrors(['msg' => "message sent successfully"]);
        }

    }

    public function allLecturersMessage(Request $request)
    {
        // Retrieve the form input data
        $data = $request->all();
        $adminMessage = new AdminMessage();

        $adminMessage->from_user_id = $data['from_user_id'];
        $adminMessage->to_course_id = $data['to_course_id'];
        $adminMessage->title = $data['title'];
        $adminMessage->message_content = $data['message_content'];
        $adminMessage->bulk_send = 'yes';

        if ($adminMessage->save()) {
            $lastID = DB::getPdo()->lastInsertId();
            $selectUsers = DB::table('users')->where('user_role', '=', 'lecturer')->get();

            foreach ($selectUsers as $user) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->where('course_id', '=', $data['to_course_id'])
                    ->update(['admin_message_id' => $lastID]);
            }

            return redirect("/admin")->withErrors(['msg' => "message sent successfully"]);
        }
    }

    public function allStudentsMessage(Request $request)
    {
        // Retrieve the form input data
        $data = $request->all();
        $adminMessage = new AdminMessage();

        $adminMessage->from_user_id = $data['from_user_id'];
        $adminMessage->to_course_id = $data['to_course_id'];
        $adminMessage->title = $data['title'];
        $adminMessage->message_content = $data['message_content'];
        $adminMessage->bulk_send = 'yes';

        if ($adminMessage->save()) {
            $lastID = DB::getPdo()->lastInsertId();
            $selectUsers = DB::table('users')->where('user_role', '=', 'student')->get();

            foreach ($selectUsers as $user) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->where('course_id', '=', $data['to_course_id'])
                    ->update(['admin_message_id' => $lastID]);
            }

            return redirect("/admin")->withErrors(['msg' => "message sent successfully"]);
        }
    }
}
