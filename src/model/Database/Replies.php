<?php declare(strict_types = 1);
Class Replies extends Database
{
    private const TABLENAME       = "Replies";  #only the thread this post belongs to need to care about the the thread ID
    private ?int    $id           = NULL; 
    private string $body          = "";
    private string $imgPath       = "";
    private bool   $hasImg        = false;
    private string $replyDateTime = "";



    

}