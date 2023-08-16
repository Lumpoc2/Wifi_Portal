<?php
function getMacAddress() {
    $macAddress = '';
    
    $osType = strtoupper(substr(PHP_OS, 0, 3));
    
    if ($osType === 'WIN') {
        // Windows
        $command = 'ipconfig /all';
        ob_start();
        passthru($command);
        $output = ob_get_clean();
        
        $pattern = '/Physical\s+Address\s+:\s+([0-9A-Fa-f\-:]+)/';
        if (preg_match($pattern, $output, $matches)) {
            $macAddress = str_replace('-', ':', $matches[1]);
        }
    } elseif ($osType === 'LIN') {
        // Linux
        $command = '/sbin/ifconfig';
        ob_start();
        passthru($command);
        $output = ob_get_clean();
        
        $pattern = '/([0-9A-Fa-f\-:]{17})/';
        if (preg_match($pattern, $output, $matches)) {
            $macAddress = $matches[1];
        }
    } else {
        $macAddress = 'Unsupported OS';
    }
    
    return $macAddress;
}

$macAddress = getMacAddress();
echo "MAC Address: " . $macAddress;

echo "THIS IS TEST"
?>
