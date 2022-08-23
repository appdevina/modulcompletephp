<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\JobLevel;
use App\Models\SubDivisi;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('setting.user.index', [
            'title' => 'User',
            'active' => 'setting',
            'users' => User::with(['joblevel', 'divisi', 'subdivisi'])->filter()->withTrashed()->orderBy('full_name')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setting.user.create', [
            'title' => 'User',
            'active' => 'setting',
            'joblevels' => JobLevel::all(),
            'divisis' => Divisi::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);
            $data['password'] = bcrypt($data['password']);
            $data['full_name'] = strtoupper($data['full_name']);
            User::create($data);
            return redirect('user')->with(['success' => 'Berhasil menambahkan user']);
        } catch (Exception $e) {
            return redirect('user')->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with(['joblevel', 'divisi', 'subdivisi.divisi'])->find($id);

        if(!$user){
            return redirect('user')->with(['error' => 'Tidak bisa mengedit user yang nonaktif, aktifkan terlebih dahulu']);
        }

        return view('setting.user.edit',[
            'title' => 'User',
            'active' => 'setting',
            'user' => $user,
            'joblevels' => JobLevel::all(),
            'divisis' => Divisi::all(),
            'subdivisis' => SubDivisi::where('divisi_id',$user->divisi_id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $token = PersonalAccessToken::where('tokenable_id', $id)->get()->first;
            if ($token) {
                $token->delete();
            }
            $user = User::find($id);
            $request->validate([
                'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $user->id],
            ]);
            $data = $request->all();
            unset($data['_token']);
            $subdivisi = SubDivisi::where('divisi_id',$request->divisi_id)->get();
            if(count($subdivisi) === 0){
                $data['sub_divisi_id'] = null;
            }
            if($request->password == null){
                $data['password'] = $user['password'];
            }
            $user->update($data);
            return redirect('user')->with(['success' => 'Berhasil merubah user']);
        } catch (Exception $e) {
            return redirect('user')->with(['error' => $e->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect('user')->with(['success' => 'Berhasil menonaktifkan user']);

        } catch (Exception $e) {
            return redirect('user')->with(['error' => $e->getMessage()]);
        }
    }

    public function active($id)
    {
        try {
            $user = User::withTrashed()->find($id);
            $user['deleted_at'] = null;
            $user->save();
            return redirect('user')->with(['success' => 'Berhasil mengaktifkan user']);
        } catch (Exception $e) {
            return redirect('user')->with(['error' => $e->getMessage()]);
        }
    }
}
