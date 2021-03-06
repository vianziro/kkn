<?php

class AdminController extends Controller
{

	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/admin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions' => array('admin','delete','index','view','create',
					'update','deletePrioritas','mahasiswaPrint','addPrioritas',
					'dependentSelectJurusan','deletePrioritas','deleteFile','downloadFile',
					'dependentSelectKecamatan','resetPassword','bayarAsuransi',
					'print','jurusan','kelompok','dependentSelectKelompok','bayar','findNim',
					'hapusAnggota', 'preview','cancel','lunasi','asuransi',
					'dependentSelectJurusan2','addAnggota','getMahasiswa',
					'dosen',
				),
				'roles' => array_merge(array(User::ROLE_ADMIN),$this->getMoreAllowRoles()),
			),
			array('deny',  // deny all users
				'users' => array('*'),
			),
		);
	}

	public function getMoreAllowRoles() {
		return array();
	}

	public function init()
	{

	}

}
