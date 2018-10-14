## Script to send SMS using smsgateway.me services

### Pre-Reqs:
	(i) Install SMS Gateway ME API Andorid App in your mobile, which will act as a gateway through which message will get send to your audience
        (ii) After App installation, Register with your mail-id and password.
        (iii) Using same credential, login in http://smsgateway.me, once you logged in. Navigate to https://smsgateway.me/dashboard/devices , you will see the Device ( your Andorid device ) details, note down the 'ID'
        (iv)Then Navigate to https://smsgateway.me/dashboard/settings , note down 'API Token'
        (v)Bare Min.requirement for this script is php 5.4 and Composor. ( Ref: https://github.com/smsgatewayme/client-php )
        (vi)you need to export few environment variables which is required for the script ( using Bash export command ) , variables are below.
            (a)API_KEY  //ref-step (iv)
            (b)TO_NUM  // this is the target audience number
            (c)FROM_DEVICEID //ref-step (iii)
        (vii) After exporting the environment varibale, run the script like ``php send_sms.php``
        (viii)Further help mail me to m_az@live.in    
