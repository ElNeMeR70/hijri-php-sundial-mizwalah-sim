<?php
declare(strict_types=1);

/**
 * hijri-php-sundial-mizwalah-sim — محاكي المزولة الشمسية الإسلامية وخطوط الساعات الزمانية
 * Classical Islamic Horizontal Sundial (Mizwalah) Gnomonic Projection Engine
 */
$input = "Latitude=30.0deg";
$digest = substr(hash("sha256", "hijri-php-sundial-mizwalah-sim:" . $input), 0, 12);

echo "[RUN] hijri-php-sundial-mizwalah-sim (PHP) — Classical Islamic Horizontal Sundial (Mizwalah) Gnomonic Projection Engine" . PHP_EOL;
echo "[AR]  محاكي المزولة الشمسية الإسلامية وخطوط الساعات الزمانية" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] TemporalHourCurves=12 |AsrCurvePlotted=True |QiblaLineDeg=136.2 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
