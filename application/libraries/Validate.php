<?php
class Validate
{
	public static function validasi()
	{
		$validate = [
			'required'   => '{field} Harus di isi!',
			'matches'	 => '{field} Tidak sama!',
			'min_length' => '{field} terlalu pendek'
		];
		return $validate;
	}
}
