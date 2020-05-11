<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Yajra\Datatables\Facades\Datatables;
use Carbon\Carbon;
use App\Role;
use App\User;


class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Carbon::setlocale(config('app.locale'));

        // // middleware
        // $this->middleware('protected-user-admin');
        // $this->middleware('can:role.index')->only('index');
        // $this->middleware('can:role.create')->only(['create', 'store']);
        // $this->middleware('can:role.edit')->only(['edit', 'update']);
        // $this->middleware('can:role.show')->only('show');
        // $this->middleware('can:role.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        if ($request->ajax()) {
           return $this->list();
        }

        return view('dashboard.roles.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {   
        $roles = Role::list();

        return datatables()
            ->collection($roles)
            ->addColumn('actions', 'components.actions')
            ->rawColumns(['actions'])
            ->editColumn('created_at', function(Role $role) {
                return $role->created_at->diffForHumans();
            })->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|unique:roles']);

        try {
            $create = Role::create($request->all());
            
            return ['data' => $create, 'message' => 'success!'];
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return $role;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        try {
            if ( $role->update($request->all()) ) {
                $request->session()->flash('message', 'role update!'); 
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        return $role;
    }
}
