<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodController extends Controller {

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        $good = new Good;

        $good->name = $request->name;
        $good->category_id = $request->category_id;
        $good->price = $request->price;
        $good->description = $request->description;
        $good->image = $request->image;

        $good->save();

        return redirect('/admin');
    }

    public function destroy(Category $category,Good $good) {
        $good->delete();
        return redirect('/admin/categories/'.$category->id);
    }

}
