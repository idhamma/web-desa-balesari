<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "uploads/images";

        if ($value == null) {
            Storage::disk($disk)->delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }

        if (is_file($value)) {
            $filename = md5($value->getClientOriginalName() . time()) . '.' . $value->getClientOriginalExtension();
            Storage::disk($disk)->put($destination_path . '/' . $filename, file_get_contents($value));
            $this->attributes[$attribute_name] = $destination_path . '/' . $filename;
        }
    }
}
