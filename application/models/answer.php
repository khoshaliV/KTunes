<?php

class Answer extends CI_Model {

    function __construct() {
        parent::__construct();
        $this -> load -> database();
    }

    public function createAnswer($userID, $questionId, $answer) {

        $data = array('userId' => $userID, 'questionId' => $questionId, 'answer' => $answer);
        return $this -> db -> insert('answer', $data);

    }

    public function getAnswers($ID) {

        $res = $this -> db -> query("select answer.answerId,answer.userId ,answer.questionId , answer.answer  from answer  where answer.questionId = ".$ID." ;");
        return $res -> result_array();
    }

    public function getAnswersByUser($userID) {

        $res = $this -> db -> get_where('answer', array('userID' => $userID));
        return $res -> result_array();

    }

}
?>