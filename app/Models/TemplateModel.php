<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
    You can use this source code as a handbook reference. 
    Some of the more important functions of an eloquent model is 
    described here. 
*/

class TemplateModel extends Model
{   
    /*
    This line is pretty useless if you manually configure all 
    the settings. 
    */
    use HasFactory;
    
}

//ONE TO ONE

// User Model
class User extends Model
{
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}

// Profile Model
class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

// ONE TO MANY

// User Model
class Usr extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

// Post Model
class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

// MANY TO MANY
// User Model
class Ur extends Model
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}

// Role Model
class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}




//POLYMORPHISM: MANY TABLE USES ONE TABLE

/*
In Laravel, a polymorphic relationship allows a model to belong 
to multiple other models on a single association. This type of 
relationship is useful when you have multiple models that need 
to be associated with a single model, but each of these associated 
models may have different tables and fields.

For example, suppose you have a comments table that can contain 
comments on both posts and videos. Rather than having separate 
post_comments and video_comments tables, you can use a polymorphic 
relationship to associate the comments table with both the posts 
and videos tables.

*/

// Comment model
class Comment extends Model
{
    public function commentable()
    {
        return $this->morphTo();
    }
}

// Post model
class P extends Model
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}

// Video model
class Video extends Model
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
/*
In this example, the Comment model has a commentable method that 
defines the polymorphic relationship using the morphTo method. 
This method will dynamically determine the related model based on 
the commentable_type column in the comments table.

The Post and Video models both define a comments method that 
defines the inverse polymorphic relationship using the morphMany 
method. This method specifies the related model class name as its 
first argument, and the name of the polymorphic association as its 
second argument.

Once you have defined the polymorphic relationship between the 
models, you can use Eloquent's methods to query and manipulate the 
relationship. For example, you can retrieve comments for a specific 
post or video using the comments method on the respective model, or 
you can retrieve the parent model for a comment using the commentable
 method on the Comment model.
*/

// Controller
function addComment(Request $request)
{
    $comment = new Comment;
    $comment->body = $request->body;
    
    if ($request->commentable_type == 'post') {
        $commentable = Post::find($request->commentable_id);
    } else if ($request->commentable_type == 'video') {
        $commentable = Video::find($request->commentable_id);
    }
    
    $commentable->comments()->save($comment);
    
    return redirect()->back();
}

/*
In this example, the Comment model defines the polymorphic 
relationship using the morphTo method. The Post and Video models 
both define the inverse polymorphic relationship using the 
morphMany method.

In the controller, the addComment method creates a new Comment 
instance and sets its body attribute to the value from the request. 
It then checks the commentable_type attribute from the request to 
determine which model the comment should be associated with, and 
retrieves the related model using the find method. Finally, it 
saves the comment using the save method on the related model's 
comments relationship.

Note that in this example, the commentable_type attribute from 
the request is assumed to be either 'post' or 'video'. In a real 
application, you would likely want to validate this input and handle 
any errors appropriately.

*/