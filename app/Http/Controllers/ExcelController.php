<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ExcelController extends Controller
{
    //
    public function show(){    	
		return view('default.excel.show');
	}
	
	public function find_data(Request $request){		
		
		if ($request->isMethod('post') && $request->hasFile('file-excel')){
			
			$file = $request->file('file-excel');
			$ext = $file->getClientOriginalExtension();
			$size = $file->getSize();
			$fileName = $file->getClientOriginalName();
			$destinationPath = 'uploads';
			$fullPath = public_path($destinationPath.'/'.$fileName);
			
			if	($ext !== 'xls' && $ext !== 'xlsx')
				return view('default.excel.find_data', ['error' => 'Для анализа данных выберите excel файл (xls;xlsx).']);
			
			if (($ext == 'xlsx' && $size <= 6590) || ($ext == 'xls' && $size <= 26112))
				return view('default.excel.find_data', ['error' => 'Вы выбрали пустой excel файл.']);
						
			$file->move($destinationPath, $fileName);
			
			$data = [];
			
			$reader = Excel::load($fullPath, function($reader){})->get();
    		
    		foreach($reader as $row)
				$data[] = [ $row->getTitle() => $row->getHeading()];
			//dd($fields);   		
			return view('default.excel.find_data', compact('data'));
		}
		else if ('get'){
			//abort('404');
			return view('default.excel.find_data');	
		}
		
		abort('404');
	}
}
