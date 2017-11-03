<?php
/**
 * Created by PhpStorm.
 * User: tenglibai
 * Date: 2017/11/3
 * Time: 10:27
 */

namespace App\Http\Controllers;


class ArticleREspository
{

    public function all()
    {
        // simulate bug
        if(true){
            return null;
        }
        return ['article 1', 'article 2'];
    }
}
