<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Vendor;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::latest()->paginate(20);
        //$data = Product::all();

        return view('admin.product.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(); // SELECT * FROM categories
        $vendors = Vendor::all(); // SELECT * FROM venders

        return view('admin.product.create', [
            'categories' => $categories,
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
        // xác thực tính đúng đắn của dữ liệu
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            'image.required' => 'Bạn chưa chọn ảnh',
            'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]); // nếu có lỗi return back url create , kèm theo một danh sách ,lỗi lưu vào biên $errors

        $product = new Product(); // khởi tạo model
        $product->name = $request->input('name'); // $_POST['name'];
        $product->slug = str_slug($request->input('name'));

        // Upload file
        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/product/';
            // Thực hiện upload file
            $file->move($path_upload,$filename); // upload lên thư mục public/uploads/product

            $product->image = $path_upload.$filename;
        }

        $product->stock = $request->input('stock'); // số lượng
        $product->price = $request->input('price'); // giá bán
        $product->sale = $request->input('sale'); // giá khuyến mại
        $product->category_id = $request->input('category_id');
        $product->vendor_id = $request->input('vendor_id');
        $product->sku = $request->input('sku');
        $product->position = $request->input('position');
        $product->url = $request->input('url');

        //kiem tra is_active co ton tai khong
        if ($request->has('is_active')){
            $product->is_active = $request->input('is_active') ? $request->input('is_active') : 0;
        }

        // Sản phẩm Hot
        if ($request->has('is_hot')){
            $product->is_hot = $request->input('is_hot') ? $request->input('is_hot') : 0;
        }

        $product->summary = $request->input('summary');
        $product->description = $request->input('description');
        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->save();

        // chuyển hướng đến trang
        return redirect()->route('admin.product.index');
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
        $product = Product::find($id);
        $categories = Category::all(); // SELECT * FROM categories
        $vendors = Vendor::all(); // SELECT * FROM venders

        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories,
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
        // xác thực tính đúng đắn của dữ liệu
        $request->validate([
            'name' => 'required|max:255',
            //'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            //'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]); // nếu có lỗi return back url create , kèm theo một danh sách ,lỗi lưu vào biên $errors

        $product = Product::find($id); // SELECT * FROM products where id = 60
        $product->name = $request->input('name'); // $_POST['name'];
        $product->slug = str_slug($request->input('name'));

        // Upload file
        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // xóa file cũ
            @unlink(public_path($product->image));
            // get file
            $file = $request->file('image');
            // đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/product/';
            // Thực hiện upload file
            $file->move($path_upload,$filename); // upload lên thư mục public/uploads/product

            $product->image = $path_upload.$filename;
        }

        $product->stock = $request->input('stock'); // số lượng
        $product->price = $request->input('price'); // giá bán
        $product->sale = $request->input('sale'); // giá khuyến mại
        $product->category_id = $request->input('category_id');
        $product->vendor_id = $request->input('vendor_id');
        $product->sku = $request->input('sku');
        $product->position = $request->input('position');
        $product->url = $request->input('url');

        //kiem tra is_active co ton tai khong
        if ($request->has('is_active')){
            $product->is_active = $request->input('is_active') ? $request->input('is_active') : 0;
        }

        // Sản phẩm Hot
        if ($request->has('is_hot')){
            $product->is_hot = $request->input('is_hot') ? $request->input('is_hot') : 0;
        }

        $product->summary = $request->input('summary');
        $product->description = $request->input('description');
        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->save();

        // chuyển hướng đến trang danh sách
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id); // DELETE FROM categories WHERE id = 56

        return response()->json(['status' => true], 200);
    }
}
