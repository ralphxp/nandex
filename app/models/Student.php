<?php 
namespace Codx\Comic\Model;


class Student extends Model{

    protected $table = "students";

    protected $fillable = [
        "fullname",
        "email",
        "phone",
        "matric",
        "faculty",
        "department",
        "course",
        "password",
    ];

    public function booking()
    {
        return $this->hasOne(Booking::class, 'studentId');
    }

}