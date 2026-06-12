<?php
function multiplication_table(int $n, int $limit = 12): array {
	$rows = [];
	for ($i = 1; $i <= $limit; $i++) {
		$rows[] = "$n × $i = " . ($n * $i);
	}
	return $rows;
}

function add_numbers($a, $b) {
	return $a + $b;
}

$mult_result = [];
$sum_result = null;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['multiply'])) {
		$n = isset($_POST['factor']) ? intval($_POST['factor']) : 0;
		$limit = isset($_POST['limit']) ? intval($_POST['limit']) : 12;
		$limit = $limit > 0 ? $limit : 12;
		$mult_result = multiplication_table($n, $limit);
	}

	if (isset($_POST['add'])) {
		$a = $_POST['a'] ?? '';
		$b = $_POST['b'] ?? '';
		if (!is_numeric($a) || !is_numeric($b)) {
			$errors[] = 'กรุณาใส่ตัวเลขในช่องจำนวนที่ต้องการบวก';
		} else {
			$sum_result = add_numbers((float)$a, (float)$b);
		}
	}
}
?>
<!doctype html>
<html lang="th">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Week4 - ฟังก์ชัน PHP</title>
	<style>
		body{font-family:Arial,helvetica,sans-serif;margin:24px}
		.card{border:1px solid #ddd;padding:16px;border-radius:6px;margin-bottom:16px;max-width:520px}
		input[type=number], input[type=text]{padding:6px;width:120px}
		button{padding:6px 10px}
		.result{background:#f8f8f8;padding:8px;margin-top:8px;border-radius:4px}
		.error{color:#900}
	</style>
</head>
<body>
	<h1>Week4: ฟังก์ชัน PHP</h1>

	<div class="card">
		<h2> สูตรคูณ (ป้อนตัวเลขแล้วแสดง loop)</h2>
		<form method="post">
			<label>ตัวเลข: <input type="number" name="factor" required></label>
			<label style="margin-left:8px">จำนวนบรรทัด: <input type="number" name="limit" min="1" value="12"></label>
			<button type="submit" name="multiply">แสดงสูตรคูณ</button>
		</form>

		<?php if (!empty($mult_result)): ?>
			<div class="result">
				<strong>ผลลัพธ์:</strong>
				<ul>
					<?php foreach ($mult_result as $line): ?>
						<li><?= htmlspecialchars($line) ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
	</div>

	<div class="card">
		<h2> ฟังก์ชันบวกเลข</h2>
		<form method="post">
			<label>จำนวนที่ 1: <input type="text" name="a" required></label>
			<label style="margin-left:8px">จำนวนที่ 2: <input type="text" name="b" required></label>
			<button type="submit" name="add">คำนวณผลรวม</button>
		</form>

		<?php if (!empty($errors)): ?>
			<div class="error">
				<?php foreach ($errors as $e) echo htmlspecialchars($e) . '<br>'; ?>
			</div>
		<?php endif; ?>

		<?php if ($sum_result !== null): ?>
			<div class="result">
				<strong>ผลรวม:</strong> <?= htmlspecialchars((string)$sum_result) ?>
			</div>
		<?php endif; ?>
	</div>

</body>
</html>

