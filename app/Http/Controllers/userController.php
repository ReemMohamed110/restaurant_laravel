<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::paginate(10);
        return view('admin.pages.allUsers')->with(['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'email'=>'exists:users,email',
        ]);
        $user = User::where('email', $request->email)->first();
      if($user){
        $user->update([
            'role'=>'admin'
        ]);
        return redirect('addAdmin')->with('success', 'Admin added successfully');
    }

    return redirect('addAdmin')->with('fail', 'User not found');
        
    }

    /**
     * Display the specified resource.
     */
    public function addAdmin()
    {
        return view('admin.pages.add_admin');
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Post $post)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdatePostRequest $request, Post $post)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(User $user,string $id)
    {
        $user=User::find($id);
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }
        User::destroy($user->id);
            return back()->with('deleted', 'user deleted successfully');
    }
}
