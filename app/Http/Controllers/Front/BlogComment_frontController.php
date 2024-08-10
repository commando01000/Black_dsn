<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogComments;
use App\Models\BlogCommentsReplies;
use Illuminate\Http\Request;

class BlogComment_frontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $blog_id)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);
        $blog = Blog::find($blog_id);
        BlogComments::create([
            'comment' => $request->comment,
            'name' => $request->name,
            'blog_id' => $blog->id,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('message', "Message sent successfully");
    }
    public function addReply(Request $request, $comment_id)
    {
        // Validate the request data
        $request->validate([
            'reply' => 'required|string|max:1000',
        ]);

        // Find the comment to which the reply will be added
        $comment = BlogComments::findOrFail($comment_id);
        // Create a new reply
        $reply = new BlogCommentsReplies();
        $reply->name = $request->input('name');
        $reply->comment = $request->input('reply');
        $reply->comment_id = $comment->id; // Associate the reply with the comment


        // Save the reply
        $reply->save();

        // Return a JSON response indicating success
        return redirect()->back()->with('message', "Message sent successfully");
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
