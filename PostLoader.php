<?php

//handles multiple posts at the same time and saves them.
class PostLoader
{
    private array $posts;

    public function loadAllPosts()
    {
        //open a file
        //json decode or unserialize it
        //loop over the data from the file
        //assign each entry to a post class

        // $data = json_encode('')
        // foreach($data AS $post){
        //$this->posts[] = new Post($post['title']);
        //}
    }

    public function addPost($postArray)
    {   //translates strings into json string
        $json_data = json_encode($postArray);
        //add the new message to the array
        file_put_contents('data.json', $json_data);


        // clear the old file
        // json_encode or serialize to the file of the posts array

    }
}