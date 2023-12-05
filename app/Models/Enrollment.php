<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function saveEnrollments($data){
        return $this->create($data);
    }
    protected $fillables = ['Name','Address', 'Subject1', 'Subject2', 'Subject3', 'Subject4', 'Subject5'];
    protected $table = 'enrollments';
    public function getEnrollments(){
        return $this->all();
    }
    public function deleteEnrollments($id){
        $enrollments = $this->find($id);
        $enrollments->delete();
    }
}