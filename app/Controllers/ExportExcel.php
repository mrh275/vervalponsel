<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ExportData;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportExcel extends BaseController
{

	public function exportDataPonsel()
	{
		$this->exportData = new ExportData();
		$dataPonsel = $this->exportData->getAllData();

		$spreadsheet = new Spreadsheet();
		// tulis header/nama kolom 
		$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A1', 'Data Ponsel Siswa SMAN 1 Rawamerta')
			->setCellValue('A2', 'Tanggal cetak : ' . date('d-F-Y'))
			->setCellValue('A4', 'NO')
			->setCellValue('B4', 'NIS')
			->setCellValue('C4', 'Nama')
			->setCellValue('D4', 'Kelas')
			->setCellValue('E4', 'Nomor HP')
			->setCellValue('F4', 'Status')
			->setCellValue('G4', 'Kepemilikan');

		$column = 5;
		$nomor = 1;
		// tulis data mobil ke cell
		foreach ($dataPonsel as $data) {
			$spreadsheet->setActiveSheetIndex(0)
				->setCellValue('A' . $column, $nomor)
				->setCellValue('B' . $column, $data['nis'])
				->setCellValue('C' . $column, $data['nama'])
				->setCellValue('D' . $column, $data['kelas'])
				->setCellValue('E' . $column, $data['nomor_hp'])
				->setCellValue('F' . $column, $data['is_active'])
				->setCellValue('G' . $column, $data['kepemilikan']);
			$column++;
			$nomor++;
		}
		// tulis dalam format .xlsx
		$writer = new Xlsx($spreadsheet);
		$fileName = 'data-verval-ponsel-siswa';

		// Redirect hasil generate xlsx ke web client
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
}
