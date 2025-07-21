<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
        .content {
            background: #f8fafc;
            padding: 20px;
            border: 1px solid #e2e8f0;
        }
        .footer {
            background: #1e293b;
            color: white;
            padding: 15px;
            border-radius: 0 0 8px 8px;
            text-align: center;
            font-size: 14px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field label {
            font-weight: bold;
            color: #1e293b;
            display: block;
            margin-bottom: 5px;
        }
        .field-value {
            background: white;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #e2e8f0;
        }
        .message-box {
            background: white;
            padding: 15px;
            border-radius: 4px;
            border: 1px solid #e2e8f0;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Message</h1>
        <p>You have received a new message from your portfolio website</p>
    </div>
    
    <div class="content">
        <div class="field">
            <label>Name:</label>
            <div class="field-value">{{ $contactData['name'] }}</div>
        </div>
        
        <div class="field">
            <label>Email:</label>
            <div class="field-value">{{ $contactData['email'] }}</div>
        </div>
        
        <div class="field">
            <label>Project:</label>
            <div class="field-value">{{ $contactData['project'] }}</div>
        </div>
        
        <div class="field">
            <label>Message:</label>
            <div class="message-box">{{ $contactData['message'] }}</div>
        </div>
        
        <div class="field">
            <label>Sent at:</label>
            <div class="field-value">{{ now()->format('F j, Y - g:i A') }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>This message was sent from your portfolio contact form.</p>
        <p>You can reply directly to this email to respond to {{ $contactData['name'] }}.</p>
    </div>
</body>
</html>
