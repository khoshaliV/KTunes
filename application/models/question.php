<?php

class Question extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function createQuestion($userID, $title, $sum, $category, $keyword) {

        $data = array('userID' => $userID, 'keyword' => $keyword, 'category' => $category, 'title' => $title, 'sum' => $sum);
        $this->db->insert('question', $data);
        return $this->db->insert_id();
    }

    public function getQuestion($ID) {

        $res = $this->db->get_where('question', array('questionID' => $ID));
        return $res->result_array();
    }

    public function getQuestions($ID) {

        $res = $this->db->get_where('question', array('userID' => $ID));
        return ($res->result_array());
    }
    public function getQuestionsList() {

        $res = $this->db->get('question', 10);
        return ($res->result_array());
    }

//    public function getQuestionByUser($userID) {
//
//        $res = $this->db->query("select question.questionID,question.userID,question.category,question.title,question.sum,likes as votes , SUM(questionvote.isPositive) as likes from question left outer join keyword on keyword.keywordId = question.keywordId left outer join questionvote on question.questionID = questionvote.questionID where question.userID like '" . $userID . "' group by question.questionID order by likes DESC; ");
//        return ($res->result_array());
//    }

    public function like($questionID) {
        $query = "UPDATE `question` SET `likes` = likes + 1 WHERE `questionID` = $questionID";
        $this->db->query($query);
    }
    public function dislike($questionID) {
        $query = "UPDATE `question` SET `likes` = likes - 1 WHERE `questionID` = $questionID";
        $this->db->query($query);
    }

}

?>