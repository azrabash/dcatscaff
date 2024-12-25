<?php

namespace App\Admin\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\City;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;  
use DB;  

class ApiController extends Controller
{
	public function fetchProvince(Request $request)
	{ 	$areaId = $request->get('q');
		return Province::where('area_id', $areaId)->get(['id', DB::raw('name as text')]); }
	
	public function fetchCity(Request $request)
	{	$provinceId = $request->get('q');
		return City::where('province_id', $provinceId)->get(['id', DB::raw('name as text')]); }	



	
}