<?php declare(strict_types = 1);
Class Threads extends Database
{
    private const   TABLENAME     = "Threads";
    private ?int    $id           = NULL; 
    private string  $title        = "";
    private int     $repliesIDs; 
    #->> Should be an array referencing the ID of each post, maybe with a function that fetch all the posts from the 
    #   "Replies" Table, index 0 of that array basically is the first post of the thread, and we can get the datetime
    #    , image path etc, Maybe create a simple interface between both Threads and Replies to handle thread creation.
    private int     $imageCount   = 0;
    private bool    $isLocked     = false;
    private bool    $isArchived   = false;
    private bool    $isPined      = false;
    private string  $dateArchived = "";

    

    

}