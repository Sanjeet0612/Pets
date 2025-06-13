<?php

namespace App\Http\Controllers\admin;
use DB;
use App\Models\AdminModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;



class AdminController extends Controller
{
    public function index(){
        return view('admin.indexx');
    }
    public function login(Request $request){

        if($request->isMethod('post')) {
            $request->validate([
                'adminName' => 'required',
                'adminPwd' => 'required'
            ]);
            $admin = new AdminModel;
            $result = $admin->logindata($request);

            if($result==1){
                return redirect('/admin/dashboard');
            }else if($result==2){
                return redirect('/admin/dashboard')->with('Bad', 'Bad Request!');
            }else{
                return redirect('/admin/dashboard')->with('Invalid', 'Invalid Email Id OR Password!');
            }
        }
    }
    // Login Section Start from Here
    public function dashboard(){

        $logSession = session()->get('logSession');
        if(isset($logSession)){
            $userid = $logSession['id'];
            if($userid!=""){
                return view('admin.dashboard');
            }else{
                 return redirect('/admin/logout');
            }
        }
    }
    // Menu Section Starting From Here
    public function manage_menu(Request $request){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if(isset($logSession)){
            if($request->isMethod('post')) {
                    $request->validate([
                        'menuName' => 'required',
                        'dheader'  => 'required',
                        'dfooter' => 'required',
                        'status' => 'required',
                    ]);

                    $admin = new AdminModel;
                    $result = $admin->addMenuName($request);
                    if($result==1){
                        return redirect('/admin/manage-menu');
                    }else{
                        echo "Something went wrong!";
                    }
            }else{
                $admin = new AdminModel;
                $tablename = 'tb_menu';
                $result = $admin->getAllData($tablename);
                return view('admin.manage_menu',['menu' => $result]);
            }
        }
    }

