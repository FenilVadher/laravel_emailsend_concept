<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Follow-Up Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 10px 0;
        }
        .header img {
            max-width: 100px;
        }
        .content {
            padding: 20px;
        }
        .content h1 {
            color: #333333;
        }
        .content p {
            line-height: 1.6;
            color: #666666;
        }
        .content a {
            color: #1a73e8;
            text-decoration: none;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            color: #999999;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <img src="your-logo-url-here" alt="Company Logo">
        </div>
        <div class="content">
            <h1>Hello, {{$name}}!</h1>
            <p>
                I hope this email finds you well. I wanted to follow up on our recent conversation regarding [topic]. Your input and feedback were invaluable, and I'm excited about the potential for us to collaborate further.
            </p>
            <p>
                As discussed, please find attached [document/report/link] for your review. I would love to hear your thoughts and discuss the next steps. Could we schedule a call next week to go over the details?
            </p>
            <p>
                Thank you once again for your time and consideration. Looking forward to hearing from you soon.
            </p>
            <p>
                Best regards,<br>
                {{$from}}
            </p>
            <p>
                <a href="your-website-url-here">Visit our website</a> | <a href="unsubscribe-url-here">Unsubscribe</a>
            </p>
        </div>
        <div class="footer">
            &copy; 2024 Your Company Name. All rights reserved.
        </div>
    </div>
</body>
</html>
