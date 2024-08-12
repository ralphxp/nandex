<?php 
namespace Codx\Comic\Model;


class Booking extends Model{

    protected $table = "bookings";
    
    protected $fillable = [
        'studentId',
        'charletId',
        'status'
    ];


    public function charlet()
    {
        return $this->belongsTo(Charlet::class, 'charletId');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'studentId');
    }








    public $timestamps = false;

    

}