<?php
class QuestionController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this -> load -> model('question');
        $this -> load -> model('answer');
        $this -> load -> model('users');

    }

    public function index() {
        $this -> load -> view('postQuestion');
    }

    
    public function createQuestion() {
        $userID = $this -> input -> post('hiddenFieldID');
        $title = $this -> input -> post('title');
        $description = $this -> input -> post('description');
        $category = $this -> input -> post('category');
        $tags = $this -> input -> post('tags');
        $data = $this -> question -> createQuestion($userID, $title, $description, $category, $tags);
            
            echo json_encode($data);
        
    }

    public function like() {
        //$userID = $this -> input -> post('userID');
        $questionID = $this -> input -> post('questionID');
        $owner = $this -> question -> like($questionID);
        
    }

    public function disLike() {
        //$userID = $this -> input -> post('userID');
        $questionID = $this -> input -> post('questionID');
        $owner=$this -> question -> dislike($questionID);
        
    }

   

    public function removeQuestion($questionID) {
        return $this -> question -> removeQuestion($questionID);
    }

    public function getQuestion($questionID) {
        return $this -> question -> getQuestion($questionID);

    }

    public function viewQuestionParam($questionID) {

       
        $data['question'] = $this -> question -> getQuestion($questionID);
       
        require_once ('answerController.php');
        $answerController = new answerController();
        $data['answer'] = $answerController -> getAnswers($questionID);
       
        $this -> load -> view('answer', $data);
    }
    
    public function viewQuestion() {

        $questionID = $this -> input -> post('questionID');
        $data['question'] = $this -> question -> getQuestion($questionID);
       
        require_once ('answerController.php');
        $answerController = new answerController();
        $data['answer'] = $answerController -> getAnswers($questionID);
       
        $this -> load -> view('answer', $data);
    }

}
?>