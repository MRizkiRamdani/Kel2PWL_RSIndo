<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;


class AdminController extends Controller
{
    public function addview()
    {
        if(Auth::id())
        {
            if(Auth::user()->role_id==1)
            {
                return view ('admin.add_doctor');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function upload(Request $request)
    {
        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->spesialist=$request->spesialist;
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }

    public function showdoctor()
    {
        $data=doctor::all();
        return view('admin.showdoctor', compact('data'));
    }

    public function del_doctor($id)
    {
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data=doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor=doctor::find($id);
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->spesialist=$request->spesialist;
        $doctor->room=$request->room;
        $image=$request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientoriginalExtension();
            $request->file->move('doctorimage',$imagename);
            $doctor->image=$imagename;
        }
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Update Successfully');
    }

    public function showappointment()
    {
        $data=appointment::all();
        return view('admin.showappointment', compact('data'));
    }

    public function approve($id)
    {
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }

    public function canceled($id)
    {
        $data=appointment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
    }

    public function delete_appoint($id)
    {
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    
    public function addkamar()
    {
        return view('admin.addkamar');
    }

    public function upload_kamar(Request $request)
    {
        $kamar=new kamar;
        $kamar->name=$request->name;
        $kamar->kelas=$request->kelas;
        $kamar->harga=$request->number;
        $kamar->save();
        return redirect()->back()->with('message', 'Kamar Added Successfully');
    }

    public function showkamar()
    {
        $data=kamar::all();
        return view('admin.showkamar', compact('data'));
    }

    public function del_kamar($id)
    {
        $data=kamar::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatekamar($id)
    {
        $data=kamar::find($id);
        return view('admin.update_kamar',compact('data'));
    }

    public function editkamar(Request $request, $id)
    {
        $kamar=kamar::find($id);
        $kamar->name=$request->name;
        $kamar->kelas=$request->kelas;
        $kamar->harga=$request->number;
        $kamar->save();
        return redirect()->back()->with('message', 'Kamar Update Successfully');
    }

    public function addrawatin()
    {  
        $kamar=kamar::all();
        return view('admin.addrawatin',compact('kamar'));
    }

    public function upload_rawat(Request $request)
    {
        $rawatinap=new rawatinap;
        $rawatinap->no_identitas=$request->identitas;
        $rawatinap->nama=$request->name;
        $rawatinap->phone=$request->phone;
        $rawatinap->alamat=$request->address;
        $rawatinap->tgl_lahir=$request->birthday;
        $rawatinap->gender=$request->gender;
        $rawatinap->nama_kmr=$request->kamar;
        $rawatinap->harga_kamar=$request->hargakamar;
        $rawatinap->gol_drh=$request->goldar;
        $rawatinap->pekerjaan=$request->work;
        $rawatinap->warganegara=$request->nation;
        $rawatinap->save();
        return redirect()->back()->with('message', 'Data rawat inap berhasil ditambahkan');
    }

    public function showrawatin()
    {
        $data=rawatinap::all();
        return view('admin.showrawatin', compact('data'));
    }

}
