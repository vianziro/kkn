<?php
$this->breadcrumbs=array(
    'Mahasiswas'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label' => Yii::t('app','List Mahasiswa'), 'url' => array('index')),
);
?>

<h2><?php echo Yii::t('app','Create New Mahasiswa') ?></h2>

<?php echo $this->renderPartial('_form', array('mahasiswa'=>$mahasiswa)); ?>
