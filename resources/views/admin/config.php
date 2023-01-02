<?php 
 
// Database configuration    
define('DB_HOST', '127.0.0.1'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'pmjdrivingschool'); 
 
// Google API configuration 
define('GOOGLE_CLIENT_ID', '473827669046-800lta2862ccmkm24ccoh7jf21q57ocs.apps.googleusercontent.com'); 
define('GOOGLE_CLIENT_SECRET', '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'); 
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar');
define('REDIRECT_URI', 'http://127.0.0.1:8000/google_calendar_event_sync.php'); 
 
// Start session 
if(!session_id()) session_start(); 

// Google OAuth URL 
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope='.urlencode(GOOGLE_OAUTH_SCOPE).'&redirect_uri='.REDIRECT_URI.'&response_type=code&client_id='.GOOGLE_CLIENT_ID.
'&access_type=online'; 


?>