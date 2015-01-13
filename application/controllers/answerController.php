<?php
class answerController extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this -> load -> model('answer');
        $this -> load -> model('users');

    }

    public function index() {
        $data['questionID'] = $this -> input -> post('questionID');
        $this -> load -> view('post_answer_form', $data);
    }

    public function postAnswer() {
        $questionID = $this -> input -> post('question_id');
        $txtanswer = $this -> input -> post('answer');
        $userID = $this -> input -> post('user_id');

        if ($txtanswer == '' || $userID == '' || $questionID == '') {
            return json_encode("missing param");

        } else {

            $data = $this -> answer -> createAnswer($userID, $questionID, $txtanswer);
           
            require_once ('questionController.php');
        $answerController = new questionController();
        $answerController -> viewQuestionParam($questionID);
        }
    }

   

    public function removeAnswer($ID) {
        return $this -> answer -> removeAnswer($answerID);
    }

    public function getAnswers($questionID) {
        $res = $this -> answer -> getAnswers($questionID);
        return $res;
    }

    public function viewAnswer($questionID) {

        $data['answers'] = $this -> getAnswers($questionID);

        // $this -> load -> view('view_answer', $data);
        return $data;
    }

}
?>