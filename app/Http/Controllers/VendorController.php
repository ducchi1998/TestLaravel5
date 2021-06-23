<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all(); // lấy toàn bộ dữ liệu
        $listVendors = Vendor::latest()->paginate(10); // sắp sếp theo thứ tự mới nhất && phân trang

        return view('admin.vendor.index',[
            'data' => $listVendors,
            'vendors' => $vendors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendors = Vendor::all(); // lấy toàn bộ dữ liệu

        return view('admin.vendor.create',[
            'vendors' => $vendors
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
        // Bước 1: Nhận được data từ request
        //$name = $_POST['name'];
        $name = $request->input('name'); // tên
        $email = $request->input('email'); // email
        $phone = $request->input('phone'); // sdt
        $website = $request->input('website'); // tên web
        $address = $request->input('address'); // dia chi
        $position = $request->input('position'); // vị trí
        $is_active = $request->input('is_active'); // hiển thị

        // xác thực tính đúng đắn của dữ liệu
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
        ],[
            'name.required' => 'Bạn chưa nhập tên nhà cung cấp',
            'image.required' => 'Bạn chưa chọn ảnh',
            'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]); // nếu có lỗi return back url create , kèm theo một danh sách ,lỗi lưu vào biên $errors

        // B2: khoi tao model
        $vendor = new Vendor();
        $vendor->name = $name;
        $vendor->slug = str_slug($name);
        $vendor->email = $email;
        $vendor->phone = $phone;
        $vendor->website = $website;
        $vendor->address = $address;
        $vendor->position = $position;
        $vendor->is_active = $is_active ? $is_active : 0;

        // xử lý lưu ảnh
        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/vendor/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $vendor->image = $path_upload.$filename;
        }

        $vendor->save();

        // Bước 3: chuyển về trang danh sách
        return redirect()->route('admin.vendor.index');
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
        $vendor = Vendor::find($id);
        $vendors = Vendor::all();

        return view('admin.vendor.edit',[
            'vendor' => $vendor,
            'vendors' => $vendors
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
        // Bước 1: Nhận được data từ request
        //$name = $_POST['name'];
        $name = $request->input('name'); // tên
        $email = $request->input('email'); // email
        $phone = $request->input('phone'); // sdt
        $website = $request->input('website'); // tên web
        $address = $request->input('address'); // dia chi
        $position = $request->input('position'); // vị trí
        $is_active = $request->input('is_active'); // hiển thị

        // xác thực tính đúng đắn của dữ liệu
        $request->validate([
            'name' => 'required|max:255',
            //'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
        ],[
            'name.required' => 'Bạn chưa nhập tên nhà cung cấp',
            //'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]); // nếu có lỗi return back url create , kèm theo một danh sách ,lỗi lưu vào biên $errors

        // B2: khoi tao model
        $vendor = Vendor::find($id);
        $vendor->name = $name;
        $vendor->slug = str_slug($name);
        $vendor->email = $email;
        $vendor->phone = $phone;
        $vendor->website = $website;
        $vendor->address = $address;
        $vendor->position = $position;
        $vendor->is_active = $is_active ? $is_active : 0;

        // xử lý lưu ảnh
        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/vendor/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $vendor->image = $path_upload.$filename;
        }

        $vendor->save();

        // Bước 3: chuyển về trang danh sách
        return redirect()->route('admin.vendor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vendor::destroy($id); // DELETE FROM categories WHERE id = 56

        return response()->json(['status' => true], 200);
    }
}
