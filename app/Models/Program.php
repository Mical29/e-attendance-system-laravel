<?php
namespace App\Http\Controllers;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table = 'programs';

        protected $fillable = [
            'porgram_name',
            'program_image',
            'domestic_student',
            'international_student',
            'program_fees_message'
        ];
}
