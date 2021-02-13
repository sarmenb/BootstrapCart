<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Auth;

class GateGuardController extends Controller
{
    public function RoleRedirect()
	{
		if(Auth::user()->hasRole('admin'))
		{
			return redirect('admin/dashboard');
		}
		elseif(Auth::user()->hasRole('customer'))
		{
			return redirect('account/orders');
		}
		else
		{
			return redirect('/');
		}
	}
}
