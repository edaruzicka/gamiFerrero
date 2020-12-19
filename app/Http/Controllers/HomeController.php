<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', ['user' => $user]);
    }

    // User can only access the game, that is ment for him, if he tries to access different one, redirect to /home 
    public function game($id)
    {
        $user = Auth::user();

        if($user->rounds + 1 == $id) {
            return view('game.' .$id);
        }

        return redirect('home');
    }

    public function profile()
    {
        $user = Auth::user();
    return view('profile.index', ['user' => $user]); /*, 'users' => $users]*/
    }

    public function gameSubmit()
    {
        
        $user = Auth::user();

        if($user->rounds == $_POST["round"]){

            // check correct answers, add points for correct ones
            $points = $this->isCorrect($_POST["answer1"])
                    + $this->isCorrect($_POST["answer2"])
                    + $this->isCorrect($_POST["answer3"])
                    + $this->isCorrect($_POST["answer4"])
                    + $this->isCorrect($_POST["answer5"])
                    + $this->isCorrect($_POST["answer6"])
                    + $this->isCorrect($_POST["answer7"])
                    + $this->isCorrect($_POST["answer8"])
                    + $this->isCorrect($_POST["answer9"])
                    + $this->isCorrect($_POST["answer10"]);

            DB::table('users')->where("id", $user->id)->increment('points', $points); // add points
            DB::table('users')->where("id", $user->id)->increment('rounds'); // round completed
            
            return view('game.submit', ['points' => $points, 'user' => $user]);
        }else{
            return redirect('home');
        }
    }

    private function isCorrect($answer)
    {
        $correct = 0;
        if (strpos(strtolower($answer), 'u') !== false){ /* what does the correct answer contain?? */
            $correct = 1;
        }

        return $correct;
    }

    public function leaderboardsIndividual()
    {
        $users = User::orderBy("points", "desc")->get();
        return view('leaderboards.individual', ['users' => $users]);
    }

    public function leaderboardsDepartment()
    {
        $departmentInfos = DB::table('users')->select(DB::raw("department, ROUND(SUM(points)/COUNT(id), 1) AS points"))->groupBy("department")->orderBy('points', "desc")->get();
        return view('leaderboards.department', ['departmentInfos' => $departmentInfos]);
    }

    public function questionare($id)
    {
        $user = Auth::user();

        return view('questionare.' .$id);
    }

    // Check if user has already done the questionare, if so, redirect to homepage, else send results to DB and view questionare.submit
    public function questionareSubmit()
    {
        $user = Auth::user();

        if (DB::table('questionare')->where([
                ['name', $user->name],
                ['questionareID', $_POST["questionareID"]],
            ])->exists()) {
            return redirect('home');
        }else{
            $idQ = 1;
            do {
                DB::table('questionare')->insert([
                    ['name' => $user->name,
                    'question' => $_POST["question$idQ"],
                    'answer' => $_POST["answer$idQ"],
                    'created_at' => NOW(),
                    'questionareID' => $_POST["questionareID"]]
                ]);
                $idQ++;
            } while ($idQ <= $_POST["countQ"]);
        }
        return view('questionare.submit');
    }

    public function questionareResults()
    {
        $user = Auth::user();

        if ($user->isAdmin == 0) {
            return redirect('home');
        }else{
            return view('questionare.results');
        }

    }

}
