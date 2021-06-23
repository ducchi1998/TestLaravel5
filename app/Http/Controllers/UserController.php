<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUsers = User::latest()->paginate(15); // sắp sếp theo thứ tự mới nhất && phân trang

        return view('admin.user.index',[
            'data' => $listUsers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:16|min:6',
            'avatar' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            'avatar.required' => 'Bạn chưa chọn ảnh',
            'avatar.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]);

        $is_active = $request->input('is_active');
        // Bước 2: khởi tạo model
        $user = new User(); // tên bảng => class
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 1;
        $user->is_active = !empty($is_active) ? $is_active : 0;

        // xử lý lưu ảnh
        if ($request->hasFile('avatar')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('avatar');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/user/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $user->avatar = $path_upload.$filename;
        }

        $user->save();

        // Bước 3: chuyển về trang danh sách
        return redirect()->route('admin.user.index');
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
        $user = User::find($id);

        return view('admin.user.edit', [
            'user' => $user,
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
        $request->validate([
            'name' => 'required|max:255',

            //'avatar' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            //'avatar.required' => 'Bạn chưa chọn ảnh',
            //'avatar.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]);

        $is_active = $request->input('is_active');
        // Bước 2: khởi tạo model
        $user = User::find($id); // tên bảng => class
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // nhập MK mới
        $new_password = $request->input('password');
        if (!empty($new_password)) {
            $user->password = bcrypt($new_password);
        }
        $user->role_id = 1;
        $user->is_active = !empty($is_active) ? $is_active : 0;

        // xử lý lưu ảnh
        if ($request->hasFile('avatar')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('avatar');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/user/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $user->avatar = $path_upload.$filename;
        }

        $user->save();

        // Bước 3: chuyển về trang danh sách
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id); // DELETE FROM categories WHERE id = 56

        return response()->json(['status' => true], 200);
    }
}
