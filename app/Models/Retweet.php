<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retweet extends Model
{
    use HasFactory;
    protected $fillable = ['post_id','retweet_msg','tweet_id','retweet_id'];
}
