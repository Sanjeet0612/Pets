<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class AdminModel extends Model
{

    public function logindata($request){
        $now = now();
        $formattedDate  = $now->format('Y-m-d H:i:s');
        $upassword      = md5($request['adminPwd']);
        $adminName       = $request['adminName'];
        $user = DB::table('tb_admin')->where('username', $adminName)->where('password', $upassword)->where('status', 1)->count();
        if($user>1){
            return 2;
        }else if($user==1){
            $userres = DB::table('tb_admin')->where('username', $adminName)->where('password', $upassword)->where('status', 1)->first();
            $id = $userres->id;
            $name = $userres->username;
            $user = array('id' => $id,'username' => $name);
            session()->put('logSession', $user);
            return 1;
        }else{
            return 0;
        }
    }
    // Menu Section Start From Here

    public function addMenuName($request){
        $now = now();
        $formattedDate  = $now->format('Y-m-d H:i:s');
        $menuName       = $request['menuName'];
        $dheader        = $request['dheader'];
        $dfooter        = $request['dfooter'];
        $slug           = strtolower($request['menuName']);  
        $newslug        = str_replace(" ", "-", $slug);  
        $status         = $request['status'];
        $updated_at     = $formattedDate;
        $created_at     = $formattedDate;

        $values = array('menuName' => $menuName,'slug'=>$newslug ,'dheader'=>$dheader,'dfooter'=>$dfooter,'updated_at'=>$updated_at,'created_at'=>$created_at,'status'=>$status);
        $dbresult = DB::table('tb_menu')->insert($values);
       if($dbresult) {
            return true;
        } else {
            return false;
        }
    }
    public function updateMneuById($request,$tablename){
            $now = now();
            $formattedDate  = $now->format('Y-m-d H:i:s');
            $menuName       = $request['menuName'];
            $slug           = strtolower($request['menuName']);  
            $newslug        = str_replace(" ", "-", $slug); 
            $dheader        = $request['dheader'];
            $dfooter        = $request['dfooter']; 
            $status         = $request['status'];
            $updated_at     = $formattedDate;
            $created_at     = $formattedDate;
             $rowid         = base64_decode($request['rowid']);
            $result = DB::table($tablename)->where('id',$rowid)->update(['menuName' => $menuName,'slug'=>$newslug ,'dheader'=>$dheader,'dfooter'=>$dfooter,'updated_at'=>$updated_at,'created_at'=>$created_at,'status' => $status]);
            if($result > 0){
                return true; // Rows were updated
            } 
            else{
                return false; // No rows were updated (possibly same data or wrong ID)
            }
    }
    

    //Banner Section Start From Here
    public function addBanner($request){
        $now = now();
        $formattedDate  = $now->format('Y-m-d H:i:s');
        $title1         = $request['title1'];
        $title2         = $request['title2'];
        $title3         = $request['title3'];
        $status         = $request['status'];
        $updated_at     = $formattedDate;
        $created_at     = $formattedDate;

        // Store the uploaded file
        //$path = $request->file('banner')->store('banners', 'public');


        //$path = $request->file('banner'); 

        $file = $request->file('banner');

            // Define folder and filename
            $folder = 'banners/';
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
            // Move file to public folder
            $file->move(public_path($folder), $filename);

            $fullpath = $folder.$filename;
            $values = array('title1' => $title1,'title2' => $title2,'title3' => $title3,'image' => $fullpath,'updated_at'=>$updated_at,'created_at'=>$created_at,'status'=>$status);
            $dbresult = DB::table('tb_banners')->insert($values);
            if($dbresult){
                return 1;
            }else{
                return 0;
            }
    }

    public function getAllData($tablename){
        $user = DB::table($tablename)->select('*')->get()->toArray();
        $numofResult = count($user);
        if($numofResult>=1){
            return $user;
        }else{
            return false;
        }  
    }
    public function getDataById($id,$tablename){
        $banner = DB::table($tablename)->select('*')->where('id', $id)->get()->toArray();
        $numofResult = count($banner);
        if($numofResult>=1){
            return $banner;
        }else{
            return false;
        }
    }

    public function updateById($request,$tablename){
        $now            = now();
        $formattedDate  = $now->format('Y-m-d H:i:s');
        $status         = $request['status'];
        $title1         = $request['title1'];
        $title2         = $request['title2'];
        $title3         = $request['title3'];
        $updated_at     = $formattedDate;
        $created_at     = $formattedDate;
        $rowid          = base64_decode($request['rowid']);
        $imageName      = $request['imagename'];
        $newfile        = explode("banners/",$imageName);
        $delimg         = $newfile[1];
        $file           = $request->file('banner');
        
        if($request->hasFile('banner')) {

            $path = public_path($imageName );

            if($delimg && file_exists($path)) {
                unlink($path);
            }

            $folder = 'banners/';
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($folder), $filename);
            $fullpath = $folder.$filename;
            DB::table($tablename)->where('id',$rowid)->update(['title1' => $title1,'title2' => $title2,'title3' => $title3,'image'=>$fullpath,'updated_at'=>$updated_at,'created_at'=>$created_at,'status' => $status]);
            return true;
        }else{
            DB::table($tablename)->where('id',$rowid)->update(['title1' => $title1,'title2' => $title2,'title3' => $title3,'updated_at'=>$updated_at,'created_at'=>$created_at,'status' => $status]);
            return true;
        }
    }

    public function deleteById($id,$tablename){
        DB::table($tablename)->where('id',$id)->delete();
        return true;
    }
    // Brand Section Starting from Here
    public function addBrandName($request){
            $now = now();
            $formattedDate  = $now->format('Y-m-d H:i:s');
            $brandName      = $request['brandName'];
            $slug           = strtolower($request['brandName']);  
            $newslug        = str_replace(" ", "-", $slug);  
            $status         = $request['status'];
            $updated_at     = $formattedDate;
            $created_at     = $formattedDate;

            $values = array('brandName' => $brandName,'slug'=>$newslug ,'created_at'=>$created_at,'updated_at'=>$updated_at,'status'=>$status);
            $dbresult = DB::table('tb_brand')->insert($values);
            if($dbresult) {
                return true;
            } else {
                return false;
            }
    }

    public function updateBrandName($request,$tablename){

        $now            = now();
        $formattedDate  = $now->format('Y-m-d H:i:s');
        $brandName      = $request['brandName'];
        $slug           = strtolower($request['brandName']);  
        $newslug        = str_replace(" ", "-", $slug);  
        $status         = $request['status'];
        $updated_at     = $formattedDate;
        $created_at     = $formattedDate;
        $rowid          = base64_decode($request['rowid']);
        $result = DB::table($tablename)->where('id',$rowid)->update(['brandName' => $brandName,'slug'=>$newslug ,'updated_at'=>$updated_at,'status' => $status]);
        if($result > 0){
            return true; // Rows were updated
        } 
        else{
            return false; // No rows were updated (possibly same data or wrong ID)
        }

    }
    // Category Section Starting from here

    public function addCategoryName($request){
            
        $now            = now();
        $formattedDate  = $now->format('Y-m-d H:i:s');
        $categoryName   = $request['categoryName'];
        $slug           = strtolower($request['categoryName']);  
        $newslug        = str_replace(" ", "-", $slug);  
        $status         = $request['status'];
        $updated_at     = $formattedDate;
        $created_at     = $formattedDate;
        $rowid          = base64_decode($request['rowid']);
        $values = array('categoryName' => $categoryName,'slug'=>$newslug ,'created_at'=>$created_at,'updated_at'=>$updated_at,'status'=>$status);
        $dbresult = DB::table('tb_category')->insert($values);
        if($dbresult) {
            return true;
        } else {
            return false;
        }
    }
    public function updateCategoryName($request,$tablename){
        $now            = now();
        $formattedDate  = $now->format('Y-m-d H:i:s');
        $categoryName   = $request['categoryName'];
        $slug           = strtolower($request['categoryName']);  
        $newslug        = str_replace(" ", "-", $slug);  
        $status         = $request['status'];
        $updated_at     = $formattedDate;
        $created_at     = $formattedDate;
        $rowid          = base64_decode($request['rowid']);
        $result = DB::table($tablename)->where('id',$rowid)->update(['categoryName' => $categoryName,'slug'=>$newslug ,'updated_at'=>$updated_at,'status' => $status]);
        if($result > 0){
            return true; // Rows were updated
        } 
        else{
            return false; // No rows were updated (possibly same data or wrong ID)
        }
    }
    // Sub Category Section Starting from here
    public function addSubCategory($request){

        $now            = now();
        $formattedDate  = $now->format('Y-m-d H:i:s');
        $categoryName   = $request['categoryName'];
        $subCategoryName= $request['subCategoryName'];
        $slug           = strtolower($request['subCategoryName']);  
        $newslug        = str_replace(" ", "-", $slug);  
        $status         = $request['status'];
        $updated_at     = $formattedDate;
        $created_at     = $formattedDate;
        $rowid          = base64_decode($request['rowid']);
        $values = array('category' => $categoryName,'subcategory'=>$subCategoryName,'slug'=>$newslug ,'created_at'=>$created_at,'updated_at'=>$updated_at,'status'=>$status);
        $dbresult = DB::table('tb_sub_category')->insert($values);
        if($dbresult) {
            return true;
        } else {
            return false;
        }

    }
    public function updateSubCategory($request,$tablename){
        $now            = now();
        $formattedDate  = $now->format('Y-m-d H:i:s');
        $categoryName   = $request['categoryName'];
        $subCategoryName= $request['subCategoryName'];
        $slug           = strtolower($request['subCategoryName']);  
        $newslug        = str_replace(" ", "-", $slug);  
        $status         = $request['status'];
        $updated_at     = $formattedDate;
        $created_at     = $formattedDate;
        $rowid          = base64_decode($request['rowid']);
        $result = DB::table($tablename)->where('id',$rowid)->update(['category' => $categoryName,'subcategory'=>$subCategoryName,'slug'=>$newslug ,'updated_at'=>$updated_at,'status'=>$status]);
        if($result > 0){
            return true; // Rows were updated
        } 
        else{
            return false; // No rows were updated (possibly same data or wrong ID)
        }
    }

}