    public function edit_menu($id){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            $id = base64_decode($id);
            $admin = new AdminModel;
            $tablename = 'tb_menu';
            $result = $admin->getDataById($id,$tablename);
            //print_r($result);
            return view('admin.edit_menu',['menu' => $result]);
        }else{
            return redirect('admin/logout');
        }
    }

    public function update_menu(Request $request){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            if($request->isMethod('post')) {
                    $admin = new AdminModel;
                    $tablename = 'tb_menu';
                    $result = $admin->updateMneuById($request,$tablename);
                    if($result==1){
                        return redirect('/admin/manage-menu');
                    }else{
                        echo "Something Went wrong!";
                    }

            }else{
                return redirect('admin/logout');
            }

        }else{
            return redirect('admin/logout');
        }
    }

    public function delete_menu($id){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            $rowid = base64_decode($id);
            $admin = new AdminModel;
            $tablename = 'tb_menu';
            $result = $admin->deleteById($rowid,$tablename);
            if($result==1){
                return redirect('/admin/manage-menu');
            }

        }else{
            return redirect('/admin/logout');
        }
    }

    // Banner Section Start from Here
    public function manage_banner(Request $request){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if(isset($logSession)){
            if($request->isMethod('post')) {
                
                $request->validate([
                    'title1' => 'required',
                    'title2' => 'required',
                    'title3' => 'required',
                    'banner' => 'required|image|max:2048',
                    'status' => 'required',
                ]);

                $admin = new AdminModel;
                $result = $admin->addBanner($request);
                if($result==1){
                    return redirect('/admin/manage-banner');
                }

            }else{
                $admin = new AdminModel;
                $tablename = 'tb_banners';
                $result = $admin->getAllData($tablename);
                return view('admin.manage_banner',['banner' => $result]);
            }
        }else{
            echo "Bad Request!";
        }
    }
    public function edit_banner($id){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            $id = base64_decode($id);
            $admin = new AdminModel;
            $tablename = 'tb_banners';
            $result = $admin->getDataById($id,$tablename);
            //print_r($result);
            return view('admin.edit_banner',['banner' => $result]);
        }else{
            echo "Bad Request!";
        }
        
    }
    public function update_banner(Request $request){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            if($request->isMethod('post')) {
                    $admin = new AdminModel;
                    $tablename = 'tb_banners';
                    $result = $admin->updateById($request,$tablename);
                    if($result==1){
                        return redirect('/admin/manage-banner');
                    }
            }else{
                return redirect('/admin/logout');
            }
        }else{
            return redirect('/admin/logout');
        }

    }

    public function delete_banner($id){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            $rowid = base64_decode($id);
            $admin = new AdminModel;
            $tablename = 'tb_banners';
            $result = $admin->deleteById($rowid,$tablename);
            if($result==1){
                return redirect('/admin/manage-banner');
            }

        }else{
            return redirect('/admin/logout');
        }
    }
   
    // Conatct us section start from here
    public function manage_contact_us(){
        $logSession = session()->get('logSession');
        $userid     = $logSession['id'];
        if(isset($logSession)){
            $admin = new AdminModel;
            $tablename = 'tb_contact';
            $result = $admin->getAllData($tablename);
            return view('admin.manage_contact_us',['conatcus' => $result]);
        }else{
            return redirect('admin/logout');
        }
    }
    public function delete_conatct_us($id){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            $rowid = base64_decode($id);
            $admin = new AdminModel;
            $tablename = 'tb_contact';
            $result = $admin->deleteById($rowid,$tablename);
            if($result==1){
                return redirect('/admin/manage-contact-us');
            }

        }else{
            return redirect('/admin/logout');
        }
    }
    // Brand Section Start From Here

    public function manage_brand(Request $request){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if(isset($logSession)){
            if($request->isMethod('post')) {
                $request->validate([
                    'brandName' => 'required',
                    'status' => 'required',
                ]);
                $admin = new AdminModel;
                $result = $admin->addBrandName($request);
                if($result==1){
                    return redirect('/admin/manage-brand');
                }else{
                    echo "Something went wrong!";
                }
            }else{
                $admin = new AdminModel;
                $tablename = 'tb_brand';
                $result = $admin->getAllData($tablename);
                return view('admin.manage_brand',['brand' => $result]);
            }
        }else{
            return redirect('admin/logout');
        }
    }
    public function edit_brand($id){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            $id = base64_decode($id);
            $admin = new AdminModel;
            $tablename = 'tb_brand';
            $result = $admin->getDataById($id,$tablename);
            //print_r($result);
            return view('admin.edit_brand',['brand' => $result]);
        }else{
            echo "Bad Request!";
        }
    }
    public function update_brand(Request $request){

        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if(isset($logSession)){
            if($request->isMethod('post')) {
                $request->validate([
                    'brandName' => 'required',
                    'status' => 'required',
                ]);
                $admin = new AdminModel;
                $tablename = 'tb_brand';
                $result = $admin->updateBrandName($request,$tablename);
                if($result==1){
                    return redirect('/admin/manage-brand');
                }else{
                    echo "Something went wrong!";
                }
            }
        }else{
            return redirect('admin/logout');
        }
    }
    public function delete_brand($id){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            $rowid = base64_decode($id);
            $admin = new AdminModel;
            $tablename = 'tb_brand';
            $result = $admin->deleteById($rowid,$tablename);
            if($result==1){
                return redirect('/admin/manage-brand');
            }

        }else{
            return redirect('/admin/logout');
        }
    }
    // Category section start from here
    public function manage_category(Request $request){
        $logSession = session()->get('logSession');
        $userid     = $logSession['id'];
        if(isset($logSession)){
            if($request->isMethod('post')) {
                $request->validate([
                    'categoryName' => 'required',
                    'status' => 'required',
                ]);
                $admin = new AdminModel;
                $result = $admin->addCategoryName($request);
                if($result==1){
                    return redirect('/admin/manage-category');
                }else{
                    echo "Something went wrong!";
                }
            }else{
                $admin = new AdminModel;
                $tablename = 'tb_category';
                $result = $admin->getAllData($tablename);
                return view('admin.manage_category',['category' => $result]);
            }
        }else{
            return redirect('admin/logout');
        }
    }
    public function edit_category($id){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            $id = base64_decode($id);
            $admin = new AdminModel;
            $tablename = 'tb_category';
            $result = $admin->getDataById($id,$tablename);
            //print_r($result);
            return view('admin.edit_category',['category' => $result]);
        }else{
            echo "Bad Request!";
        }
    }
    public function update_category(Request $request){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if(isset($logSession)){
            if($request->isMethod('post')) {
                $request->validate([
                    'categoryName' => 'required',
                    'status' => 'required',
                ]);
                $admin = new AdminModel;
                $tablename = 'tb_category';
                $result = $admin->updateCategoryName($request,$tablename);
                if($result==1){
                    return redirect('/admin/manage-category')->with('success', 'Updated successfully!');
                }else{
                    echo "Something went wrong!";
                }
            }
        }else{
            return redirect('admin/logout');
        }
    }
    public function delete_category($id){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            $rowid = base64_decode($id);
            $admin = new AdminModel;
            $tablename = 'tb_category';
            $result = $admin->deleteById($rowid,$tablename);
            if($result==1){
                return redirect('/admin/manage-category')->with('success', 'Successfully deleted!');
            }

        }else{
            return redirect('/admin/logout');
        }
    }
    // Sub Category Section Start From Here
    public function manage_sub_category(Request $request){
        $logSession = session()->get('logSession');
        $userid     = $logSession['id'];
        if(isset($logSession)){
            if($request->isMethod('post')) {
                $request->validate([
                    'categoryName' => 'required',
                    'subCategoryName' => 'required',
                    'status' => 'required',
                ]);
                $admin = new AdminModel;
                $result = $admin->addSubCategory($request);
                if($result==1){
                    return redirect('/admin/manage-sub-category')->with('success', 'Added successfully!');
                }else{
                    echo "Something went wrong!";
                }
            }else{
                $admin = new AdminModel;
                $tablename = 'tb_category';
                $catresult = $admin->getAllData($tablename);
                $tablename = 'tb_sub_category';
                $result = $admin->getAllData($tablename);
                return view('admin.manage_sub_category',['subcategory' => $result,'category' => $catresult]);
            }
        }else{
            return redirect('admin/logout');
        }
    }
    public function edit_sub_category($id){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            $id = base64_decode($id);
            $admin = new AdminModel;
            $tablename = 'tb_category';
            $catresult = $admin->getAllData($tablename);
            $tablename = 'tb_sub_category';
            $result = $admin->getDataById($id,$tablename);
            //print_r($result);
            return view('admin.edit_sub_category',['subcategory' => $result,'category' => $catresult]);
        }else{
            echo "Bad Request!";
        }
    }
    public function update_sub_category(Request $request){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if(isset($logSession)){
            if($request->isMethod('post')) {
                $request->validate([
                    'categoryName' => 'required',
                    'subCategoryName' => 'required',
                    'status' => 'required',
                ]);
                $admin = new AdminModel;
                $tablename = 'tb_sub_category';
                $result = $admin->updateSubCategory($request,$tablename);
                if($result==1){
                    return redirect('/admin/manage-sub-category')->with('success', 'Updated successfully!');
                }else{
                    echo "Something went wrong!";
                }
            }
        }else{
            return redirect('admin/logout');
        }
    }
    public function delete_sub_category($id){
        $logSession = session()->get('logSession');
        $userid = $logSession['id'];
        if($userid!=""){
            $rowid = base64_decode($id);
            $admin = new AdminModel;
            $tablename = 'tb_sub_category';
            $result = $admin->deleteById($rowid,$tablename);
            if($result==1){
                return redirect('/admin/manage-sub-category')->with('success', 'Successfully deleted!');
            }
        }else{
            return redirect('/admin/logout');
        }
    }
    // Product Section start from here
    public function manage_product(Request $request){
        $logSession = session()->get('logSession');
        $userid     = $logSession['id'];
        if(isset($logSession)){
            if($request->isMethod('post')) {
                $request->validate([
                    'categoryName' => 'required',
                    'subCategoryName' => 'required',
                    'status' => 'required',
                ]);
                $admin = new AdminModel;
                $result = $admin->addSubCategory($request);
                if($result==1){
                    return redirect('/admin/manage-sub-category')->with('success', 'Added successfully!');
                }else{
                    echo "Something went wrong!";
                }
            }else{
                $admin = new AdminModel;
                $tablename = 'tb_category';
                $catresult = $admin->getAllData($tablename);
                $tablename = 'tb_sub_category';
                $result = $admin->getAllData($tablename);
                return view('admin.manage_product');
            }
        }else{
            return redirect('admin/logout');
        }
    }
    public function logout(Request $request){
       Session::forget('logSession');
       /* session_unset();
        session_destroy();*/
        return redirect('/admin/index'); 
    }

   
}
