<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecojac API | TCC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #10b981;
            --primary-dark: #059669;
            --secondary: #0ea5e9;
            --bg-color: #f8fafc;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --card-bg: rgba(255, 255, 255, 0.8);
            --card-border: rgba(255, 255, 255, 0.4);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.6;
            overflow-x: hidden;
            background: linear-gradient(135deg, #f0fdf4 0%, #e0f2fe 100%);
            min-height: 100vh;
        }

        h1, h2, h3, h4 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* HEADER */
        header {
            padding: 2rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary-dark);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo span {
            color: var(--secondary);
        }

        /* HERO SECTION */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 4rem 0 6rem;
            gap: 4rem;
        }

        .hero-content {
            flex: 1;
        }

        .badge {
            display: inline-block;
            background: rgba(16, 185, 129, 0.1);
            color: var(--primary-dark);
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
            border: 1px solid rgba(16, 185, 129, 0.2);
            backdrop-filter: blur(4px);
        }

        .hero h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            color: var(--text-main);
        }

        .hero h1 span {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.25rem;
            color: var(--text-muted);
            margin-bottom: 2.5rem;
            max-width: 500px;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            text-decoration: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(16, 185, 129, 0.4);
        }

        /* ANIMATED HERO GRAPHIC */
        .hero-graphic {
            flex: 1;
            position: relative;
            height: 400px;
        }

        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--card-border);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .floating-card-1 {
            position: absolute;
            top: 20px;
            right: 0;
            width: 300px;
            animation: float 6s ease-in-out infinite;
        }

        .floating-card-2 {
            position: absolute;
            bottom: 40px;
            left: 20px;
            width: 250px;
            animation: float 8s ease-in-out infinite alternate;
            z-index: 2;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .stat-row {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(16, 185, 129, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.5rem;
        }

        /* FEATURES SECTION */
        .features {
            padding: 5rem 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .grid-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2.5rem;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.03);
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.06);
            border-color: rgba(16, 185, 129, 0.2);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #d1fae5 0%, #ecfdf5 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
        }

        /* API DOCS SECTION */
        .api-docs {
            background: #0f172a;
            color: white;
            padding: 5rem 0;
            border-radius: 40px 40px 0 0;
            margin-top: 4rem;
        }

        .api-docs .section-header h2 {
            color: white;
        }

        .api-docs .section-header p {
            color: #94a3b8;
        }

        .endpoint-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 1.5rem;
        }

        .endpoint-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 1.5rem;
            transition: all 0.3s ease;
        }

        .endpoint-card:hover {
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(16, 185, 129, 0.5);
        }

        .method {
            display: inline-block;
            background: #10b981;
            color: white;
            padding: 0.2rem 0.6rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 700;
            margin-right: 0.5rem;
            font-family: monospace;
        }

        .url {
            font-family: monospace;
            color: #e2e8f0;
            text-decoration: none;
            font-size: 1.1rem;
        }
        
        .url:hover {
            text-decoration: underline;
            color: #10b981;
        }

        .endpoint-desc {
            color: #94a3b8;
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        footer {
            background: #0f172a;
            padding: 2rem 0;
            text-align: center;
            color: #64748b;
            border-top: 1px solid rgba(255,255,255,0.05);
        }

        @media (max-width: 900px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }
            .hero p {
                margin: 0 auto 2rem;
            }
            .hero-graphic {
                width: 100%;
                height: 300px;
            }
            .floating-card-1 {
                position: relative;
                width: 100%;
                top: 0;
                margin-bottom: 1rem;
            }
            .floating-card-2 {
                position: relative;
                width: 100%;
                bottom: 0;
                left: 0;
            }
            .hero h1 {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <a href="#" class="logo">Eco<span>jac</span></a>
        </header>

        <section class="hero">
            <div class="hero-content">
                <span class="badge">Projeto de TCC - API Laravel</span>
                <h1>O futuro é <span>verde.</span> <br>Faça a sua parte.</h1>
                <p>O aplicativo Ecogo conecta cidadãos conscientes aos pontos de coleta mais próximos (escolas, comércios), facilitando o descarte correto de materiais recicláveis.</p>
                <a href="#api" class="cta-button">Explorar Documentação API</a>
            </div>
            <div class="hero-graphic">
                <div class="glass-card floating-card-1">
                    <div class="stat-row">
                        <div class="stat-icon" style="color: #0ea5e9; background: rgba(14, 165, 233, 0.1);">♻️</div>
                        <div>
                            <h4 style="color: #0f172a; font-size: 1.1rem;">Escola Vigneron</h4>
                            <p style="color: #64748b; font-size: 0.85rem;">Ponto de Coleta Ativo</p>
                        </div>
                    </div>
                    <div style="background: #f1f5f9; height: 8px; border-radius: 4px; width: 100%; margin-top: 1rem;">
                        <div style="background: var(--primary); height: 100%; border-radius: 4px; width: 85%;"></div>
                    </div>
                </div>

                <div class="glass-card floating-card-2">
                    <div class="stat-row">
                        <div class="stat-icon" style="color: #eab308; background: rgba(234, 179, 8, 0.1);">⭐</div>
                        <div>
                            <h4 style="color: #0f172a; font-size: 1.1rem;">Maria Recicladora</h4>
                            <p style="color: #64748b; font-size: 0.85rem;">350 pontos ganhos</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="section-header">
                <h2>Como Funciona</h2>
                <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Nosso aplicativo foi desenhado para simplificar a jornada da reciclagem, unindo tecnologia e sustentabilidade.</p>
            </div>
            
            <div class="grid-features">
                <div class="feature-card">
                    <div class="feature-icon">📍</div>
                    <h3>Encontre Pontos</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Localize rapidamente instituições como a Casa da Agricultura ou o Mercado Magnanimmo que aceitam seus recicláveis.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🎨</div>
                    <h3>Cores da Reciclagem</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Aprenda a separar corretamente os materiais seguindo o padrão universal de cores (azul, vermelho, verde, etc).</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">👤</div>
                    <h3>Perfil e Pontuação</h3>
                    <p style="color: var(--text-muted); margin-top: 1rem;">Cadastre-se, acompanhe seu histórico de entregas ecológicas e ganhe pontos por contribuir com o planeta.</p>
                </div>
            </div>
        </section>
    </div>

    <section id="api" class="api-docs">
        <div class="container">
            <div class="section-header">
                <h2>Endpoints da API</h2>
                <p>Abaixo estão as rotas disponíveis nesta aplicação Laravel, prontas para consumo pelo Front-end/App.</p>
            </div>

            <div class="endpoint-grid">
                <a href="/api/status" target="_blank" class="endpoint-card" style="text-decoration: none;">
                    <div><span class="method">GET</span> <span class="url">/api/status</span></div>
                    <div class="endpoint-desc">Retorna o status de funcionamento da API. Útil para health-checks.</div>
                </a>

                <a href="/api/pontos-coleta" target="_blank" class="endpoint-card" style="text-decoration: none;">
                    <div><span class="method">GET</span> <span class="url">/api/pontos-coleta</span></div>
                    <div class="endpoint-desc">Lista os locais de entrega (escolas, mercados) e os materiais que eles aceitam.</div>
                </a>

                <a href="/api/cores-reciclagem" target="_blank" class="endpoint-card" style="text-decoration: none;">
                    <div><span class="method">GET</span> <span class="url">/api/cores-reciclagem</span></div>
                    <div class="endpoint-desc">Retorna o padrão de cores da reciclagem para construção da interface gráfica.</div>
                </a>

                <a href="/api/usuario" target="_blank" class="endpoint-card" style="text-decoration: none;">
                    <div><span class="method">GET</span> <span class="url">/api/usuario</span></div>
                    <div class="endpoint-desc">Retorna os dados, pontuação e localização aproximada do usuário logado.</div>
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2026 Ecojac / Ecogo. Trabalho de Conclusão de Curso (TCC). Desenvolvido com Laravel.</p>
        </div>
    </footer>
</body>
</html>
