<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC API Hub</title>
    <style>
        :root {
            --bg: #f7f4ef;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #4b5563;
            --primary: #14532d;
            --accent: #b45309;
            --border: #e5e7eb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: radial-gradient(circle at top right, #fef3c7 0%, var(--bg) 40%), var(--bg);
            color: var(--text);
            line-height: 1.6;
        }

        .container {
            width: min(980px, 92%);
            margin: 0 auto;
            padding: 2.5rem 0 4rem;
        }

        .hero {
            background: linear-gradient(135deg, #ecfccb 0%, #ffffff 60%);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 2rem;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
        }

        h1, h2 {
            margin: 0 0 0.75rem;
            line-height: 1.25;
        }

        h1 {
            font-size: clamp(1.6rem, 3vw, 2.4rem);
            color: var(--primary);
        }

        h2 {
            font-size: clamp(1.2rem, 2vw, 1.5rem);
            margin-top: 1.4rem;
        }

        p {
            margin: 0.3rem 0 0.8rem;
            color: var(--muted);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 1rem;
            margin-top: 1.1rem;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1rem;
        }

        ul {
            padding-left: 1.1rem;
            margin: 0.5rem 0;
        }

        li + li {
            margin-top: 0.4rem;
        }

        .endpoint-list a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
        }

        .endpoint-list a:hover {
            text-decoration: underline;
        }

        .badge {
            display: inline-block;
            background: #dcfce7;
            color: #166534;
            border: 1px solid #86efac;
            border-radius: 999px;
            font-size: 0.85rem;
            padding: 0.2rem 0.65rem;
            margin-bottom: 0.7rem;
        }
    </style>
</head>
<body>
    <main class="container">
        <section class="hero">
            <span class="badge">API Laravel do TCC</span>
            <h1>API App de Reciclagem</h1>
            <p>Uma base de API para gerenciar pontos de coleta, materiais recicláveis e dados do aplicativo de conscientização ecológica.</p>

            <div class="grid">
                <article class="card">
                    <h2>Problema</h2>
                    <p>Incentivar o descarte correto de materiais e facilitar a localização de pontos de coleta (como escolas e comércios parceiros).</p>
                </article>

                <article class="card">
                    <h2>Público-alvo</h2>
                    <p>Cidadãos conscientes, catadores de materiais recicláveis e parceiros de coleta ecológica.</p>
                </article>
            </div>

            <article class="card" style="margin-top: 1rem;">
                <h2>Funcionalidades principais</h2>
                <ul>
                    <li>Consulta do status da API em produção.</li>
                    <li>Listagem de pontos de coleta e materiais recicláveis.</li>
                    <li>Padrão de cores para lixeiras de reciclagem.</li>
                    <li>Perfil e localização do usuário.</li>
                </ul>
            </article>

            <article class="card endpoint-list" style="margin-top: 1rem;">
                <h2>Endpoints da API</h2>
                <ul>
                    <li><a href="/api/status" target="_blank" rel="noopener">/api/status</a> - Retorna o status de funcionamento da API.</li>
                    <li><a href="/api/pontos-coleta" target="_blank" rel="noopener">/api/pontos-coleta</a> - Lista os locais de entrega e os materiais aceitos.</li>
                    <li><a href="/api/cores-reciclagem" target="_blank" rel="noopener">/api/cores-reciclagem</a> - Retorna o padrão de cores da reciclagem.</li>
                    <li><a href="/api/usuario" target="_blank" rel="noopener">/api/usuario</a> - Retorna os dados e a localização do usuário simulado.</li>
                </ul>
            </article>
        </section>
    </main>
</body>
</html>
