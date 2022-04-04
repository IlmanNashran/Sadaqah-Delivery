<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\Stroage;


class MenuController extends Controller
{

  public function create(){
      return view('ManageMenu.adminCreateMenu');
  }

  public function store(Request $request)
  {

    $data=new Menu();
    $image=$request->image;
    $filename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('assets.file',$filename);
    $data->image=$filename;

    $data->name=$request->name;
    $data->description=$request->description;
    $data->price=$request->price;
    $data->category=$request->category;
    $data->save();
    return redirect()->route('menu.create')->with('message',"menu has been added sucessfully");
}

  public function menulist(){
    $menus = Menu::paginate(5);
    return view('ManageMenu.adminMenu',compact('menus'));
  }

  public function edit($id)
  {
      $menu = Menu::find($id);
      return view('ManageMenu.adminEditMenu',compact('menu'));
  }

  public function update(Request $request, $id)
  {
      $menu = Menu::find($id);

      $image=$request->image;
      $filename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('assets.file',$filename);
      $menu->image=$filename;
    
      $menu->name = $request->name;
      $menu->description = $request->description;
      $menu->price = $request->price;
      $menu->save();
      return redirect()->route('menu.menulist')->with('message','menu update successfully!');

  }

  public function destroy($id)
  {
      $menu=Menu::findOrFail($id);
      $menu->delete();

      return redirect()->route('menu.menulist')->with('message','Menu has bee delete sucessfully');
  }

  public function viewuser()
  {
      $users = User::where('is_admin',0)->get();
      return view('ManageProfile.adminViewProfile',compact('users'));
  }

  public function userViewMenu(){
    $menus = Menu::latest()->get();
    return view('ManageMenu.userViewMenu',compact('menus'));
  }

  public function userViewCategoryMenu(Request $request){

    $menus = Menu::where('category',$request->category)->get();
    return view('ManageMenu.userViewMenu', compact('menus'));
  }
  
}
