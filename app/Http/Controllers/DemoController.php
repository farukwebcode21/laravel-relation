<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;

class DemoController extends Controller {
    function DemoAction() {
        return User::with('profile')->get();
    }

    function DemoAction2() {
        return Profile::with('user')->get();
    }

    function DemoAction3() {
        return User::with('post')->get();
    }
    function DemoAction4() {
        return Post::with('user')->get();
    }

    function DemoAction5() {
        return Post::with('tags')->get();
    }
    function DemoAction6() {
        return Tag::with('post')->get();
    }

}
