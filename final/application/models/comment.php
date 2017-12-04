<?php
class Comment extends Model{

    function getComment($commentID){
        $sql = 'SELECT commentID, uID, commentText, postID, date, FROM comments
		WHERE commentID = ?
		';
        $results = $this->db->getrow($sql, array($commentID));

        $comment = $results;

        return $comment;

    }
    public function getAllComments($limit = 0){

        if($limit > 0){

            $numcomments = ' LIMIT '.$limit;
        }

        $sql =  'SELECT commentID, uID, commentText, postID, date, FROM comments
		WHERE commentID = ?
		';

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }

        return $comments;

    }

}
