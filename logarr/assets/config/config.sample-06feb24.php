<?php 

// Logarr config file


                           
$config = array(

// ** Change Logarr site settings BELOW this line **

    'title' => 'Logarr',
		// Site Title

    'timezone' => 'UTC',
		// Timezone used for UI clock. IF on Linux, this is automatically generated. If on Windows, set this to a preferred value, or the default timezone of UTC will be used. 
		// timezone note 1: timezone format: ($timezone = 'America/Los_Angeles',) Timezones are listed here: https://php.net/manual/en/timezones.php

    'timestandard' => 0,
		// 1 = 12-hour format | 0 = 24-hour format

    'rftime' => '180000',
		// Specifies how frequently (in milliseconds) the UI clock will synchronize time with the hosting webserver.
		// rftime note 1: Time deviation should be minimal, therefore suggested value is ~ 180000 ms (3 min).

    'rflog' => '30000',
		// Log auto-update interval (in milliseconds) when enabled via toggle switch in UI.
		// rflog note 1: Set this value with the size of your logs as a deciding factor. If set too low (below ~10000ms), your browser will crash.
		// rflog note 2: During log update, the browser will have NO response. 

    'max-lines' => 2000,
		// Default line limit for all logs
		// NOTE:  This value will drastically effect the loading time of Logarr. If the Logarr UI loads slow, lower this value and/or ensure your logs are not too large.  See "rflog" note above.

    'username' => 'admin',
    //username to login with 

    'password' => 'admin',
    //password to login with


// ** Change Logarr site settings ABOVE this line **

    );

$logs = array(

    // ** Log paths are CASE SENSITIVE in a MS Windows environment **
    // Ensure correct permissions are set on the target log file
    // Ensure the logging applications' settings are set to "roll over/refresh" the log files at regular intervals
    // Depending on your environment, large log files could cause your webserver to crash.
    // Recommended individual log files be NO MORE than ~3MB in size  
    // If this page is exposed to your WAN, check the logging applications' settings for sensitive data within logs

    // Log path example: "NameOfLog" => 'C:/link/to/log/file.txt',

// ** Add Logs BELOW this line **


    "System Log" => '/var/log/syslog',

    'cache_log' => '/home/shone/Pictures/navarender/writable/logs/recache.cron.log'

    // "Radarr" => 'C:\ProgramData\Radarr\logs\radarr.txt',
    

// ** Add Logs ABOVE this line **

);

?>
