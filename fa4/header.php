<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shows Recommendation</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f4f6f9; color: #333; margin: 0; padding: 0; }
        header { background-color: #2c3e50; color: white; padding: 20px; text-align: center; }
        nav { background-color: #34495e; padding: 10px; text-align: center; }
        nav a { color: #ecf0f1; text-decoration: none; margin: 0 15px; font-weight: bold; }
        nav a:hover { color: #1abc9c; }
        
        .story-grid { 
            display: flex; 
            justify-content: space-between; 
            gap: 15px; 
            max-width: 1200px; 
            margin: 40px auto; 
            padding: 0 20px;
        }
        
        .story-column {
            flex: 1;
            background: white;
            border: 2px solid #bdc3c7;
            border-radius: 4px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .story-column:hover {
            border-color: #1abc9c;
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.1);
        }
        .story-column img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .story-column h3 { margin: 10px 0; color: #2c3e50; font-size: 1.2rem; }
        .story-column p { font-size: 0.9rem; line-height: 1.4; color: #666; text-align: justify; }
        
        /* Single view container */
        .container { max-width: 800px; margin: 30px auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .story-img-large { width: 100%; max-height: 400px; object-fit: cover; border-radius: 6px; margin-bottom: 20px; }
        .full-text { line-height: 1.8; font-size: 1.1rem; text-align: justify; }
        
        footer { text-align: center; padding: 20px; background: #2c3e50; color: white; margin-top: 40px; }
    </style>
</head>
<body>
<header>
    <h1>Shows Recommendation</h1>
</header>