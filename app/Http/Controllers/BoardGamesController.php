<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoardGame;
use App\Post;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BoardGamesController extends Controller
{
    public function index()
    {
        $boardGames = BoardGame::all();

        return view('boardgames.index', [
            'boardGames' => $boardGames,
            'types' => BoardGame::getTypes()

        ]);
    }

    /**
     * Get BoardGame description
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $game = BoardGame::findOrFail($id);
        $folderName = explode('.', $game->image);

        return view('boardgames.show', [
            'game' => $game,
            'folderName' => $folderName[0] . '_gallery',
            'types' => BoardGame::getTypes()
        ]);
    }

    /**
     * Get Post Details
     * @param $postId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($postId)
    {
        //$post = Post::findOrFail($postId);

        return view('posts.index');
    }

    /**
     * Contact Section
     */
    public function contact()
    {
        // configure
        $data = Input::all();
        $okMessage = 'Ваше сообщение доставленно! Вы свяжемся с вами в скором времени, спасибо!';
        $errorMessage = 'Ошибка отправки сообщения, попробуйте еще раз.';

        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'user_message' => 'required|min:5'
        );
        $validator = Validator::make($data, $rules);

        if ($validator->passes()) {
            if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
                $secret = '6LdqmCAUAAAAANONcPUkgVpTSGGqm60cabVMVaON';
                $c = curl_init('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
                curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                $verifyResponse = curl_exec($c);

                $responseData = json_decode($verifyResponse);
                if($responseData->success):
                    try
                    {
                        Mail::send('emails.feedback', $data, function ($message) use ($data) {
                            $message->from($data['email'], $data['name']);
                            $message->to('amoscaliuc@gmail.com', 'MirIgr')->subject('Mir Igr Contact');
                        });
                        $responseArray = array('type' => 'success', 'message' => $okMessage);
                    }
                    catch (\Exception $e)
                    {
                        $responseArray = array('type' => 'danger', 'message' => $errorMessage);

                        return response()->json($responseArray);
                    }

                    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

                        return response()->json($responseArray);
                    }
                    else {
                        return $responseArray['message'];
                    }

                else:
                    $errorMessage = 'Проверка на то, что вы не робот не успешна, повторите попытку еще раз.';
                    $responseArray = array('type' => 'danger', 'message' => $errorMessage);

                    return response()->json($responseArray);
                endif;
            else:
                $errorMessage = 'Пожалуйста, пройдите проверку, что вы не робот.';
                $responseArray = array('type' => 'danger', 'message' => $errorMessage);

                return response()->json($responseArray);
            endif;
        }
    }
}
