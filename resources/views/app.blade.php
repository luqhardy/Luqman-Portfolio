<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luqman Hadi Portfolio</title>
    @vite('resources/css/app.css')
    <style>
        .profile-hero {
            display: flex;
            min-height: 100vh;
        }
        .profile-left {
            background: #181818;
            color: #fff;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 4rem;
        }
        .jp-name {
            font-size: 1.5rem;
            letter-spacing: 0.2em;
            margin-bottom: 1rem;
        }
        .en-name {
            font-size: 4rem;
            font-weight: bold;
            line-height: 1;
            margin-bottom: 2rem;
        }
        .profile-links a {
            font-size: 2rem;
            margin-right: 1rem;
            color: #fff;
        }
        .profile-right {
            position: relative;
            flex: 1;
            overflow: hidden;
        }
        .profile-photo {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            filter: brightness(0.7);
        }
        .overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(to left, rgba(24,24,24,0.7) 60%, transparent 100%);
        }
        @media (max-width: 768px) {
            .profile-hero { flex-direction: column; }
            .profile-left, .profile-right { padding: 2rem; }
            .en-name { font-size: 2.5rem; }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="profile-hero">
        <div class="profile-left">
            <div class="jp-name">ルクマン　ハディ</div>
            <div class="en-name">Luqman<br>Hadi</div>
            <div class="profile-links">
                <a href="https://github.com/luqmanhadi" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/luqmanhadi/" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="profile-right">
            <img src="/images/luqman-hadi.png" alt="Luqman Hadi" class="profile-photo" />
            <div class="overlay"></div>
        </div>
    </div>
</body>
</html>