<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use App\Models\Page;

class Pages extends Controller
{
    //Index
    public function index(Request $request){

        if ($request->ajax()) {

            $data = Page::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <ul class="action">
                        <li class="edit"><a href="javascript:void(0)" class="edit-data" data-id="' . $row['id'] . '"><i class="icon-pencil-alt"></i></a>
                        </li>
                        <li class="delete"><a href="javascript:void(0)" class="delete-data" data-id="' . $row['id'] . '"><i class="icon-trash"></i></a>
                        </li>
                    </ul>
                    ';
                    return $actionBtn;
                })
                ->addColumn('title', function ($row) {
                    $title = Str::title($row["title"]);
                    return $title;
                })
                ->addColumn('slug', function ($row) {
                    $slug = $row["slug"];
                    return $slug;
                })

                ->addColumn('content', function ($row) {
                    $content = Str::title($row["content"]);
                    return $content;
                })
                ->addColumn('status', function ($row) {
                    $status = '
                <div class="form-check-size">
                    <div class="form-check form-switch form-check-inline">
                        <input data-id="' . $row['id'] . '" class="form-check-input check-size toggle-status" type="checkbox" role="switch"';
                    if ($row['status'] == 1) :
                        $status .= 'checked';
                    else :
                        $status .= '';
                    endif;
                    $status .= '>
                    </div>
                </div>
                ';
                    return $status;
                })
                ->addColumn('created', function ($row) {
                    $created = $row["created_at"]->format("d M, Y");
                    return $created;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }

        return view('admin.pages.index');
    }

    // Add Page
    public function addPage(){
        return view('admin.pages.add');
    }

    // Save page
    public function savePage(Request $request){

        if($request->ajax()){

            $request->validate([
                'title' => ['required', 'string', 'min:3', 'unique:pages,title'],
                'meta_keywords' => ['required'],
                'meta_description' => ['required'],
                'meta_description' => ['required'],
                'editor' => 'required'
            ]);

            Page::create([
                'title' => Str::title($request->title),
                'slug' => Str::of($request->title)->slug('-'),
                'content' => $request->editor,
                'meta_title' => Str::title($request->title),
                'meta_keywords' => Str::title($request->meta_keywords),
                'meta_description' => Str::title($request->meta_description),
            ]);

            return response()->json(['success' => 'Page added successfully']);
        }

    }
}
