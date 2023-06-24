<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = "news";
    protected $primary_key = "id";

    protected $fillable = [
        'title',
        'content',
        'image_upload_path',
        'created_by'
    ];

    public static function getAllNews() : Array {
        $news = DB::select("SELECT
        n.*,
        u.name
        FROM news n 
        JOIN users u ON n.created_by = u.id");

        return $news;
    }

    public static function getNewsDetails(int $id) {
        $news = DB::select("SELECT
        n.*,
        u.name
        FROM news n 
        JOIN users u ON n.created_by = u.id
        WHERE n.id = {$id}");

        return $news[0];
    }
}
