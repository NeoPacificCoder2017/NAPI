<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newComment extends Model
{
    //
    public function getCommentsByNewsId($newsId){
        $newComment = newComment::find($newsId);
    }
}
