<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags()?>
	<title>Документ</title>
	<?php $this->head() ?>
	Ghbdtn
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">


	<div class="container">
		<?= $content ?>
	</div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>