<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashir Project</title>
    <style>
        :root {
            --primary: #6c5ce7;
            --primary-dark: #5649c0;
            --secondary: #00cec9;
            --bg-dark: #0f0f13;
            --bg-darker: #0a0a0d;
            --bg-light: #1a1a23;
            --text-main: #f0f0f5;
            --text-secondary: #b8b8c0;
            --accent: #fd79a8;
            --gradient: linear-gradient(135deg, var(--primary), var(--secondary));
        }
        
        body {
            margin: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: var(--bg-dark);
            color: var(--text-main);
            line-height: 1.6;
        }


        header {
            background: var(--bg-darker);
            padding: 0;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
        }

        .header-content {
            position: relative;
            z-index: 2;
            padding: 10px 0 10px;
        }

        .header-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 75% 30%, rgba(108, 92, 231, 0.15), transparent 70%);
            z-index: 1;
        }

        header h1 {
            color: var(--text-main);
            margin: 0;
            font-size: 2.5rem;
            font-weight: 800;
            text-align: center;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -0.5px;
            padding-bottom: 10px;
        }

        header h1::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: var(--gradient);
            margin: 10px auto 0;
            border-radius: 2px;
        }

        nav {
            background-color: rgba(10, 10, 13, 0.95);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            padding: 15px 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        nav a {
            color: var(--text-secondary);
            margin: 0 15px;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.3s ease;
            position: relative;
            padding: 5px 8px;
            border-radius: 4px;
        }

        nav a:hover {
            color: var(--text-main);
            background: rgba(108, 92, 231, 0.1);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient);
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        .content {
            flex: 1;
            padding: 40px;
            max-width: 1000px;
            margin: 40px auto;
            background-color: var(--bg-light);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .content h2 {
            color: var(--primary);
            margin: 25px 0 15px;
            font-weight: 700;
            font-size: 1.8rem;
            position: relative;
            padding-bottom: 10px;
        }

        .content h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--gradient);
            border-radius: 3px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.7;
            color: var(--text-secondary);
            margin-bottom: 20px;
        }

        .content ul, .content ol {
            padding-left: 25px;
            margin-bottom: 25px;
        }

        .content ul li, .content ol li {
            margin-bottom: 12px;
            color: var(--text-secondary);
            position: relative;
            padding-left: 15px;
        }

        .content ul li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 10px;
            width: 6px;
            height: 6px;
            background: var(--primary);
            border-radius: 50%;
        }

        footer {
            background-color: var(--bg-darker);
            color: var(--text-secondary);
            text-align: center;
            padding: 25px 15px;
            font-size: 14px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        footer p {
            margin: 0;
        }

        .glow {
            animation: glow 8s ease-in-out infinite alternate;
        }

        @keyframes glow {
            0% {
                box-shadow: 0 0 10px rgba(108, 92, 231, 0.3);
            }
            50% {
                box-shadow: 0 0 20px rgba(108, 92, 231, 0.5);
            }
            100% {
                box-shadow: 0 0 10px rgba(0, 206, 201, 0.3);
            }
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }
            
            .content {
                padding: 25px;
                margin: 25px 20px;
                border-radius: 12px;
            }
            
            nav a {
                margin: 0 10px;
                font-size: 15px;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 1.8rem;
            }
            
            nav a {
                display: inline-block;
                margin: 5px;
                padding: 8px 12px;
            }
            
            .content {
                padding: 20px;
                margin: 20px 15px;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-bg"></div>
        <div class="header-content">
            <h1>TaskFlow</h1>
        </div>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/contact') }}">Contact</a>
            <a href="{{ url('/tasks') }}">My Tasks</a>
        </nav>
    </header>

    <div class="content glow">
        @yield('content')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Hashir. All rights reserved.</p>
    </footer>
</body>
</html>