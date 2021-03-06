<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = Comment::all();

        return response()->json($comment);
    }

    public function getCommentById($id){

        $comment = Comment::find($id);

        return response()->json($comment);
    }

    // public function getCommentByPokemonId($pokemon_id){

    //     $comment = Comment::find($pokemon_id);

    //     // return response()->json($comment);
    //     return Comment::where('pokemon_id', 'like', )->get();
        
    // }
    
    public function getCommentByPokemonId($pokemon_id)
    {
        return Comment::where('pokemon_id', 'like', '%'.$pokemon_id.'%')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(Request $request)
    // {
    //     $comment = new Comment;
    //     $comment->content = $request->content;
    //     $comment->user_id = auth()->id();
    //     $comment->pokemon_id = $request->pokemon_id;
    //     $comment->save();
 
    //     return response()->json([
    //         'message' => 'New Comment Added'
    //     ]);
    // }

    public function create(Request $request)
    {
        Comment::create([
           
            'user_id' =>  auth()->id(),
            'content' => $request->input('content'),
            'pokemon_id' => $request->input('pokemon_id'),
        ]);
        return response()->json([
            'message' => 'New Comment Added',
            'body' => $request->all(),
                
            ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
