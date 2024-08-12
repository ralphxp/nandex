<?php
namespace Codx\Comic\Controller;

use Codx\Comic\Auth;
use Codx\Comic\Model\Booking;
use Codx\Comic\Model\Charlet;
use Codx\Comic\Model\Student;
use Codx\Comic\Request;
use Codx\Ralph\Engine as View;


class HomeController extends Controller
{

    public function index()
    {
        if (Auth::isAuthenticated()) {
            // Charlet
            $user = Auth::user();
            try {

                $booking = Booking::with('charlet')->where('studentId', $user->id)->get()->firstOrFail();
                return $this->render('student.home', compact(['user', 'booking']));
            } catch (\Throwable $th) {
                $this->redirect('/apply');
            }

        }

        return View::view('welcome');
    }

    public function dashboard()
    {
        try{
        $students = Student::count();
        $allocated = Booking::where('status', 'approved')->count();
        $pending = Booking::where('status', 'pending')->count();
        $rooms = Charlet::where('space', '>', 0)->count();
        $bookings = Booking::with(['student', 'charlet'])->orderBy('id')->limit(10)->get();
        return $this->render('admin.dashboard', compact(['students', 'bookings', 'allocated', 'pending', 'rooms']));
        }
        catch(\Throwable $th){
            echo $th;
        }
    }
    
    public function viewApp(Request $request)
    {
        $booking = Booking::findOrFail($request->id)->with(['student', 'charlet'])->get()->first();
        // die($booking);
        return $this->render('admin.applications', compact(['booking']));
    }

    public function students(Request $request)
    {
        $students = Student::all();
        return $this->render('admin.view.students', compact('students'));
    }

    public function student(Request $request)
    {
        $student = Student::findOrFail($request->id)->with('booking')->get()->first();
        return $this->render('admin.view.student', compact('student'));
    }

    public function approveBooking(Request $request)
    {
        $booking = Booking::findOrFail($request->id);
        $booking->update($request->all());

        $this->redirect('/dashboard');
    }

    public function apply(Request $request)
    {
        $user = Auth::user();
        $charlets = Charlet::all();
        $success = false;
        return View::view('student.apply', compact(['user', 'charlets', 'success']));
    }

    public function book(Request $request)
    {
        $book = new Booking($request->all());
        $user = Auth::user();
        $charlets = Charlet::all();
        $book->space = 1;
        $success = false;
        if ($book->save()) {
            $success = true;

        }
        return View::view('student.apply', compact(['user', 'charlets', 'success']));
    }

    public function allocation()
    {
        $students = Student::all();
        $charlets = Charlet::all();
        $bookings = Booking::where('status', 'approved')->get();
        $this->render('admin.allocations', compact(['students', 'charlets', 'bookings']));
    }

    public function storeAllocation(Request $request)
    {

        $book = new Booking($request->all());
       
        
        $book->space = 1;
        $success = false;
        if ($book->save()) {
            $success = true;

        }

        return $this->allocation();
    }
}