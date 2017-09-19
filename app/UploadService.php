<?php 

namespace App;

use Illuminate\Http\UploadedFile;

class UploadService
{
	public function store(UploadedFile $file)
	{
		$fileName = $this->generateFileName($file);
		$file->move(
			public_path('uploads'), $fileName
		);

		return $fileName;
	}

	private function generateFileName($file)
	{
		return time() . '.' . $file->getClientOriginalExtension();
	}
}