<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function getDanhSach()
    {
    	$user = User::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }
    public function getThem()
    {
       return view ('admin.user.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required|min:5',
            'email'=>'required|email|unique:users,email',
            'password' =>'required|min:5|max:10',
            'passwordAgain' =>'required|same:password'
        ],[
            'name.required'=>'Bạn chưa nhập tên người dùng',
            'name.min'=>'Ten người dùng phải có ít nhất 5 ký tự',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Bạn chưa nhập đúng mail',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu có ít nhất 5 ký tự ',
            'password.max'=>'Mật khẩu tối đa 10 ký tự',
            'passwordAgain.required'=>'Bạn chưa nhâp lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu nhập lại chưa đúng'
        ]);
        $user= new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->quyen = $request->quyen;
        $user->save();
        return redirect('admin/user/danhsach')->with('thongbao','Bạn đã thêm người dùng thành công ');
    }
    public function getSua($id)
    {
        
    	$user=User::find($id);
        return view('admin.user.sua',['user'=>$user]);

    }
    public function postSua(Request $request,$id)
    {
        
    	 $this->validate($request,[
            'name'=> 'required|min:5',
  
         
        ],[
            'name.required'=>'Bạn chưa nhập tên người dùng',
            'name.min'=>'Ten người dùng phải có ít nhất 5 ký tự',
            
        ]);
        $user= User::find($id);
        $user->name = $request->name;
        $user->quyen = $request->quyen;
        if($request->changePassword =='on')
        {
            $this->validate($request,[
                'password' =>'required|min:5|max:10',
                'passwordAgain' =>'required|same:password'
            ],[
                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 5 ký tự ',
                'password.max'=>'Mật khẩu tối đa 10 ký tự',
                'passwordAgain.required'=>'Bạn chưa nhâp lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu nhập lại chưa đúng'
            ]);
            $user->password = bcrypt($request->password);
        }    
        
        $user->save();
        return redirect('admin/user/danhsach/')->with('thongbao','Bạn đã sửa người dùng thành công ');
     
    }
    public function getXoa($id)
    {
        $user= User::find($id);
        $user->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Bạn đã xóa người dùng thành công');
    }
    public function getDangNhapAdmin()
    {
        return view('admin.login');
    }
    public function postDangNhapAdmin(Request $request)
    {
        $this->validate($request,[
                'email'=>'required',
                'password'=>'required|min:5|max:10'
            ],[
                'email.required'=>'Bạn chưa nhập email',
                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 5 ký tự ',
                'password.max'=>'Mật khẩu tối đa 10 ký tự',

            ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
            {
                return redirect('admin/theloai/danhsach');
            }
            else
            {
                return redirect('admin/dangnhap')->with('thongbao','Đăng nhập ko thành công');
            }
    }
    public function getDangXuatAdmin()
    {
        Auth::logout();
        return redirect('admin/dangnhap');
    }

}
