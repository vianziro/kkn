<?php

class m110319_082220_add_registred_to_mahasiswa extends CDbMigration
{
	public function up()
	{
		$this->addColumn('mahasiswa','registered','boolean');
		$this->dropColumn('mahasiswa','registred');
	}

	public function down()
	{
		$this->addColumn('mahasiswa','registred','boolean');
		$this->dropColumn('mahasiswa','registred');
	}
}
