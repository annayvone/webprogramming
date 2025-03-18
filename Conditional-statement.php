<!DOCTYPE html>
<html>
<head>
    <title>Net Income Calculator</title>
</head>
<body>
    <?php
        $HourlyRate = 120; 
        $WorkDays = 26;
        $WorkHoursPerDay = 8;

        $TotalEarnings = $HourlyRate * $WorkHoursPerDay * $WorkDays;
        $NetIncome = $TotalEarnings; 

        if ($TotalEarnings > 15000 && $TotalEarnings <= 30000) {
            $NetIncome -= ($TotalEarnings - 15000) * 0.05; 
        } 
        elseif ($TotalEarnings > 30000) {
            $NetIncome -= (15000 * 0.05) + (($TotalEarnings - 30000) * 0.10);
        }

        echo "Hourly Rate: $" . $HourlyRate . "<br>";
        echo "Total Earnings: $" . $TotalEarnings . "<br>";
        echo "Net Income: $" . $NetIncome . "<br>";
    ?>
</body>
</html>

